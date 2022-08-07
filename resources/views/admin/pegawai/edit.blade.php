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
                        <form class="form-horizontal" action="{{ route('admin/simpan_editpg', $pegawai->id) }}"
                            method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                @csrf
                                <label class="control-label col-md-3">Nama Pegawai</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-controller" value="{{ $pegawai->name }}"
                                        name="name">
                                </div>
                                <label class="control-label col-md-3">Email</label>
                                <div class="col-md-8">
                                    <input type="text" name="email" class="form-controller" value="{{ $pegawai->email }}"
                                        name="email">
                                </div>
                                <label class="control-label col-md-3">NUPTK</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" type="number" name="nip"
                                        value="{{ $pegawai->nip }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Tempat Lahir</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" type="text" name="tempat_lahir"
                                        value="{{ $pegawai->tempat_lahir }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Tanggal Lahir</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" type="date" name="tanggal_lahir"
                                        value="{{ $pegawai->tanggal_lahir }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Alamat</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" name="alamat" value="{{ $pegawai->alamat }}">{{ $pegawai->alamat }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Jenis Kelamin</label>
                                <div class="col-md-9">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                value="L"
                                                {{ $pegawai->jenis_kelamin == 'L' ? 'checked' : '' }}>Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                value="P"
                                                {{ $pegawai->jenis_kelamin == 'P' ? 'checked' : '' }}>Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Agama</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="id_agama" id="exampleSelect1">
                                        @foreach ($daftar_agama as $agama)
                                            <option value="{{ $agama->id }}"
                                                {{ $agama->id == $pegawai->id_agama ? 'selected' : '' }}>
                                                {{ $agama->nama_agama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Pendidikan</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="id_pendidikan" id="exampleSelect1">
                                        @foreach ($daftar_pendidikan as $pendidikan)
                                            <option value="{{ $pendidikan->id_pendidikan }}"
                                                {{ $pendidikan->id_pendidikan == $pegawai->id_pendidikan ? 'selected' : '' }}>
                                                {{ $pendidikan->nama_pendidikan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Golongan</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="id_golongan" id="exampleSelect1">
                                        @foreach ($daftar_golongan as $golongan)
                                            <option value="{{ $golongan->id }}"
                                                {{ $golongan->id == $pegawai->id_golongan ? 'selected' : '' }}>
                                                {{ $golongan->nama_golongan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Status</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="id_status" id="exampleSelect1">
                                        @foreach ($daftar_keluarga as $keluarga)
                                            <option value="{{ $keluarga->id }}"
                                                {{ $keluarga->id == $pegawai->id_status ? 'selected' : '' }}>
                                                {{ $keluarga->nama_keluarga }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Foto</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" type="file" name="foto"
                                        value="{{ $pegawai->foto }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Nomor HP</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="number" name="no_hp"
                                        value="{{ $pegawai->no_hp }}">
                                </div>
                            </div>


                    </div>

                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-3">
                                <button class="btn btn-primary" type="submit"><i
                                        class="fa fa-fw fa-lg fa-check-circle"></i>Edit</button>
                                <a class="btn btn-secondary" href="{{ route('admin/pegawai/index') }}"><i
                                        class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                            </div>

                        </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
@endsection
