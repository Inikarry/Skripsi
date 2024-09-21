@extends('layouts.master')
@section('content')

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-sm-6">
                <h5>Data Create</h5>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}"> <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item"><a href="{{route('mongodb.data.index')}}">Data</a></li>
                    <li class="breadcrumb-item active">Detail</li>
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
                <div class="card-header pb-0 text-center">
                    <h5>Your Data Successfully Create.</h5>
                </div>
                <div class="card-body text-center">
                    <a href="{{route('mongodb.data.index')}}" type="button" class="btn btn-primary me-2">Data</a>
                    <a href="{{route('mongodb.create.form')}}" type="button" class="btn btn-warning me-2">Form</a>
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#queryInfo">Query
                        Info</button>
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

@endsection