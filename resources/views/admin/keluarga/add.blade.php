@section('title')
Tambah Status Keluarga
@endsection
@section('master')
active
@endsection
@extends('app')
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Tambah Status Keluarga</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tabel Keluarga</li>
          <li class="breadcrumb-item"><a href="/admin/keluarga">Status Keluarga</a></li>
          <li class="breadcrumb-item"><a href="#">Tambah Status Keluarga</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <!-- <h3 class="tile-title">Register</h3> -->
            <div class="tile-body">
              <!-- <form class="form-horizontal" action="#" method="post"> -->
              <form class="form-horizontal" action="{{url('/admin/keluarga')}}" method="post" action="{{ route('admin/simpan_keluarga')}}">
                <div class="form-group row">
                    @csrf
                  <label class="control-label col-md-3">Status</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" name="nama_keluarga">
                  </div>
                </div>

            <div class="tile-footer">
              <div class="row">
              <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
                  <a class="btn btn-secondary" href="/admin/keluarga"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>

              </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </main>

@endsection
