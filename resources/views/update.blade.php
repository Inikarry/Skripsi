<!DOCTYPE html>
<html>
<head>
    <title>Update Data</title>
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
    <form action="/save-update/{{ $data->id }}" method="post">
        @csrf
        @method('PATCH')

        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject" value="{{ $data->subject }}" required><br>

        <label for="trial">Trial:</label>
        <input type="text" id="trial" name="trial" value="{{ $data->trial }}" required><br>
        
        <label for="condition">Condition:</label>
        <input type="text" id="condition" name="condition" value="{{ $data->condition }}" required><br>

        <label for="sample">Sample:</label>
        <input type="text" id="sample" name="sample" value="{{ $data->sample }}" required><br>

        <label for="fp1">FP1:</label>
        <input type="text" id="fp1" name="fp1" value="{{ $data->fp1 }}" required><br>

        <label for="af7">AF7:</label>
        <input type="text" id="af7" name="af7" value="{{ $data->af7 }}" required><br>

        <label for="af3">AF3:</label>
        <input type="text" id="af3" name="af3" value="{{ $data->af3 }}" required><br>
        
        <label for="f1">F1:</label>
        <input type="text" id="f1" name="f1" value="{{ $data->f1 }}" required><br>

        <label for="f3">F3:</label>
        <input type="text" id="f3" name="f3" value="{{ $data->f3 }}" required><br>

        <label for="f5">F5:</label>
        <input type="text" id="f5" name="f5" value="{{ $data->f5 }}" required><br>

        <label for="f7">F7:</label>
        <input type="text" id="f7" name="f7" value="{{ $data->f7 }}" required><br>

        <label for="ft7">FT7:</label>
        <input type="text" id="ft7" name="ft7" value="{{ $data->ft7 }}" required><br>
        
        <label for="fc5">FC5:</label>
        <input type="text" id="fc5" name="fc5" value="{{ $data->fc5 }}" required><br>

        <label for="fc3">FC3:</label>
        <input type="text" id="fc3" name="fc3" value="{{ $data->fc3 }}" required><br>

        <label for="fc1">FC1:</label>
        <input type="text" id="fc1" name="fc1" value="{{ $data->fc1 }}" required><br>

        <label for="c1">C1:</label>
        <input type="text" id="c1" name="c1" value="{{ $data->c1 }}" required><br>

        <label for="c3">C3:</label>
        <input type="text" id="c3" name="c3" value="{{ $data->c3 }}" required><br>
        
        <label for="c5">C5:</label>
        <input type="text" id="c5" name="c5" value="{{ $data->c5 }}" required><br>

        <label for="t7">T7:</label>
        <input type="text" id="t7" name="t7" value="{{ $data->t7 }}" required><br>

        <label for="tp7">TP7:</label>
        <input type="text" id="tp7" name="tp7" value="{{ $data->tp7 }}" required><br>

        <label for="cp5">CP5:</label>
        <input type="text" id="cp5" name="cp5" value="{{ $data->cp5 }}" required><br>

        <label for="cp3">CP3:</label>
        <input type="text" id="cp3" name="cp3" value="{{ $data->cp3 }}" required><br>
        
        <label for="cp1">CP1:</label>
        <input type="text" id="cp1" name="cp1" value="{{ $data->cp1 }}" required><br>

        <label for="p1">P1:</label>
        <input type="text" id="p1" name="p1" value="{{ $data->p1 }}" required><br>

        <label for="p3">P3:</label>
        <input type="text" id="p3" name="p3" value="{{ $data->p3 }}" required><br>

        <label for="p5">P5:</label>
        <input type="text" id="p5" name="p5" value="{{ $data->p5 }}" required><br>

        <label for="p7">P7:</label>
        <input type="text" id="p7" name="p7" value="{{ $data->p7 }}" required><br>
        
        <label for="p9">P9:</label>
        <input type="text" id="p9" name="p9" value="{{ $data->p9 }}" required><br>

        <label for="po7">PO7:</label>
        <input type="text" id="po7" name="po7" value="{{ $data->po7 }}" required><br>

        <label for="po3">PO3:</label>
        <input type="text" id="po3" name="po3" value="{{ $data->po3 }}" required><br>

        <label for="o1">O1:</label>
        <input type="text" id="o1" name="o1" value="{{ $data->o1 }}" required><br>

        <label for="iz">Iz:</label>
        <input type="text" id="iz" name="iz" value="{{ $data->iz }}" required><br>
        
        <label for="oz">Oz:</label>
        <input type="text" id="oz" name="oz" value="{{ $data->oz }}" required><br>

        <label for="poz">POz:</label>
        <input type="text" id="poz" name="poz" value="{{ $data->poz }}" required><br>

        <label for="pz">Pz:</label>
        <input type="text" id="pz" name="pz" value="{{ $data->pz }}" required><br>

        <label for="cpz">CPz:</label>
        <input type="text" id="cpz" name="cpz" value="{{ $data->cpz }}" required><br>

        <label for="fpz">Fpz:</label>
        <input type="text" id="fpz" name="fpz" value="{{ $data->fpz }}" required><br>
        
        <label for="fp2">Fp2:</label>
        <input type="text" id="fp2" name="fp2" value="{{ $data->fp2 }}" required><br>

        <label for="af8">AF8:</label>
        <input type="text" id="af8" name="af8" value="{{ $data->af8 }}" required><br>

        <label for="af4">AF4:</label>
        <input type="text" id="af4" name="af4" value="{{ $data->af4 }}" required><br>

        <label for="afz">AFz:</label>
        <input type="text" id="afz" name="afz" value="{{ $data->afz }}" required><br>

        <label for="fz">Fz:</label>
        <input type="text" id="fz" name="fz" value="{{ $data->fz }}" required><br>
        
        <label for="f2">F2:</label>
        <input type="text" id="f2" name="f2" value="{{ $data->f2 }}" required><br>

        <label for="f4">F4:</label>
        <input type="text" id="f4" name="f4" value="{{ $data->f4 }}" required><br>

        <label for="f6">F6:</label>
        <input type="text" id="f6" name="f6" value="{{ $data->f6 }}" required><br>

        <label for="f8">F8:</label>
        <input type="text" id="f8" name="f8" value="{{ $data->f8 }}" required><br>

        <label for="ft8">FT8:</label>
        <input type="text" id="ft8" name="ft8" value="{{ $data->ft8 }}" required><br>
        
        <label for="fc6">FC6:</label>
        <input type="text" id="fc6" name="fc6" value="{{ $data->fc6 }}" required><br>

        <label for="fc4">FC4:</label>
        <input type="text" id="fc4" name="fc4" value="{{ $data->fc4 }}" required><br>

        <label for="fc2">FC2:</label>
        <input type="text" id="fc2" name="fc2" value="{{ $data->fc2 }}" required><br>

        <label for="fcz">FCz:</label>
        <input type="text" id="fcz" name="fcz" value="{{ $data->fcz }}" required><br>

        <label for="cz">Cz:</label>
        <input type="text" id="cz" name="cz" value="{{ $data->cz }}" required><br>
        
        <label for="c2">C2:</label>
        <input type="text" id="c2" name="c2" value="{{ $data->c2 }}" required><br>

        <label for="c4">C4:</label>
        <input type="text" id="c4" name="c4" value="{{ $data->c4 }}" required><br>

        <label for="c6">C6:</label>
        <input type="text" id="c6" name="c6" value="{{ $data->c6 }}" required><br>

        <label for="t8">T8:</label>
        <input type="text" id="t8" name="t8" value="{{ $data->t8 }}" required><br>

        <label for="tp8">TP8:</label>
        <input type="text" id="tp8" name="tp8" value="{{ $data->tp8 }}" required><br>
        
        <label for="cp6">CP6:</label>
        <input type="text" id="cp6" name="cp6" value="{{ $data->cp6 }}" required><br>

        <label for="cp4">CP4:</label>
        <input type="text" id="cp4" name="cp4" value="{{ $data->cp4 }}" required><br>

        <label for="cp2">CP2:</label>
        <input type="text" id="cp2" name="cp2" value="{{ $data->cp2 }}" required><br>

        <label for="p2">P2:</label>
        <input type="text" id="p2" name="p2" value="{{ $data->p2 }}" required><br>

        <label for="p4">P4:</label>
        <input type="text" id="p4" name="p4" value="{{ $data->p4 }}" required><br>
        
        <label for="p6">P6:</label>
        <input type="text" id="p6" name="p6" value="{{ $data->p6 }}" required><br>

        <label for="p8">P8:</label>
        <input type="text" id="p8" name="p8" value="{{ $data->p8 }}" required><br>

        <label for="p10">P10:</label>
        <input type="text" id="p10" name="p10" value="{{ $data->p10 }}" required><br>

        <label for="po8">PO8:</label>
        <input type="text" id="po8" name="po8" value="{{ $data->po8 }}" required><br>

        <label for="po4">PO4:</label>
        <input type="text" id="po4" name="po4" value="{{ $data->po4 }}" required><br>
        
        <label for="o2">O2:</label>
        <input type="text" id="o2" name="o2" value="{{ $data->o2 }}" required><br>

        <label for="veoa">VEOa:</label>
        <input type="text" id="veoa" name="veoa" value="{{ $data->veoa }}" required><br>

        <label for="veob">VEOb:</label>
        <input type="text" id="veob" name="veob" value="{{ $data->veob }}" required><br>

        <label for="heol">HEOL:</label>
        <input type="text" id="heol" name="heol" value="{{ $data->heol }}" required><br>

        <label for="heor">HEOR:</label>
        <input type="text" id="heor" name="heor" value="{{ $data->heor }}" required><br>
        
        <label for="nose">Nose:</label>
        <input type="text" id="nose" name="nose" value="{{ $data->nose }}" required><br>

        <label for="tp10">TP10:</label>
        <input type="text" id="tp10" name="tp10" value="{{ $data->tp10 }}" required><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
