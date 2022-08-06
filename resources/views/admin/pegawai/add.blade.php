@section('title')
Tambah Pegawai
@endsection
@section('pegawai')
active
@endsection
@extends('app')
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Tambah Pegawai</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Pegawai</li>
          <li class="breadcrumb-item"><a href="/admin/pegawai"></a></li>
          <li class="breadcrumb-item"><a href="#">Tambah Pegawai</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <!-- <h3 class="tile-title">Register</h3> -->
            <div class="tile-body">
              <!-- <form class="form-horizontal" action="#" method="post"> -->
              <form class="form-horizontal" method="post" action="{{route('admin/simpan_pegawai')}}" enctype="multipart/form-data">
                <div class="form-group row">
                    @csrf
                    <label class="control-label col-md-3">Nama User</label>
                    <div class="col-md-8">
                        <input type="text" name="name" class="form-controller">
                    </div>
                    <label class="control-label col-md-3">Email</label>
                    <div class="col-md-8">
                        <input type="email" name="email" class="form-controller">
                    </div>
                    <label class="control-label col-md-3">Password</label>
                    <div class="col-md-8">
                        <input type="password" name="password" class="form-controller">
                    </div>
                  <label class="control-label col-md-3">NUPTK</label>
                <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" name="nip">
                </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Tempat Lahir</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" name="tempat_lahir">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Tanggal Lahir</label>
                    <div class="col-md-8">
                      <input class="form-control col-md-8" type="date" name="tanggal_lahir" >
                    </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Alamat</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" name="alamat"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Jenis Kelamin</label>
                  <div class="col-md-9">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" value="L" name="jenis_kelamin">Laki-laki
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" value="P" name="jenis_kelamin">Perempuan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Agama</label>
                    <div class="col-md-8">
                        <select class="form-control" name="agama" id="exampleSelect1">
                            @foreach ( $daftar_agama as $agama)
                            <option value="{{$agama->id}}" selected="">{{$agama->nama_agama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Pendidikan</label>
                      <div class="col-md-8">
                          <select class="form-control" name="pendidikan" id="exampleSelect1">
                              @foreach ( $daftar_pendidikan as $pendidikan)
                              <option value="{{$pendidikan->id_pendidikan}}" selected="">{{$pendidikan->nama_pendidikan}}</option>
                              @endforeach
                          </select>
                      </div>
                  </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Pangkat/Golongan</label>
                    <div class="col-md-8">
                        <select class="form-control" name="golongan" id="exampleSelect1">
                            @foreach ( $daftar_golongan as $golongan)
                            <option value="{{$golongan->id}}" selected="">{{$golongan->nama_golongan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Status Pernikahan</label>
                    <div class="col-md-8">
                        <select class="form-control" name="status" id="exampleSelect1">

                            @foreach ( $daftar_keluarga as $keluarga)

                            <option value="{{$keluarga->id}}" selected="">{{$keluarga->nama_keluarga}}</option>

                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="form-group row">
                  <label class="control-label col-md-3">Foto</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="file" name="foto">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Nomor HP</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="no_hp">
                  </div>
                </div>

            <div class="tile-footer">
              <div class="row">
              <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
                  <a class="btn btn-secondary" href="{{ route('admin/pegawai/index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>

              </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </main>

@endsection
