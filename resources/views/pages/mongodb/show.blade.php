@extends('layouts.master')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h5>Show</h5>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('mongodb.data.index')}}">Data</a></li>
                    <li class="breadcrumb-item active">Show</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <!-- Zero Configuration  Starts-->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Detail Data</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex flex-column flex-md-row align-items-center">
                            <div class="me-md-4 mb-2 mb-md-0">
                                <strong class="fs-6">Subject:</strong> <span class="fs-6"
                                    id="subject">{{$data->subject}}</span>
                            </div>
                            <div class="me-md-4 mb-2 mb-md-0">
                                <strong class="fs-6">Condition:</strong> <span class="fs-6"
                                    id="condition">{{$data->condition}}</span>
                            </div>
                            <div class="me-md-4 mb-2 mb-md-0">
                                <strong class="fs-6">Trial:</strong> <span class="fs-6"
                                    id="trial">{{$data->trial}}</span>
                            </div>
                            <div>
                                <strong class="fs-6">Sample:</strong> <span class="fs-6"
                                    id="sample">{{$data->sample}}</span>
                            </div>
                        </div>
                        <div class="d-flex">
                            <button type="button" class="btn btn-primary me-2 edit">Edit</button>
                            <button type="button" class="btn btn-danger me-2 delete" data-bs-toggle="modal"
                                data-bs-target="#deleteModal">Delete</button>
                            <button type="button" class="btn btn-success me-2 update" style="display:none;"
                                data-id="{{$data->id}}"
                                data-url="{{route('mongodb.data.update', $data->id)}}">Update</button>
                            <button type="button" class="btn btn-danger me-2 cancel"
                                style="display:none;">Cancel</button>
                            <button type="button" class="btn btn-info" data-bs-toggle="modal"
                                data-bs-target="#queryInfo">Query Info</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-2">
                                    <label class="form-label">Fp1</label>
                                    <input class="form-control data-bio" type="text" id="Fp1" disabled
                                        value="{{$data->Fp1}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">AF7</label>
                                    <input class="form-control data-bio" type="text" id="AF7" disabled
                                        value="{{$data->AF7}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">AF3</label>
                                    <input class="form-control data-bio" type="text" id="AF3" disabled
                                        value="{{$data->AF3}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">F1</label>
                                    <input class="form-control data-bio" type="text" id="F1" disabled
                                        value="{{$data->F1}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">F3</label>
                                    <input class="form-control data-bio" type="text" id="F3" disabled
                                        value="{{$data->F3}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">F5</label>
                                    <input class="form-control data-bio" type="text" id="F5" disabled
                                        value="{{$data->F5}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-2">
                                    <label class="form-label">F7</label>
                                    <input class="form-control data-bio" type="text" id="F7" disabled
                                        value="{{$data->F7}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">FT7</label>
                                    <input class="form-control data-bio" type="text" id="FT7" disabled
                                        value="{{$data->FT7}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">FC5</label>
                                    <input class="form-control data-bio" type="text" id="FC5" disabled
                                        value="{{$data->FC5}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">FC3</label>
                                    <input class="form-control data-bio" type="text" id="FC3" disabled
                                        value="{{$data->FC3}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">FC1</label>
                                    <input class="form-control data-bio" type="text" id="FC1" disabled
                                        value="{{$data->FC1}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">C1</label>
                                    <input class="form-control data-bio" type="text" id="C1" disabled
                                        value="{{$data->C1}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-2">
                                    <label class="form-label">C3</label>
                                    <input class="form-control data-bio" type="text" id="C3" disabled
                                        value="{{$data->C3}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">C5</label>
                                    <input class="form-control data-bio" type="text" id="C5" disabled
                                        value="{{$data->C5}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">T7</label>
                                    <input class="form-control data-bio" type="text" id="T7" disabled
                                        value="{{$data->T7}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">TP7</label>
                                    <input class="form-control data-bio" type="text" id="TP7" disabled
                                        value="{{$data->TP7}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">CP5</label>
                                    <input class="form-control data-bio" type="text" id="CP5" disabled
                                        value="{{$data->CP5}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">CP3</label>
                                    <input class="form-control data-bio" type="text" id="CP3" disabled
                                        value="{{$data->CP3}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-2">
                                    <label class="form-label">CP1</label>
                                    <input class="form-control data-bio" type="text" id="CP1" disabled
                                        value="{{$data->CP1}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">P1</label>
                                    <input class="form-control data-bio" type="text" id="P1" disabled
                                        value="{{$data->P1}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">P3</label>
                                    <input class="form-control data-bio" type="text" id="P3" disabled
                                        value="{{$data->P3}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">P5</label>
                                    <input class="form-control data-bio" type="text" id="P5" disabled
                                        value="{{$data->P5}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">P7</label>
                                    <input class="form-control data-bio" type="text" id="P7" disabled
                                        value="{{$data->P7}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">P9</label>
                                    <input class="form-control data-bio" type="text" id="P9" disabled
                                        value="{{$data->P9}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-2">
                                    <label class="form-label">PO7</label>
                                    <input class="form-control data-bio" type="text" id="PO7" disabled
                                        value="{{$data->PO7}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">PO3</label>
                                    <input class="form-control data-bio" type="text" id="PO3" disabled
                                        value="{{$data->PO3}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">O1</label>
                                    <input class="form-control data-bio" type="text" id="O1" disabled
                                        value="{{$data->O1}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Iz</label>
                                    <input class="form-control data-bio" type="text" id="Iz" disabled
                                        value="{{$data->Iz}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Oz</label>
                                    <input class="form-control data-bio" type="text" id="Oz" disabled
                                        value="{{$data->Oz}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">POz</label>
                                    <input class="form-control data-bio" type="text" id="POz" disabled
                                        value="{{$data->POz}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-2">
                                    <label class="form-label">Pz</label>
                                    <input class="form-control data-bio" type="text" id="Pz" disabled
                                        value="{{$data->Pz}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">CPz</label>
                                    <input class="form-control data-bio" type="text" id="CPz" disabled
                                        value="{{$data->CPz}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Fpz</label>
                                    <input class="form-control data-bio" type="text" id="Fpz" disabled
                                        value="{{$data->Fpz}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Fp2</label>
                                    <input class="form-control data-bio" type="text" id="Fp2" disabled
                                        value="{{$data->Fp2}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">AF8</label>
                                    <input class="form-control data-bio" type="text" id="AF8" disabled
                                        value="{{$data->AF8}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">AF4</label>
                                    <input class="form-control data-bio" type="text" id="AF4" disabled
                                        value="{{$data->AF4}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-2">
                                    <label class="form-label">AFz</label>
                                    <input class="form-control data-bio" type="text" id="AFz" disabled
                                        value="{{$data->AFz}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Fz</label>
                                    <input class="form-control data-bio" type="text" id="Fz" disabled
                                        value="{{$data->Fz}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">F2</label>
                                    <input class="form-control data-bio" type="text" id="F2" disabled
                                        value="{{$data->F2}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">F4</label>
                                    <input class="form-control data-bio" type="text" id="F4" disabled
                                        value="{{$data->F4}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">F6</label>
                                    <input class="form-control data-bio" type="text" id="F6" disabled
                                        value="{{$data->F6}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">F8</label>
                                    <input class="form-control data-bio" type="text" id="F8" disabled
                                        value="{{$data->F8}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-2">
                                    <label class="form-label">FT8</label>
                                    <input class="form-control data-bio" type="text" id="FT8" disabled
                                        value="{{$data->FT8}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">FC6</label>
                                    <input class="form-control data-bio" type="text" id="FC6" disabled
                                        value="{{$data->FC6}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">FC5</label>
                                    <input class="form-control data-bio" type="text" id="FC5" disabled
                                        value="{{$data->FC5}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">FC2</label>
                                    <input class="form-control data-bio" type="text" id="FC2" disabled
                                        value="{{$data->FC2}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">FCz</label>
                                    <input class="form-control data-bio" type="text" id="FCz" disabled
                                        value="{{$data->FCz}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Cz</label>
                                    <input class="form-control data-bio" type="text" id="Cz" disabled
                                        value="{{$data->Cz}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-2">
                                    <label class="form-label">C2</label>
                                    <input class="form-control data-bio" type="text" id="C2" disabled
                                        value="{{$data->C2}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">C4</label>
                                    <input class="form-control data-bio" type="text" id="C4" disabled
                                        value="{{$data->C4}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">C6</label>
                                    <input class="form-control data-bio" type="text" id="C6" disabled
                                        value="{{$data->C6}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">T8</label>
                                    <input class="form-control data-bio" type="text" id="T8" disabled
                                        value="{{$data->T8}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">TP8</label>
                                    <input class="form-control data-bio" type="text" id="TP8" disabled
                                        value="{{$data->TP8}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">CP6</label>
                                    <input class="form-control data-bio" type="text" id="CP6" disabled
                                        value="{{$data->CP6}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-2">
                                    <label class="form-label">CP4</label>
                                    <input class="form-control data-bio" type="text" id="CP4" disabled
                                        value="{{$data->CP4}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">CP2</label>
                                    <input class="form-control data-bio" type="text" id="CP2" disabled
                                        value="{{$data->CP2}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">P2</label>
                                    <input class="form-control data-bio" type="text" id="P2" disabled
                                        value="{{$data->P2}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">P4</label>
                                    <input class="form-control data-bio" type="text" id="P4" disabled
                                        value="{{$data->P4}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">P6</label>
                                    <input class="form-control data-bio" type="text" id="P6" disabled
                                        value="{{$data->P6}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">P8</label>
                                    <input class="form-control data-bio" type="text" id="P8" disabled
                                        value="{{$data->P8}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row g-3">
                                <div class="col-md-2">
                                    <label class="form-label">P10</label>
                                    <input class="form-control data-bio" type="text" id="P10" disabled
                                        value="{{$data->P10}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">PO8</label>
                                    <input class="form-control data-bio" type="text" id="PO8" disabled
                                        value="{{$data->PO8}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">PO4</label>
                                    <input class="form-control data-bio" type="text" id="PO4" disabled
                                        value="{{$data->PO4}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">O2</label>
                                    <input class="form-control data-bio" type="text" id="O2" disabled
                                        value="{{$data->O2}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">VEOa</label>
                                    <input class="form-control data-bio" type="text" id="VEOa" disabled
                                        value="{{$data->VEOa}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">VEOb</label>
                                    <input class="form-control data-bio" type="text" id="VEOb" disabled
                                        value="{{$data->VEOb}}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row g-3 justify-content-center">
                                <div class="col-md-2">
                                    <label class="form-label">HEOL</label>
                                    <input class="form-control data-bio" type="text" id="HEOL" disabled
                                        value="{{$data->HEOL}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">HEOR</label>
                                    <input class="form-control data-bio" type="text" id="HEOR" disabled
                                        value="{{$data->HEOR}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Nose</label>
                                    <input class="form-control data-bio" type="text" id="Nose" disabled
                                        value="{{$data->Nose}}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">TP10</label>
                                    <input class="form-control data-bio" type="text" id="TP10" disabled
                                        value="{{$data->TP10}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

