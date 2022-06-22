@section('title')
Tambah Golongan
@endsection
@section('master')
active
@endsection
@extends('app')
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Tambah Golongan </h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tabel Master</li>
          <li class="breadcrumb-item"><a href="/admin/golongan">Golongan</a></li>
          <li class="breadcrumb-item"><a href="#">Tambah Golongan </a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
              <div class="tile-body">
              <form class="form-horizontal" action="{{url('/admin/golongan')}}" method="post" action="{{route('admin/simpan_golongan')}}">
                <div class="form-group row">
                    @csrf
                  <label class="control-label col-md-3">Nama Golongan </label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" name="nama_golongan">
                  </div>

              </div>

            <div class="tile-footer">
              <div class="row">
              <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
                  <a class="btn btn-secondary" href="/admin/golongan"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>

              </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </main>

@endsection
