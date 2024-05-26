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
                $query->where('subject', $request->input('filter_subject'));
            }
            if ($request->filled('filter_trial')) {
                $query->where('trial', $request->input('filter_trial'));
            }
            if ($request->filled('filter_condition')) {
                $query->where('condition', $request->input('filter_condition'));
            }
            if ($request->filled('filter_sample')) {
                $query->where('sample', $request->input('filter_sample'));
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
                    $route = route('mongodb.data.show', $mongodb->id);
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
        return view('pages.mongodb.create');
    }

    public function checkExist(Request $request)
    {
        $exist = EEGMongodb::where('subject', $request->subject)
            ->where('trial', $request->trial)
            ->where('condition', $request->condition)
            ->where('sample', $request->sample)
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
        DB::connection('mongodb')->enableQueryLog();
        $start_time = microtime(true);

        EEGMongodb::create($request->all());

        $end_time = microtime(true);
        $queryLog = DB::connection('mongodb')->getQueryLog();

        $time_taken = $end_time - $start_time;

        return view("pages.mongodb.store", [
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
        DB::connection('mongodb')->enableQueryLog();
        $start_time = microtime(true);

        $data = EEGMongodb::find($id);

        $end_time = microtime(true);
        $queryLog = DB::connection('mongodb')->getQueryLog();

        // Calculate the time taken
        $time_taken = $end_time - $start_time;

        return view("pages.mongodb.show", [
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
        DB::connection('mongodb')->enableQueryLog();
        $start_time = microtime(true);

        EEGMongodb::where('_id', $id)->update($request->except('_method'));

        $end_time = microtime(true);
        $queryLog = DB::connection('mongodb')->getQueryLog();

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
        DB::connection('mongodb')->enableQueryLog();
        $start_time = microtime(true);

        EEGMongodb::where('_id', $id)->delete();

        $end_time = microtime(true);
        $queryLog = DB::connection('mongodb')->getQueryLog();

        $time_taken = $end_time - $start_time;

        return view("pages.mongodb.delete", [
            'queryLog' => $queryLog,
            'queryTime' => $time_taken,
            'time' => $time->toDateTimeString(),
            'type' => 'Delete',
        ]);
    }
}
