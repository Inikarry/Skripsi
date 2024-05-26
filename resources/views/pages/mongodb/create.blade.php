@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h3>Form Data</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('mongodb.data.index')}}">Data</a></li>
                    <li class="breadcrumb-item active">Form</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>EEG Form Data</h5><span>Please input new data</span>
                </div>
                <div class="card-body">
                    <form class="form-wizard" id="formData" action="{{route('mongodb.create.save')}}" method="POST">
                        @csrf
                        <div class="tab">
                            <div class="mb-3">
                                <label for="subject">Suject</label>
                                <input class="form-control numeric-input data-patient" id="subject" type="text"
                                    name="subject">
                            </div>
                            <div class="mb-3">
                                <label for="condition">Condition</label>
                                <input class="form-control numeric-input data-patien" id="condition" type="text" name="condition">
                            </div>
                            <div class="mb-3">
                                <label for="trial">Trial</label>
                                <input class="form-control numeric-input data-patien" id="trial" type="text" name="trial">
                            </div>
                            <div class="mb-3">
                                <label for="sample">Sample</label>
                                <input class="form-control numeric-input data-patien" id="sample" type="text" name="sample">
                            </div>
                        </div>
                        <div class="tab">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-2">
                                            <label class="form-label">Fp1</label>
                                            <input class="form-control data-bio" type="text" id="Fp1" name="Fp1">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">AF7</label>
                                            <input class="form-control data-bio" type="text" id="AF7" name="AF7">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">AF3</label>
                                            <input class="form-control data-bio" type="text" id="AF3" name="AF3">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">F1</label>
                                            <input class="form-control data-bio" type="text" id="F1" name="F1">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">F3</label>
                                            <input class="form-control data-bio" type="text" id="F3" name="F3">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">F5</label>
                                            <input class="form-control data-bio" type="text" id="F5" name="F5">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-2">
                                            <label class="form-label">F7</label>
                                            <input class="form-control data-bio" type="text" id="F7" name="F7">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">FT7</label>
                                            <input class="form-control data-bio" type="text" id="FT7" name="FT7">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">FC5</label>
                                            <input class="form-control data-bio" type="text" id="FC5" name="FC5">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">FC3</label>
                                            <input class="form-control data-bio" type="text" id="FC3" name="FC3">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">FC1</label>
                                            <input class="form-control data-bio" type="text" id="FC1" name="FC1">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">C1</label>
                                            <input class="form-control data-bio" type="text" id="C1" name="C1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-2">
                                            <label class="form-label">C3</label>
                                            <input class="form-control data-bio" type="text" id="C3" name="C3">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">C5</label>
                                            <input class="form-control data-bio" type="text" id="C5" name="C5">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">T7</label>
                                            <input class="form-control data-bio" type="text" id="T7" name="T7">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">TP7</label>
                                            <input class="form-control data-bio" type="text" id="TP7" name="TP7">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">CP5</label>
                                            <input class="form-control data-bio" type="text" id="CP5" name="CP5">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">CP3</label>
                                            <input class="form-control data-bio" type="text" id="CP3" name="CP3">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-2">
                                            <label class="form-label">CP1</label>
                                            <input class="form-control data-bio" type="text" id="CP1" name="CP1">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">P1</label>
                                            <input class="form-control data-bio" type="text" id="P1" name="P1">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">P3</label>
                                            <input class="form-control data-bio" type="text" id="P3" name="P3">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">P5</label>
                                            <input class="form-control data-bio" type="text" id="P5" name="P5">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">P7</label>
                                            <input class="form-control data-bio" type="text" id="P7" name="P7">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">P9</label>
                                            <input class="form-control data-bio" type="text" id="P9" name="P9">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-2">
                                            <label class="form-label">PO7</label>
                                            <input class="form-control data-bio" type="text" id="PO7" name="PO7">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">PO3</label>
                                            <input class="form-control data-bio" type="text" id="PO3" name="PO3">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">O1</label>
                                            <input class="form-control data-bio" type="text" id="O1" name="O1">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Iz</label>
                                            <input class="form-control data-bio" type="text" id="Iz" name="Iz">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Oz</label>
                                            <input class="form-control data-bio" type="text" id="Oz" name="Oz">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">POz</label>
                                            <input class="form-control data-bio" type="text" id="POz" name="POz">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-2">
                                            <label class="form-label">Pz</label>
                                            <input class="form-control data-bio" type="text" id="Pz" name="Pz">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">CPz</label>
                                            <input class="form-control data-bio" type="text" id="CPz" name="CPz">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Fpz</label>
                                            <input class="form-control data-bio" type="text" id="Fpz" name="Fpz">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Fp2</label>
                                            <input class="form-control data-bio" type="text" id="Fp2" name="Fp2">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">AF8</label>
                                            <input class="form-control data-bio" type="text" id="AF8" name="AF8">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">AF4</label>
                                            <input class="form-control data-bio" type="text" id="AF4" name="AF4">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-2">
                                            <label class="form-label">AFz</label>
                                            <input class="form-control data-bio" type="text" id="AFz" name="AFz">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Fz</label>
                                            <input class="form-control data-bio" type="text" id="Fz" name="Fz">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">F2</label>
                                            <input class="form-control data-bio" type="text" id="F2" name="F2">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">F4</label>
                                            <input class="form-control data-bio" type="text" id="F4" name="F4">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">F6</label>
                                            <input class="form-control data-bio" type="text" id="F6" name="F6">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">F8</label>
                                            <input class="form-control data-bio" type="text" id="F8" name="F8">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-2">
                                            <label class="form-label">FT8</label>
                                            <input class="form-control data-bio" type="text" id="FT8" name="FT8">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">FC6</label>
                                            <input class="form-control data-bio" type="text" id="FC6" name="FC6">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">FC5</label>
                                            <input class="form-control data-bio" type="text" id="FC5" name="FC5">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">FC2</label>
                                            <input class="form-control data-bio" type="text" id="FC2" name="FC2">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">FCz</label>
                                            <input class="form-control data-bio" type="text" id="FCz" name="FCz">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Cz</label>
                                            <input class="form-control data-bio" type="text" id="Cz" name="Cz">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-2">
                                            <label class="form-label">C2</label>
                                            <input class="form-control data-bio" type="text" id="C2" name="C2">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">C4</label>
                                            <input class="form-control data-bio" type="text" id="C4" name="C4">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">C6</label>
                                            <input class="form-control data-bio" type="text" id="C6" name="C6">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">T8</label>
                                            <input class="form-control data-bio" type="text" id="T8" name="T8">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">TP8</label>
                                            <input class="form-control data-bio" type="text" id="TP8" name="TP8">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">CP6</label>
                                            <input class="form-control data-bio" type="text" id="CP6" name="CP6">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-2">
                                            <label class="form-label">CP4</label>
                                            <input class="form-control data-bio" type="text" id="CP4" name="CP4">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">CP2</label>
                                            <input class="form-control data-bio" type="text" id="CP2" name="CP2">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">P2</label>
                                            <input class="form-control data-bio" type="text" id="P2" name="P2">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">P4</label>
                                            <input class="form-control data-bio" type="text" id="P4" name="P4">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">P6</label>
                                            <input class="form-control data-bio" type="text" id="P6" name="P6">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">P8</label>
                                            <input class="form-control data-bio" type="text" id="P8" name="P8">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-md-2">
                                            <label class="form-label">P10</label>
                                            <input class="form-control data-bio" type="text" id="P10" name="P10">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">PO8</label>
                                            <input class="form-control data-bio" type="text" id="PO8" name="PO8">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">PO4</label>
                                            <input class="form-control data-bio" type="text" id="PO4" name="PO4">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">O2</label>
                                            <input class="form-control data-bio" type="text" id="O2" name="O2">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">VEOa</label>
                                            <input class="form-control data-bio" type="text" id="VEOa" name="VEOa">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">VEOb</label>
                                            <input class="form-control data-bio" type="text" id="VEOb" name="VEOb">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="row g-3 justify-content-center">
                                        <div class="col-md-2">
                                            <label class="form-label">HEOL</label>
                                            <input class="form-control data-bio" type="text" id="HEOL" name="HEOL">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">HEOR</label>
                                            <input class="form-control data-bio" type="text" id="HEOR" name="HEOR">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">Nose</label>
                                            <input class="form-control data-bio" type="text" id="Nose" name="Nose">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="form-label">TP10</label>
                                            <input class="form-control data-bio" type="text" id="TP10" name="TP10">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="text-end btn-mb">
                                <button class="btn btn-secondary" id="prevBtn" type="button"
                                    onclick="nextPrev(-1)">Previous</button>
                                <button class="btn btn-primary" id="nextBtn" type="button"
                                    onclick="nextPrev(1)">Next</button>
                                <button class="btn btn-primary" style="display:none;" id="submitBtn" type="button"
                                    onclick="submitForm()">Submit</button>
                            </div>
                        </div>
                        <!-- Circles which indicates the steps of the form:-->
                        <div class="text-center"><span class="step"></span><span class="step"></span></div>
                        <!-- Circles which indicates the steps of the form:-->
                        <!-- Container-fluid Ends-->
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@push('addon-script')
    <script type="text/javascript">
        var currentTab = 0;
        showTab(currentTab);
        function showTab(n) {
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
                document.getElementById("submitBtn").style.display = "none";
                document.getElementById("nextBtn").style.display = "inline";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
                document.getElementById("submitBtn").style.display = "inline";
                document.getElementById("nextBtn").style.display = "none";
            }
            fixStepIndicator(n)
        }
        function nextPrev(n) {
            if (n == 1) {
                if (isFormEmpty("next")) {
                    alert("Data cannot be empty!");
                    return;
                }

                var params = {
                    subject: $('#subject').val(),
                    trial: $('#trial').val(),
                    condition: $('#condition').val(),
                    sample: $('#sample').val(),
                };

                $.ajax({
                    url: "{{ route('mongodb.create.check') }}",
                    method: "GET",
                    data: params,
                    dataType: 'json',
                    success: function (response) {
                        if (response) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Data already exist!',
                                text: 'please input a new data.',
                            });
                            return false;
                        } else {
                            proceedToNextTab(n);
                        }
                    },
                });
            } else {
                proceedToNextTab(n);
            }
        }

        function submitForm() {
            if (isFormEmpty("submit")) {
                alert("Data cannot be empty or contain multiple hyphens and commas!");
                return;
            }

            document.getElementById("formData").submit();
        }

        function proceedToNextTab(n) {
            var x = document.getElementsByClassName("tab");
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
            showTab(currentTab);
        }

        function isFormEmpty(btn) {
            var isEmpty = false;

            if (btn == "next") {
                $('.data-patient').each(function () {
                    var value = $(this).val().trim();

                    if (!value) {
                        isEmpty = true;
                    }
                });
            }

            if (btn == "submit") {
                var validatedPattern = /^(?=.*\d)(?!.*-.*-)(?!.*,.*.*,).*$/;

                $('.data-bio').each(function () {
                    var value = $(this).val().trim();

                    if (!value || !validatedPattern.test(value)) {
                        isEmpty = true;
                    }
                });
            }

            return isEmpty;
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            x[n].className += " active";
        }
    </script>
@endpush