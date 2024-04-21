<!DOCTYPE html>
<html>
<head>
    <title>Daftar</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
</head>
<body>
    <h2>Data Pasien</h2>
    <table id="dataTable" class="display" style="width:100%">
        <thead>
            <tr>
                <th>_id</th>
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
                {{-- <th>Action</th> --}}
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                "processing": true,
                "serverSide": true,
                searching: false,
                "ajax": {
                    "url": "{{ url('show-data') }}",
                    "dataType": "json",
                    "type": "post",
                    "data":{ 
                        _token: "{{csrf_token()}}",
                        nomor_pasien: "{{ $_GET['nomor_pasien'] }}"
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        console.log(xhr.status)
                        console.log(xhr.responseText)
                        console.log(thrownError)
                    }
                },
                "columns": [
                    { "data": "_id" },
                    { "data": "subject" },
                    { "data": "trial" },
                    { "data": "condition" },
                    { "data": "sample" },
                    { "data": "Fp1" },
                    { "data": "AF7" },
                    { "data": "AF3" },
                    { "data": "F1" },
                    { "data": "F3" },
                    { "data": "F5" },
                    { "data": "F7" },
                    { "data": "FT7" },
                    { "data": "FC5" },
                    { "data": "FC3" },
                    { "data": "FC1" },
                    { "data": "C1" },
                    { "data": "C3" },
                    { "data": "C5" },
                    { "data": "T7" },
                    { "data": "TP7" },
                    { "data": "CP5" },
                    { "data": "CP3" },
                    { "data": "CP1" },
                    { "data": "P1" },
                    { "data": "P3" },
                    { "data": "P5" },
                    { "data": "P7" },
                    { "data": "P9" },
                    { "data": "PO7" },
                    { "data": "PO3" },
                    { "data": "O1" },
                    { "data": "Iz" },
                    { "data": "Oz" },
                    { "data": "POz" },
                    { "data": "Pz" },
                    { "data": "CPz" },
                    { "data": "Fpz" },
                    { "data": "Fp2" },
                    { "data": "AF8" },
                    { "data": "AF4" },
                    { "data": "AFz" },
                    { "data": "Fz" },
                    { "data": "F2" },
                    { "data": "F4" },
                    { "data": "F6" },
                    { "data": "F8" },
                    { "data": "FT8" },
                    { "data": "FC6" },
                    { "data": "FC4" },
                    { "data": "FC2" },
                    { "data": "FCz" },
                    { "data": "Cz" },
                    { "data": "C2" },
                    { "data": "C4" },
                    { "data": "C6" },
                    { "data": "T8" },
                    { "data": "TP8" },
                    { "data": "CP6" },
                    { "data": "CP4" },
                    { "data": "CP2" },
                    { "data": "P2" },
                    { "data": "P4" },
                    { "data": "P6" },
                    { "data": "P8" },
                    { "data": "P10" },
                    { "data": "PO8" },
                    { "data": "PO4" },
                    { "data": "O2" },
                    { "data": "VEOa" },
                    { "data": "VEOb" },
                    { "data": "HEOL" },
                    { "data": "HEOR" },
                    { "data": "Nose" },
                    { "data": "TP10" },
                    // { "data": "action" }
                ]
            });
        });
    </script>
</body>
</html>
