{{-- <!DOCTYPE html>
<html>
<head>
    <title>Daftar</title>
</head>
<body>
    <h2>Daftar Data Form</h2>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIK</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach($daftar as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->nik }}</td>
                    <td>
                        <form action="/update/{{ $item->id }}" method="post" style="display: inline;">
                            @csrf
                            <button type="submit">Update</button>
                        </form>
                        <form action="/delete/{{ $item->id }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
 --}}

<!DOCTYPE html>
<html>
<head>
    <title>Daftar</title>
</head>
<body>
    <h2>Daftar Data Form</h2>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>subject</th>
                <th>trial</th>
                <th>condition</th>
                <th>sample</th>
                <th>Fp1</th>
                <th>AF7</th>
                <th>AF3</th>
                <th>F1</th>
                <th>F3</th>
                <th>F5</th>
                <th>F7</th>
                <th>FT7</th>
                <th>FC5</th>
                <th>FC3</th>
                <th>FC1</th>
                <th>C1</th>
                <th>C3</th>
                <th>C5</th>
                <th>T7</th>
                <th>TP7</th>
                <th>CP5</th>
                <th>CP3</th>
                <th>CP1</th>
                <th>P1</th>
                <th>P3</th>
                <th>P5</th>
                <th>P7</th>
                <th>P9</th>
                <th>PO7</th>
                <th>PO3</th>
                <th>O1</th>
                <th>Iz</th>
                <th>Oz</th>
                <th>POz</th>
                <th>Pz</th>
                <th>CPz</th>
                <th>Fpz</th>
                <th>Fp2</th>
                <th>AF8</th>
                <th>AF4</th>
                <th>AFz</th>
                <th>Fz</th>
                <th>F2</th>
                <th>F4</th>
                <th>F6</th>
                <th>F8</th>
                <th>FT8</th>
                <th>FC6</th>
                <th>FC4</th>
                <th>FC2</th>
                <th>FCz</th>
                <th>Cz</th>
                <th>C2</th>
                <th>C4</th>
                <th>C6</th>
                <th>T8</th>
                <th>TP8</th>
                <th>CP6</th>
                <th>CP4</th>
                <th>CP2</th>
                <th>P2</th>
                <th>P4</th>
                <th>P6</th>
                <th>P8</th>
                <th>P10</th>
                <th>PO8</th>
                <th>PO4</th>
                <th>O2</th>
                <th>VEOa</th>
                <th>VEOb</th>
                <th>HEOL</th>
                <th>HEOR</th>
                <th>Nose</th>
                <th>TP10</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach($daftar as $item)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $item->subject }}</td>
                    <td>{{ $item->trial }}</td>
                    <td>{{ $item->condition }}</td>
                    <td>{{ $item->sample }}</td>
                    <td>{{ $item->Fp1 }}</td>
                    <td>{{ $item->AF7 }}</td>
                    <td>{{ $item->AF3 }}</td>
                    <td>{{ $item->F1 }}</td>
                    <td>{{ $item->F3 }}</td>
                    <td>{{ $item->F5 }}</td>
                    <td>{{ $item->F7 }}</td>
                    <td>{{ $item->FT7 }}</td>
                    <td>{{ $item->FC5 }}</td>
                    <td>{{ $item->FC3 }}</td>
                    <td>{{ $item->FC1 }}</td>
                    <td>{{ $item->C1 }}</td>
                    <td>{{ $item->C3 }}</td>
                    <td>{{ $item->C5 }}</td>
                    <td>{{ $item->T7 }}</td>
                    <td>{{ $item->TP7 }}</td>
                    <td>{{ $item->CP5 }}</td>
                    <td>{{ $item->CP3 }}</td>
                    <td>{{ $item->CP1 }}</td>
                    <td>{{ $item->P1 }}</td>
                    <td>{{ $item->P3 }}</td>
                    <td>{{ $item->P5 }}</td>
                    <td>{{ $item->P7 }}</td>
                    <td>{{ $item->P9 }}</td>
                    <td>{{ $item->PO7 }}</td>
                    <td>{{ $item->PO3 }}</td>
                    <td>{{ $item->P1 }}</td>
                    <td>{{ $item->Iz }}</td>
                    <td>{{ $item->Oz }}</td>
                    <td>{{ $item->Poz }}</td>
                    <td>{{ $item->Pz }}</td>
                    <td>{{ $item->CPz }}</td>
                    <td>{{ $item->FPz }}</td>
                    <td>{{ $item->FP2 }}</td>
                    <td>{{ $item->AF8 }}</td>
                    <td>{{ $item->AF4 }}</td>
                    <td>{{ $item->AFz }}</td>
                    <td>{{ $item->Fz }}</td>
                    <td>{{ $item->F2 }}</td>
                    <td>{{ $item->F4 }}</td>
                    <td>{{ $item->F6 }}</td>
                    <td>{{ $item->F8 }}</td>
                    <td>{{ $item->FT8 }}</td>
                    <td>{{ $item->FC6 }}</td>
                    <td>{{ $item->FC4 }}</td>
                    <td>{{ $item->FC2 }}</td>
                    <td>{{ $item->FCz }}</td>
                    <td>{{ $item->Cz }}</td>
                    <td>{{ $item->C2 }}</td>
                    <td>{{ $item->C4 }}</td>
                    <td>{{ $item->C6 }}</td>
                    <td>{{ $item->T8 }}</td>
                    <td>{{ $item->TP8 }}</td>
                    <td>{{ $item->CP6 }}</td>
                    <td>{{ $item->CP4 }}</td>
                    <td>{{ $item->CP2 }}</td>
                    <td>{{ $item->P2 }}</td>
                    <td>{{ $item->P4 }}</td>
                    <td>{{ $item->P6 }}</td>
                    <td>{{ $item->P8 }}</td>
                    <td>{{ $item->P10 }}</td>
                    <td>{{ $item->PO8 }}</td>
                    <td>{{ $item->PO4 }}</td>
                    <td>{{ $item->O2 }}</td>
                    <td>{{ $item->VEOa }}</td>
                    <td>{{ $item->VEOb }}</td>
                    <td>{{ $item->HEOL }}</td>
                    <td>{{ $item->HEOR }}</td>
                    <td>{{ $item->Nose }}</td>
                    <td>{{ $item->TP10 }}</td>
                    <td>
                        <form action="/update/{{ $item->id }}" method="post" style="display: inline;">
                            @csrf
                            <button type="submit">Update</button>
                        </form>
                        <form action="/delete/{{ $item->id }}" method="post" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
