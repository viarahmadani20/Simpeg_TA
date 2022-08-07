@section('title')
    Surat Menyurat
@endsection
@section('master')
    active
@endsection
@extends('app')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div class="div">
                <h1><i class="fa fa-laptop"></i> Surat Menyurat</h1>
                <!-- <p>Bootstrap Components</p> -->
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">Surat Menyurat</a></li>
            </ul>
        </div>
        <!-- Buttons-->
        <div class="tile mb-4">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- <h2 class="mb-3 line-head" id="buttons">Data Pegawai</h2> -->
                        {{-- <div class="form-group col-md 8">
              <a href="{{route('admin/surat/add')}}"
              class="btn btn-primary"><span class="fa fa-plus"> Tambah Ajuan Surat </span></a>
              </div> --}}
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th> Nama Surat</th>
                                    <th> Nama Yang Mengajukan</th>
                                    <th> Keterangan</th>
                                    <th> Status</th>
                                    <th> </th>
                                    <th>Operasi</th>
                                </tr>
                            </thead>
                            @foreach ($daftar_surat as $no_surat => $surat)
                                <tbody>
                                    <tr>
                                        <td class="sorting_1">{{ $no_surat + 1 }}</td>
                                        <td>{{ $surat->nama_surat }}</td>
                                        <td>{{ $surat->pengguna->name }} <br>
                                            {{ $surat->pengguna->email }}
                                        </td>
                                        <td>{{ $surat->keterangan }}</td>
                                        <td>{{ $surat->status }}</td>
                                        <td> </td>
                                        <td>
                                            <a href="{{ route('admin/surat/form_konfirmasi', $surat->id_surat) }}">
                                                Konfirmasi Surat</a>
                                        </td>


                                    </tr>
                                </tbody>
                            @endforeach
                        </table>


                    </div>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </main>
@endsection
