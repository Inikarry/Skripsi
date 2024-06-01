<?php

namespace App\Http\Controllers\Elastic;

use Carbon\Carbon;
use App\Models\EEGElastic;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function test()
    {
        $query = EEGElastic::take(10)->get();

        dd($query);
    }
    
     public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = EEGElastic::query();

            $totalRecords = $query->count();

            if ($request->filled('filter_subject')) {
                $query->where('subject', (int) $request->input('filter_subject'));
            }
            if ($request->filled('filter_trial')) {
                $query->where('trial', (int) $request->input('filter_trial'));
            }
            if ($request->filled('filter_condition')) {
                $query->where('condition', (int) $request->input('filter_condition'));
            }
            if ($request->filled('filter_sample')) {
                $query->where('sample', (int) $request->input('filter_sample'));
            }

            $totalFilteredRecords = $query->count();

            $start = $request->input('start');
            $length = $request->input('length');

            // Apply pagination directly in the query
            $query->skip($start)->take($length);

            $time = Carbon::now();
            DB::connection('elasticsearch')->enableQueryLog();
            $start_time = microtime(true);

            // Execute the query and get the results
            $data = $query->get();

            $end_time = microtime(true);
            $queryLog = DB::connection('elasticsearch')->getQueryLog();

            // Calculate the time taken
            $time_taken = $end_time - $start_time;

            $dataTable = DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function (EEGElastic $elasticsearch) {
                    $route = route('elasticsearch.data.show', $elasticsearch->id);
                    $btn = '
                        <a type="button"
                            href="' . $route . '"
                        ><i class="icon-info-alt"></i></a>
                    ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->setTotalRecords($totalRecords)
                ->setFilteredRecords($totalFilteredRecords)
                ->with('additionalData', [
                    'queryLog' => $queryLog,
                    'data' => $data,
                    'queryTime' => $time_taken,
                    'time' => $time->toDateTimeString(),
                    'type' => 'Read',
                ])
                ->skipPaging()
                ->toJson();

            return $dataTable;
        };

        return view("pages.elastic.index");
    }
}
