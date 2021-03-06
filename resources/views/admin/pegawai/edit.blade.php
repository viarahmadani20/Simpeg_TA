@extends('app')
@section('title')
Edit Pegawai
@endsection
@section('pegawai')
active
@endsection
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Edit Pegawai</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Pegawai</li>
          <li class="breadcrumb-item"><a href="#">Edit Pegawai</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <!-- <h3 class="tile-title">Register</h3> -->
            <div class="tile-body">
              <form class="form-horizontal" action="{{route('admin/simpan_editpg', $pegawai->id)}}" method="post">
              <div class="form-group row">
                @csrf
                    <label class="control-label col-md-3">NIP</label>
                    <div class="col-md-8">
                      <input class="form-control col-md-8" type="number" name="nip" value="{{$pegawai->nip}}">
                    </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Nama</label>
                  <div class="col-md-8">
                    <input class="form-control" type="text" name="namap" value="{{$pegawai->namap}}">
                  </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Tempat Lahir</label>
                    <div class="col-md-8">
                      <input class="form-control col-md-8" type="text" name="tempat_lahir" value="{{$pegawai->tempat_lahir}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Tanggal Lahir</label>
                    <div class="col-md-8">
                        <input class="form-control col-md-8" type="date" name="tanggal_lahir" value="{{$pegawai->tanggal_lahir}}">
                    </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Alamat</label>
                  <div class="col-md-8">
                    <textarea class="form-control" rows="4" name="alamat">{{$pegawai->alamat}}"</textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Jenis Kelamin</label>
                  <div class="col-md-9">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="L" {{$pegawai->jenis_kelamin == 'L' ? 'checked' : ''}}>Laki-laki
                      </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" value="P" {{$pegawai->jenis_kelamin == 'P' ? 'checked' : ''}}>Perempuan
                      </label>
                    </div>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Agama</label>
                    <div class="col-md-8">
                        <select class="form-control" name="agama" id="exampleSelect1">
                            @foreach($daftar_agama as $agama)
                            <option value="{{$agama->id}}">{{$agama->nama_agama}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{-- <div class="form-group row">
                  <label class="control-label col-md-3">Kewarganegaraan</label>
                    <div class="col-md-8">
                        <select class="form-control" name="negara_id" id="exampleSelect1">
                            @foreach($negara as $tampil)
                            <option value="{{$tampil->id_ngr}}">{{$tampil->nm_negara}}</option>
                            @endforeach
                        </select>
                    </div>
                </div> --}}

                <div class="form-group row">
                  <label class="control-label col-md-3">Golongan</label>
                    <div class="col-md-8">
                        <select class="form-control" name="golongan" id="">
                            @foreach($daftar_golongan as $golongan)
                            <option value="{{$golongan->id}}">{{$golongan->nama_golongan}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Status</label>
                    <div class="col-md-8">
                        <select class="form-control" name="nama_keluarga" id="">
                            @foreach($daftar_keluarga as $keluarga)
                            <option value="{{$keluarga->id}}">{{$keluarga->nama_keluarga}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Foto</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="file" name="foto" value="{{$pegawai->foto}}">
                  </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Nomor HP</label>
                    <div class="col-md-8">
                      <input class="form-control" type="number" name="no_hp" value="{{$pegawai->no_hp}}">
                    </div>
                </div>


            </div>

            <div class="tile-footer">
              <div class="row">
              <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Edit</button>
                  <a class="btn btn-secondary" href="admin/pegawai/index"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>

              </div>

            </div>
              </form>
          </div>
        </div>
      </div>
</main>
@endsection
