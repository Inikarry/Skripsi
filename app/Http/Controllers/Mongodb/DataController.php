<?php

namespace App\Http\Controllers\Mongodb;

use App\Http\Controllers\Controller;
use App\Models\EEGMongodb;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = EEGMongodb::query();

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
            DB::connection('mongodb')->enableQueryLog();
            $start_time = microtime(true);

            // Execute the query and get the results
            $data = $query->get();
            
            $end_time = microtime(true);
            $queryLog = DB::connection('mongodb')->getQueryLog();

            // Calculate the time taken
            $time_taken = $end_time - $start_time;

            $dataTable = DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function (EEGMongodb $mongodb) {
                    $btn = '
                        <a type="button"
                            data-id="' . $mongodb->_id . '"
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
                    'time' => $time->toDateTimeString()
                ])
                ->skipPaging()
                ->toJson();

            return $dataTable;
        }
        ;

        return view("pages.mongodb.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
