@section('title')
Tambah Surat-Menyurat
@endsection
@section('master')
active
@endsection
@extends('appguru')
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Tambah Surat-Menyurat</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tabel Master</li>
          <li class="breadcrumb-item"><a href="admin/surat">Laporan</a></li>
          <li class="breadcrumb-item"><a href="#">Tambah Laporan</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <!-- <h3 class="tile-title">Register</h3> -->
            <div class="tile-body">
              <!-- <form class="form-horizontal" action="#" method="post"> -->
              <form class="form-horizontal" action="{{url('guru/surat')}}" method="post" action="{{('guru/buat_surat')}}">
                <div class="form-group row">
                    @csrf
                  <label class="control-label col-md-3">Nama Surat</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" name="nama_surat">
                  </div>
                  <label class="control-label col-md-3">Keterangan</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" name="keterangan">
                  </div>
                  </div>

            <div class="tile-footer">
              <div class="row">
              <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
                  <a class="btn btn-secondary" href="guru/surat"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>

              </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </main>

@endsection
