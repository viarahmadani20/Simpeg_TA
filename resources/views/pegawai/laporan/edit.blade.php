@section('title')
Edit Laporan
@endsection
@section('master')
active
@endsection
@extends('apppegawai')
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Edit Laporan</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tabel Master</li>
          <li class="breadcrumb-item"><a href="/guru/laporan">Laporan</a></li>
          <li class="breadcrumb-item"><a href="#">Edit Laporan</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <!-- <h3 class="tile-title">Register</h3> -->
            <div class="tile-body">
              <!-- <form class="form-horizontal" action="#" method="post"> -->
              <form class="form-horizontal"  method="post" action="{{route('pegawai/lap_edit', $laporan->id)}}">
                <div class="form-group row">
                    @csrf
                  <label class="control-label col-md-3">Nama Laporan</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" value="{{$laporan->nama_laporan}}" name="nama_laporan">
                  </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Dokumen</label>
                    <div class="col-md-5">
                      <input class="form-control col-md-8" type="file" value="{{$laporan->file}}" name="file">
                    </div>
                </div>

            <div class="tile-footer">
              <div class="row">
              <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Edit</button>
                  <a class="btn btn-secondary" href="/pegawai/laporan"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>

              </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </main>

@endsection
