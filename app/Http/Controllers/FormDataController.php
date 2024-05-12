<?php

namespace App\Http\Controllers;

// use Ramsey\Uuid\Uuid;
// use App\Models\DataMongo;
use App\Models\eeg1;
use App\Models\eeg2;
use App\Models\eeg3;
use App\Models\eeg5;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class FormDataController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

        public function saveForm(Request $request)
    {

        $data = new eeg2;
        $data->subject = $request->input('subject');
        $data->trial = $request->input('trial');
        $data->condition = $request->input('condition');
        $data->sample = $request->input('sample');
        $data->fp1 = $request->input('fp1');
        $data->af7 = $request->input('af7');
        $data->af3 = $request->input('af3');
        $data->f1 = $request->input('f1');
        $data->f3 = $request->input('f3');
        $data->f5 = $request->input('f5');
        $data->f7 = $request->input('f7');
        $data->ft7 = $request->input('ft7');
        $data->fc5 = $request->input('fc5');
        $data->fc3 = $request->input('fc3');
        $data->fc1 = $request->input('fc1');
        $data->c1 = $request->input('c1');
        $data->c3 = $request->input('c3');
        $data->c5 = $request->input('c5');
        $data->t7 = $request->input('t7');
        $data->tp7 = $request->input('tp7');
        $data->cp5 = $request->input('cp5');
        $data->cp3 = $request->input('cp3');
        $data->cp1 = $request->input('cp1');
        $data->p1 = $request->input('p1');
        $data->p3 = $request->input('p3');
        $data->p5 = $request->input('p5');
        $data->p7 = $request->input('p7');
        $data->p9 = $request->input('p9');
        $data->po7 = $request->input('po7');
        $data->po3 = $request->input('po3');
        $data->o1 = $request->input('o1');
        $data->iz = $request->input('iz');
        $data->oz = $request->input('oz');
        $data->poz = $request->input('poz');
        $data->pz = $request->input('pz');
        $data->cpz = $request->input('cpz');
        $data->fpz = $request->input('fpz');
        $data->fp2 = $request->input('fp2');
        $data->af8 = $request->input('af8');
        $data->af4 = $request->input('af4');
        $data->afz = $request->input('afz');
        $data->fz = $request->input('fz');
        $data->f2 = $request->input('f2');
        $data->f4 = $request->input('f4');
        $data->f6 = $request->input('f6');
        $data->f8 = $request->input('f8');
        $data->ft8 = $request->input('ft8');
        $data->fc6 = $request->input('fc6');
        $data->fc4 = $request->input('fc4');
        $data->fc2 = $request->input('fc2');
        $data->fcz = $request->input('fcz');
        $data->cz = $request->input('cz');
        $data->c2 = $request->input('c2');
        $data->c4 = $request->input('c4');
        $data->c6 = $request->input('c6');
        $data->t8 = $request->input('t8');
        $data->tp8 = $request->input('tp8');
        $data->cp6 = $request->input('cp6');
        $data->cp4 = $request->input('cp4');
        $data->cp2 = $request->input('cp2');
        $data->p2 = $request->input('p2');
        $data->p4 = $request->input('p4');
        $data->p6 = $request->input('p6');
        $data->p8 = $request->input('p8');
        $data->p10 = $request->input('p10');
        $data->po8 = $request->input('po8');
        $data->po4 = $request->input('po4');
        $data->o2 = $request->input('o2');
        $data->veoa = $request->input('veoa');
        $data->veob = $request->input('veob');
        $data->heol = $request->input('heol');
        $data->heor = $request->input('heor');
        $data->nose = $request->input('nose');
        $data->tp10 = $request->input('tp10');

        $data->save();

        return redirect()->route('daftar')->with('success', 'Data berhasil disimpan');
    }


    public function showDaftar()
    {
        $daftar = eeg2::take(15000)->get();
        return view('daftar', ['daftar' => $daftar]);
    }

    // public function showData(Request $request)
    // {
    //     if ($request->ajax()) {
            
    //         $data = eeg2::take(17000)->get();
    //         // $data = eeg2::all();
    //         return DataTables::of($data)
    //             ->addColumn('action', function ($row) {
    //                 $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a>';
    //                 $btn .= ' <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
    //                 return $btn;
    //             })
    //             ->rawColumns(['action'])
    //             ->make(true);
    //     }
    //     return view('data');
    // }

    public function data() {
    return view('data');

    }

    public function showData(Request $request)
    {
        if ($request->ajax()) {
            $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a>';
            $btn .= ' <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
            $columns = array( 
                0 => 'id', 
                1 => 'subject',
                2 => 'trial',
                3 => 'condition',
                4 => 'sample',
                5 => 'Fp1',
                6 => 'AF7',
                7 => 'AF3',
                8 => 'F1',
                9 => 'F3',
                10 => 'F5',
                11 => 'F7',
                12 => 'FT7',
                13 => 'FC5',
                14 => 'FC3',
                15 => 'FC1',
                16 => 'C1',
                17 => 'C3',
                18 => 'C5',
                19 => 'T7',
                20 => 'TP7',
                21 => 'CP5',
                22 => 'CP3',
                23 => 'CP1',
                24 => 'P1',
                25 => 'P3',
                26 => 'P5',
                27 => 'P7',
                28 => 'P9',
                29 => 'PO7',
                30 => 'PO3',
                31 => 'O1',
                32 => 'Iz',
                33 => 'Oz',
                34 => 'POz',
                35 => 'Pz',
                36 => 'CPz',
                37 => 'Fpz',
                38 => 'Fp2',
                39 => 'AF8',
                40 => 'AF4',
                41 => 'AFz',
                42 => 'Fz',
                43 => 'F2',
                44 => 'F4',
                45 => 'F6',
                46 => 'F8',
                47 => 'FT8',
                48 => 'FC6',
                49 => 'FC4',
                50 => 'FC2',
                51 => 'FCz',
                52 => 'Cz',
                53 => 'C2',
                54 => 'C4',
                55 => 'C6',
                56 => 'T8',
                57 => 'TP8',
                58 => 'CP6',
                59 => 'CP4',
                60 => 'CP2',
                61 => 'P2',
                62 => 'P4',
                63 => 'P6',
                64 => 'P8',
                65 => 'P10',
                66 => 'PO8',
                67 => 'PO4',
                68 => 'O2',
                69 => 'VEOa',
                70 => 'VEOb',
                71 => 'HEOL',
                72 => 'HEOR',
                73 => 'Nose',
                74 => 'TP10',
                // 75 => $btn
            );

            $start_time = microtime(true);
            $query = eeg2::query();
            // if ($request->input('nomor_pasien') == 1) {
            //     $totalData = eeg1::count();
            //     $query = eeg1::select('*');
            // } else if ($request->input('nomor_pasien') == 2) {
            //     $totalData = eeg2::count();
            //     $query = eeg2::select('*');
            // }  else if ($request->input('nomor_pasien') == 3) {
            //     $totalData = eeg3::count();
            //     $query = eeg3::select('*');
            // }  else if ($request->input('nomor_pasien') == 5) {
            //     $totalData = eeg5::count();
            //     $query = eeg5::select('*');
            // }
            
            $limit = $request->input('length');
            $start = $request->input('start');
            // $orderColumn = $columns[$request->input('order.0.column')];
            // $orderDirection = $request->input('order.0.dir');
            // $searchValue = $request->input('search.value');


            // if(!empty($searchValue)) {
            //     $query->where('id', 'LIKE', "%{$searchValue}%")
            //           ->orWhere('subject', 'LIKE', "%{$searchValue}%");
            //           // tambahkan kondisi pencarian untuk kolom lainnya
            // }

            $totalFiltered = $query->count();

            $data = $query->offset($start)
                        ->limit($limit)
                        // ->orderBy($orderColumn, $orderDirection)
                        ->get();
            
            // Limit the results to 1000
            // $search = $query->get();
            $end_time = microtime(true);

            // Calculate the time taken
            $time_taken = $end_time - $start_time;
            
            $json_data = array(
                    "draw"            => intval($request->input('draw')),  
                    // "recordsTotal"    => intval($totalData),  
                    // "recordsFiltered" => intval($totalFiltered),
                    "timeTaken"       => $time_taken,
                    "data"            => $data   
                    );
                    
            return response()->json($json_data);             

            // return DataTables::of($data)
            //     ->addColumn('action', function ($row) {
            //         $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a>';
            //         $btn .= ' <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
            //         return $btn;
            //     })
            //     ->rawColumns(['action'])
            //     ->make(true);
        }
    }

    // public function showData()
    // {
    //     $daftar = eeg2::take(15000)->get();
    //     return view('data', ['data' => $daftar]);
    // }

    public function search(Request $request)
    {
        $start_time = microtime(true);
        // Start with a base query
        $query = eeg2::query();

        // Check each request parameter and add a where clause if it's not null
        if ($request->filled('subject')) {
            $query->where('subject', $request->subject);
        }
        if ($request->filled('trial')) {
            $query->where('trial', $request->trial);
        }
        if ($request->filled('condition')) {
            $query->where('condition', $request->condition);
        }
        if ($request->filled('sample')) {
            $query->where('sample', $request->sample);
        }

        // Limit the results to 1000
        $search = $query->take(5000)->get();
        $end_time = microtime(true);

        // Calculate the time taken
        $time_taken = $end_time - $start_time;
        return view('search', ['daftar' => $search, 'searchField' => $request, 'query_time' => $time_taken]);
    }

    public function updateData($id)
    {
        $data = eeg2::findOrFail($id);
        return view('update', ['data' => $data]);
    }

    public function saveUpdate(Request $request, $id)
    {
        $data = eeg2::findOrFail($id);
        $data->subject = $request->input('subject');
        $data->trial = $request->input('trial');
        $data->condition = $request->input('condition');
        $data->sample = $request->input('sample');
        $data->fp1 = $request->input('fp1');
        $data->af7 = $request->input('af7');
        $data->af3 = $request->input('af3');
        $data->f1 = $request->input('f1');
        $data->f3 = $request->input('f3');
        $data->f5 = $request->input('f5');
        $data->f7 = $request->input('f7');
        $data->ft7 = $request->input('ft7');
        $data->fc5 = $request->input('fc5');
        $data->fc3 = $request->input('fc3');
        $data->fc1 = $request->input('fc1');
        $data->c1 = $request->input('c1');
        $data->c3 = $request->input('c3');
        $data->c5 = $request->input('c5');
        $data->t7 = $request->input('t7');
        $data->tp7 = $request->input('tp7');
        $data->cp5 = $request->input('cp5');
        $data->cp3 = $request->input('cp3');
        $data->cp1 = $request->input('cp1');
        $data->p1 = $request->input('p1');
        $data->p3 = $request->input('p3');
        $data->p5 = $request->input('p5');
        $data->p7 = $request->input('p7');
        $data->p9 = $request->input('p9');
        $data->po7 = $request->input('po7');
        $data->po3 = $request->input('po3');
        $data->o1 = $request->input('o1');
        $data->iz = $request->input('iz');
        $data->oz = $request->input('oz');
        $data->poz = $request->input('poz');
        $data->pz = $request->input('pz');
        $data->cpz = $request->input('cpz');
        $data->fpz = $request->input('fpz');
        $data->fp2 = $request->input('fp2');
        $data->af8 = $request->input('af8');
        $data->af4 = $request->input('af4');
        $data->afz = $request->input('afz');
        $data->fz = $request->input('fz');
        $data->f2 = $request->input('f2');
        $data->f4 = $request->input('f4');
        $data->f6 = $request->input('f6');
        $data->f8 = $request->input('f8');
        $data->ft8 = $request->input('ft8');
        $data->fc6 = $request->input('fc6');
        $data->fc4 = $request->input('fc4');
        $data->fc2 = $request->input('fc2');
        $data->fcz = $request->input('fcz');
        $data->cz = $request->input('cz');
        $data->c2 = $request->input('c2');
        $data->c4 = $request->input('c4');
        $data->c6 = $request->input('c6');
        $data->t8 = $request->input('t8');
        $data->tp8 = $request->input('tp8');
        $data->cp6 = $request->input('cp6');
        $data->cp4 = $request->input('cp4');
        $data->cp2 = $request->input('cp2');
        $data->p2 = $request->input('p2');
        $data->p4 = $request->input('p4');
        $data->p6 = $request->input('p6');
        $data->p8 = $request->input('p8');
        $data->p10 = $request->input('p10');
        $data->po8 = $request->input('po8');
        $data->po4 = $request->input('po4');
        $data->o2 = $request->input('o2');
        $data->veoa = $request->input('veoa');
        $data->veob = $request->input('veob');
        $data->heol = $request->input('heol');
        $data->heor = $request->input('heor');
        $data->nose = $request->input('nose');
        $data->tp10 = $request->input('tp10');
        
        $data->save();

        return redirect()->route('daftar')->with('success', 'Data berhasil diperbarui');
    }

    public function deleteData($id)
    {
        $data = eeg2::find($id);
        $data->delete();

        return redirect()->route('daftar')->with('success', 'Data berhasil dihapus');
    }
}

