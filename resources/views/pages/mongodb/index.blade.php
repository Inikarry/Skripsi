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
                    <li class="breadcrumb-item">MongoDB</li>
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
                    <form action="{{route('mongodb.index')}}" method="get">
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
                                <button type="button" class="btn btn-info-gradien">Query Info</button>
                            </div>
                        </div>
                    </form>
                    <br>
                    <div class="table-responsive">
                        <table class="display" id="data-table">
                            <thead>
                                <tr>
                                    <th>Subject</th>
                                    <th>Trial</th>
                                    <th>Condition</th>
                                    <th>Sample</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>
                                        <ul class="action">
                                            <li class="edit"> <a href="#"><i class="icon-info-alt"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->

@endsection
@push('addon-script')
    <script type="text/javascript">
        $(document).ready(function () {
            $('.numeric-input').on('input', function () {
                $(this).val($(this).val().replace(/\D/g, ''));
            });

            $('#data-table').DataTable({
                lengthMenu: [10, 20, 50, 100, 1000, 10000],
                searching: false
            });
        });
    </script>
@endpush