<div class="modal fade" id="queryInfo" tabindex="-1" role="dialog" aria-labelledby="queryInfoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Query Info</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h6 class="text-muted mb-3" id="queryInfoTime">{{$time}}</h6>
                <div class="mb-2 row">
                    <div class="col-auto fw-bold">Type :</div>
                    <div class="col" id="queryInfoType">{{$type}}</div>
                </div>
                <div class="mb-2 row">
                    <div class="col-auto fw-bold">Query :</div>
                    <pre id="queryInfoQuery" style="white-space: pre-wrap;">{{ $queryLog[0]['query'] }}</pre>
                </div>
                <div class="mb-2 row">
                    <div class="col-auto fw-bold">Time :</div>
                    <div class="col" id="queryInfoQueryTime">{{$queryTime}}</div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="queryInfoLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete data</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">Are you sure you want to delete this data permanently ?</div>
            <div class="modal-footer">
                <form action="{{route('mongodb.data.delete', $data->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@push('addon-script')
    <script type="text/javascript">
        $(document).ready(function () {
            // Store the original values
            var originalValues = {};

            $('.data-bio').each(function () {
                var id = $(this).attr('id');
                originalValues[id] = $(this).val();
            });

            // Show Save and Cancel, hide Edit when Edit button is clicked
            $('.edit').on('click', function () {
                $(this).hide();
                $('.delete').hide();
                $('.update').show();
                $('.cancel').show();
                $('.data-bio').prop('disabled', false);
            });

            // Hide Save and Cancel, show Edit when Cancel button is clicked
            $('.cancel').on('click', function () {
                $('.update').hide();
                $(this).hide();
                $('.edit').show();
                $('.delete').show();
                $('.data-bio').prop('disabled', true);

                $('.data-bio').each(function () {
                    var id = $(this).attr('id');
                    $(this).val(originalValues[id]);
                });
            });

            $('.update').on('click', function () {
                console.log($(this).data('id'));
                var updatedValues = {};
                var formData = new FormData()
                var isEmpty = false;
                var validatedPattern = /^(?=.*\d)(?!.*-.*-)(?!.*,.*.*,).*$/;

                $('.data-bio').each(function () {
                    var id = $(this).attr('id');
                    var value = $(this).val().trim();

                    if (!value || !validatedPattern.test(value)) {
                        isEmpty = true;
                        return false;
                    }

                    updatedValues[id] = value;
                    formData.set(id, value)
                });

                if (isEmpty) {
                    alert("Data is incorrect!");
                    return;
                }

                formData.set('_method', 'PUT');

                console.log(updatedValues);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: $(this).data('url'),
                    data: formData,
                    method: "POST",
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function (response) {
                        originalValues = updatedValues;

                        $('#queryInfoTime').text(response.time);
                        $('#queryInfoQuery').text(response.queryLog[0].query);
                        $('#queryInfoQueryTime').text(response.queryTime);
                        $('#queryInfoType').text(response.type);
                        Swal.fire({
                            position: 'bottom-end',
                            icon: 'success',
                            title: 'Data Updated',
                            showConfirmButton: false,
                            timer: 1200,
                            width: 350,
                        });

                        $('.update').hide();
                        $('.cancel').hide();
                        $('.edit').show();
                        $('.delete').show();
                        $('.data-bio').prop('disabled', true);
                    }
                });
            });
        });
    </script>
@endpush