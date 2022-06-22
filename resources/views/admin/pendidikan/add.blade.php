@section('title')
Tambah Pendidikan
@endsection
@section('pegawai')
active
@endsection
@extends('app')
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Tambah Pendidikan</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">...</li>
          <li class="breadcrumb-item"><a href="#">Detail Pegawai</a></li>
          <li class="breadcrumb-item"><a href="#">Pendidikan</a></li>
          <li class="breadcrumb-item"><a href="#">Tambah Pendidikan</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <form class="form-horizontal" action="{{url('/admin/pendidikan')}}" method="post" action="{{ route('admin/simpan_pendidikan')}}">
                <div class = "form-group row">
                    @csrf
                  <label class="control-label col-md-3">Tahun Pendidikan</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" name="tahun_pendidikan">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Pendidikan Terakhir</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" name="nama_pendidikan">
                  </div>
                </div>
                </div>

            <div class="tile-footer">
              <div class="row">
                <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
                  <a class="btn btn-secondary" href="/admin/pendidikan"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection
