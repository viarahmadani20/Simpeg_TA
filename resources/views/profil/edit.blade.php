@extends('apppegawai')
@section('title')
    Edit Profil
@endsection
@section('pegawai')
    active
@endsection
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> Edit Profil</h1>
                <!-- <p>Sample forms</p> -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <!-- <h3 class="tile-title">Register</h3> -->
                    <div class="tile-body">
                        <form class="form-horizontal" action="{{ route('profil/simpan_edit', $user->id) }}" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                @csrf
                                <label class="control-label col-md-3">Nama Pegawai</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-controller"
                                        value="{{ $user->name }}" name="name">
                                </div>
                                <label class="control-label col-md-3">Email</label>
                                <div class="col-md-8">
                                    <input type="text" name="email" class="form-controller"
                                        value="{{ $user->email }}" name="email">
                                </div>
                                <label class="control-label col-md-3">Password</label>
                                <div class="col-md-8">
                                    <input type="text" name="password" class="form-controller"
                                        value="{{ $user->password }}" name="password">
                                </div>
                                <label class="control-label col-md-3">NIP</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" type="number" name="nip"
                                        value="{{ $user->nip }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Tempat Lahir</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" type="text" name="tempat_lahir"
                                        value="{{ $user->tempat_lahir }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Tanggal Lahir</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" type="date" name="tanggal_lahir"
                                        value="{{ $user->tanggal_lahir }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Alamat</label>
                                <div class="col-md-8">
                                    <textarea class="form-control" rows="4" name="alamat">{{ $user->alamat }}</textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Jenis Kelamin</label>
                                <div class="col-md-9">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                value="L" {{ $user->jenis_kelamin == 'L' ? 'checked' : '' }}>Laki-laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="jenis_kelamin"
                                                value="P" {{ $user->jenis_kelamin == 'P' ? 'checked' : '' }}>Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Agama</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="id_agama" id="exampleSelect1">
                                        @foreach ($daftar_agama as $agama)
                                            <option value="{{ $agama->id }}">{{ $agama->nama_agama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Pendidikan</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="id_pendidikan" id="exampleSelect1">
                                        @foreach ($daftar_pendidikan as $pendidikan)
                                            <option value="{{ $pendidikan->id_pendidikan }}">
                                                {{ $pendidikan->nama_pendidikan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Golongan</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="id_golongan" id="">
                                        @foreach ($daftar_golongan as $golongan)
                                            <option value="{{ $golongan->id }}">{{ $golongan->nama_golongan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Status</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="id_status" id="">
                                        @foreach ($daftar_keluarga as $keluarga)
                                            <option value="{{ $keluarga->id }}">{{ $keluarga->nama_keluarga }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Foto</label>
                                <div class="col-md-8">
                                    <input class="form-control col-md-8" type="file" name="foto"
                                        value="{{ $user->foto }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Nomor HP</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="number" name="no_hp"
                                        value="{{ $user->no_hp }}">
                                </div>
                            </div>


                    </div>

                    <div class="tile-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-3">
                                <button class="btn btn-primary" type="submit"><i
                                        class="fa fa-fw fa-lg fa-check-circle"></i>Edit</button>
                                <a class="btn btn-secondary" href="{{ route('profil') }}"><i
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
