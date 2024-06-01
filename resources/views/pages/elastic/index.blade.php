@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h5>MongoDB</h5>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Elastic Search</li>
                    <li class="breadcrumb-item active">Data</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header pb-0">
                    <h5>Data EEG Pasien</h5>
                </div>
                <div class="card-body">
                    <form id="filter-form">
                        <div class="row g-3">
                            <div class="col-md-2">
                                <label for="validationCustom01" class="form-label">Subject</label>
                                <input type="text" class="form-control numeric-input" id="filter_subject">
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom02" class="form-label">Trial</label>
                                <input type="text" class="form-control numeric-input" id="filter_trial">
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom03" class="form-label">Condition</label>
                                <input type="text" class="form-control numeric-input" id="filter_condition">
                            </div>
                            <div class="col-md-2">
                                <label for="validationCustom04" class="form-label">Sample</label>
                                <input type="text" class="form-control numeric-input" id="filter_sample">
                            </div>
                            <div class="col-md-2 d-flex align-items-end">
                                <button type="submit" class="btn btn-success">Filter</button>
                            </div>
                            <div class="col-md-2 d-flex align-items-end">
                                <button type="button" class="btn btn-info-gradien" data-bs-toggle="modal"
                                    data-bs-target="#queryInfo">Query Info</button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <div class="table-responsive">
                        <table class="display" id="data-table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Subject</th>
                                    <th>Trial</th>
                                    <th>Condition</th>
                                    <th>Sample</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>
                                        <ul class="action">
                                            <li class="edit"> <a href="#"><i class="icon-info-alt"></i></a></li>
                                        </ul>
                                    </td>
                                </tr> -->
                            </tbody>
                        </table>
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
                <h6 class="text-muted mb-3" id="queryInfoTime"></h6>
                <div class="mb-2 row">
                    <div class="col-auto fw-bold">Type :</div>
                    <div class="col" id="queryInfoType"></div>
                </div>
                <div class="mb-2 row">
                    <div class="col-auto fw-bold">Query :</div>
                    <pre id="queryInfoQuery" style="white-space: pre-wrap;"></pre>
                </div>
                <div class="mb-2 row">
                    <div class="col-auto fw-bold">Time :</div>
                    <div class="col" id="queryInfoQueryTime"></div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection
@push('addon-script')
    <script type="text/javascript">
        $(document).ready(function () {
            var table = $('#data-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: function (data, callback, settings) {
                    var queryParams = {
                        filter_subject: $('#filter_subject').val(),
                        filter_trial: $('#filter_trial').val(),
                        filter_condition: $('#filter_condition').val(),
                        filter_sample: $('#filter_sample').val(),
                        start: data.start,
                        length: data.length,
                    };

                    $.ajax({
                        url: "{{ route('elasticsearch.data.index') }}",
                        method: "GET",
                        data: queryParams,
                        dataType: 'json',
                        success: function (response) {
                            if (response.success === 0) {
                                var values = '';
                                $.each(response.error, function (key, value) {
                                    values += value + '\n';
                                });
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Terjadi Kesalahan',
                                    text: values,
                                });
                            } else {
                                // Call DataTables callback to update the table
                                callback({
                                    draw: response.draw,
                                    recordsTotal: response.recordsTotal,
                                    recordsFiltered: response.recordsFiltered,
                                    data: response.data
                                });
                                $('#queryInfoTime').text(response.additionalData.time);
                                // $('#queryInfoQuery').text(response.additionalData.queryLog[0].query);
                                $('#queryInfoQueryTime').text(response.additionalData.queryTime);
                                $('#queryInfoType').text(response.additionalData.type);
                                Swal.fire({
                                    position: 'bottom-end',
                                    icon: 'success',
                                    title: 'Data Loaded',
                                    showConfirmButton: false,
                                    timer: 1200,
                                    width: 350,
                                });
                                console.log(response);
                            }
                        },
                        error: function (xhr, status, error) {
                            Swal.fire({
                                icon: 'error',
                                title: 'Error',
                                text: 'An error occurred while processing your request.',
                            });
                        }
                    });
                },
                lengthMenu: [10, 20, 50, 100, 1000, 2000, 5000],
                searching: false,
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false },
                    { data: 'subject', name: 'subject' },
                    { data: 'trial', name: 'trial' },
                    { data: 'condition', name: 'condition' },
                    { data: 'sample', name: 'sample' },
                    { data: 'action', name: 'action', orderable: false, className: 'text-center' },
                ],
                order: [1, 'asc'],
            });

            $('#filter-form').on('submit', function (e) {
                e.preventDefault();
                table.draw();
            });
        });
    </script>
@endpush