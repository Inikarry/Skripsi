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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.elastic.create');
    }

    public function checkExist(Request $request)
    {
        $exist = EEGElastic::where('subject', (int) $request->subject)
            ->where('trial', (int) $request->trial)
            ->where('condition', (int) $request->condition)
            ->where('sample', (int) $request->sample)
            ->exists();

        return response()->json($exist);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $time = Carbon::now();
        DB::connection('elasticsearch')->enableQueryLog();
        $start_time = microtime(true);

        EEGElastic::create($request->all());

        $end_time = microtime(true);
        $queryLog = DB::connection('elasticsearch')->getQueryLog();

        $time_taken = $end_time - $start_time;

        return view("pages.elastic.store", [
            'queryLog' => $queryLog,
            'queryTime' => $time_taken,
            'time' => $time->toDateTimeString(),
            'type' => 'Create',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $time = Carbon::now();
        DB::connection('elasticsearch')->enableQueryLog();
        $start_time = microtime(true);

        $data = EEGElastic::find($id);

        $end_time = microtime(true);
        $queryLog = DB::connection('elasticsearch')->getQueryLog();

        // Calculate the time taken
        $time_taken = $end_time - $start_time;

        return view("pages.elastic.show", [
            'queryLog' => $queryLog,
            'data' => $data,
            'queryTime' => $time_taken,
            'time' => $time->toDateTimeString(),
            'type' => 'Read',
        ]);
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
        $time = Carbon::now();
        DB::connection('elasticsearch')->enableQueryLog();
        $start_time = microtime(true);

        EEGElastic::where('_id', $id)->update($request->except('_method'));

        $end_time = microtime(true);
        $queryLog = DB::connection('elasticsearch')->getQueryLog();

        $time_taken = $end_time - $start_time;

        return response()->json([
            'queryLog' => $queryLog,
            'queryTime' => $time_taken,
            'time' => $time->toDateTimeString(),
            'type' => 'Update',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $time = Carbon::now();
        DB::connection('elasticsearch')->enableQueryLog();
        $start_time = microtime(true);

        EEGElastic::where('_id', $id)->delete();

        $end_time = microtime(true);
        $queryLog = DB::connection('elasticsearch')->getQueryLog();

        $time_taken = $end_time - $start_time;

        return view("pages.elastic.delete", [
            'queryLog' => $queryLog,
            'queryTime' => $time_taken,
            'time' => $time->toDateTimeString(),
            'type' => 'Delete',
        ]);
    }
}
