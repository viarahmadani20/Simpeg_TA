@extends('app')
@section('title')
    Dashboard
@endsection
@section('dashboard')
    active
@endsection
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Simpeg Dashboard</h1>
                <p>Dashboard Sistem Kepegawaian</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="admin/pegawai/tampil">Dashboard</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data User</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$user}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-people-group"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Surat</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$surat}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-people-group"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data Laporan</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$laporan}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-people-group"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



    </main>
@endsection
