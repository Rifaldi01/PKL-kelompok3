@extends('layouts.admin.master')
@section('konten')
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Detail {{ $team->name  }}</div>
        </div>

    <!--end breadcrumb-->

    <div class="card">
        <div class="row g-0">
            <div class="col-md-4 border-end">
                <img src="{{url('images/team/'. $team->image)}}" class="img-fluid" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title">{{ $team->name  }}</h4>
                    <hr>
                    <h5 class="card-text fs-6 ">Alamat : </h5>
                    <p>{{$team->addres}}</p>
                    <hr>
                    <dl class="row">
                        <dt class="col-sm-3">Status :</dt>
                        <dd class="col-sm-9">{{$team->status}}</dd>
                        <hr>
                        <dt class="col-sm-3">Keahlian :</dt>
                        <dd class="col-sm-9">{{$team->keahlian}}</dd>
                    </dl>
                    <hr>
                    <a href="{{url('admin/dashboard')}}" class="btn btn-primary float-end">Kembali</a>
                </div>
            </div>
@endsection
