{{-- <!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <style>
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 20%;
            margin-bottom: 10px;
        }
        button {
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <h2>Form</h2>
    <form action="/save-form" method="post">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="nik">NIK:</label>
        <input type="text" id="nik" name="nik" required><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html> --}}

<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <style>
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 20%;
            margin-bottom: 10px;
        }
        button {
            padding: 5px 10px;
        }
    </style>
</head>
<body>
    <h2>Form</h2>
    <form action="/save-form" method="post">
        @csrf

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" required><br>

        <label for="trial">Trial:</label>
        <input type="text" id="trial" name="trial" required><br>

        <label for="condition">Condition:</label>
        <input type="text" id="condition" name="condition" required><br>

        <label for="sample">Sample:</label>
        <input type="text" id="sample" name="sample" required><br>

        <label for="fp1">Fp1:</label>
        <input type="text" id="fp1" name="fp1" required><br>

        <label for="af7">AF7:</label>
        <input type="text" id="af7" name="af7" required><br>

        <label for="af3">AF3:</label>
        <input type="text" id="af3" name="af3" required><br>
        
        <label for="f1">F1:</label>
        <input type="text" id="f1" name="f1" required><br>
        
        <label for="f3">F3:</label>
        <input type="text" id="f3" name="f3" required><br>

        <label for="f5">F5:</label>
        <input type="text" id="f5" name="f5" required><br>

        <label for="f7">F7:</label>
        <input type="text" id="f7" name="f7" required><br>

        <label for="ft7">FT7:</label>
        <input type="text" id="ft7" name="ft7" required><br>

        <label for="fc5">FC5:</label>
        <input type="text" id="fc5" name="fc5" required><br>

        <label for="fc3">FC3:</label>
        <input type="text" id="fc3" name="fc3" required><br>

        <label for="fc1">FC1:</label>
        <input type="text" id="fc1" name="fc1" required><br>

        <label for="c1">C1:</label>
        <input type="text" id="c1" name="c1" required><br>

        <label for="c3">C3:</label>
        <input type="text" id="c3" name="c3" required><br>

        <label for="c5">C5:</label>
        <input type="text" id="c5" name="c5" required><br>

        <label for="t7">T7:</label>
        <input type="text" id="t7" name="t7" required><br>

        <label for="tp7">TP7:</label>
        <input type="text" id="tp7" name="tp7" required><br>

        <label for="cp5">CP5:</label>
        <input type="text" id="cp5" name="cp5" required><br>

        <label for="cp3">CP3:</label>
        <input type="text" id="cp3" name="cp3" required><br>

        <label for="cp1">CP1:</label>
        <input type="text" id="cp1" name="cp1" required><br>

        <label for="p1">P1:</label>
        <input type="text" id="p1" name="p1" required><br>

        <label for="p3">P3:</label>
        <input type="text" id="p3" name="p3" required><br>

        <label for="p5">P5:</label>
        <input type="text" id="p5" name="p5" required><br>

        <label for="p7">P7:</label>
        <input type="text" id="p7" name="p7" required><br>

        <label for="p9">P9:</label>
        <input type="text" id="p9" name="p9" required><br>

        <label for="po7">PO7:</label>
        <input type="text" id="po7" name="po7" required><br>

        <label for="po3">PO3:</label>
        <input type="text" id="po3" name="po3" required><br>

        <label for="o1">O1:</label>
        <input type="text" id="o1" name="o1" required><br>

        <label for="iz">Iz:</label>
        <input type="text" id="iz" name="iz" required><br>

        <label for="oz">Oz:</label>
        <input type="text" id="oz" name="oz" required><br>

        <label for="poz">POz:</label>
        <input type="text" id="poz" name="poz" required><br>

        <label for="pz">Pz:</label>
        <input type="text" id="pz" name="pz" required><br>

        <label for="cpz">CPz:</label>
        <input type="text" id="cpz" name="cpz" required><br>

        <label for="fpz">FPz:</label>
        <input type="text" id="fpz" name="fpz" required><br>

        <label for="fp2">FP2:</label>
        <input type="text" id="fp2" name="fp2" required><br>

        <label for="af8">AF8:</label>
        <input type="text" id="af8" name="af8" required><br>

        <label for="af4">AF4:</label>
        <input type="text" id="af4" name="af4" required><br>

        <label for="afz">AFz:</label>
        <input type="text" id="afz" name="afz" required><br>

        <label for="fz">Fz:</label>
        <input type="text" id="fz" name="fz" required><br>

        <label for="f2">F2:</label>
        <input type="text" id="f2" name="f2" required><br>

        <label for="f4">F4:</label>
        <input type="text" id="f4" name="f4" required><br>

        <label for="f6">F6:</label>
        <input type="text" id="f6" name="f6" required><br>

        <label for="f8">F8:</label>
        <input type="text" id="f8" name="f8" required><br>

        <label for="ft8">FT8:</label>
        <input type="text" id="ft8" name="ft8" required><br>

        <label for="fc6">FC6:</label>
        <input type="text" id="fc6" name="fc6" required><br>

        <label for="fc4">FC4:</label>
        <input type="text" id="fc4" name="fc4" required><br>

        <label for="fc2">FC2:</label>
        <input type="text" id="fc2" name="fc2" required><br>

        <label for="fcz">FCz:</label>
        <input type="text" id="fcz" name="fcz" required><br>

        <label for="cz">Cz:</label>
        <input type="text" id="cz" name="cz" required><br>

        <label for="c2">C2:</label>
        <input type="text" id="c2" name="c2" required><br>

        <label for="c4">C4:</label>
        <input type="text" id="c4" name="c4" required><br>

        <label for="c6">C6:</label>
        <input type="text" id="c6" name="c6" required><br>

        <label for="t8">T8:</label>
        <input type="text" id="t8" name="t8" required><br>

        <label for="tp8">TP8:</label>
        <input type="text" id="tp8" name="tp8" required><br>

        <label for="cp6">CP6:</label>
        <input type="text" id="cp6" name="cp6" required><br>

        <label for="cp4">CP4:</label>
        <input type="text" id="cp4" name="cp4" required><br>

        <label for="cp2">CP2:</label>
        <input type="text" id="cp2" name="cp2" required><br>

        <label for="p2">P2:</label>
        <input type="text" id="p2" name="p2" required><br>

        <label for="p4">P4:</label>
        <input type="text" id="p4" name="p4" required><br>

        <label for="p6">P6:</label>
        <input type="text" id="p6" name="p6" required><br>

        <label for="p8">P8:</label>
        <input type="text" id="p8" name="p8" required><br>

        <label for="p10">P10:</label>
        <input type="text" id="p10" name="p10" required><br>

        <label for="po8">PO8:</label>
        <input type="text" id="po8" name="po8" required><br>

        <label for="po4">PO4:</label>
        <input type="text" id="po4" name="po4" required><br>

        <label for="o2">O2:</label>
        <input type="text" id="o2" name="o2" required><br>

        <label for="veoa">VEOa:</label>
        <input type="text" id="veoa" name="veoa" required><br>

        <label for="veob">VEOb:</label>
        <input type="text" id="veob" name="veob" required><br>

        <label for="heol">HEOl:</label>
        <input type="text" id="heol" name="heol" required><br>

        <label for="heor">HEOr:</label>
        <input type="text" id="heor" name="heor" required><br>

        <label for="nose">Nose:</label>
        <input type="text" id="nose" name="nose" required><br>

        <label for="tp10">TP10:</label>
        <input type="text" id="tp10" name="tp10" required><br>


        <button type="submit">Simpan</button>
    </form>
</body>
</html>
