@section('title')
    Edit User
@endsection
@section('master')
    active
@endsection
@extends('app')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> Edit User</h1>
                <!-- <p>Sample forms</p> -->
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Tabel Master</li>
                <li class="breadcrumb-item"><a href="/admin/user">User</a></li>
                <li class="breadcrumb-item"><a href="#">Tambah User</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <form class="form-horizontal" method="post" action="{{ route('admin/simpan_upuser', $user->id) }}"
                            enctype="multipart/form-data">
                            <div class="form-group row">
                                @csrf
                                <label class="control-label col-md-3">Nama User</label>
                                <div class="col-md-8">
                                    <input type="text" name="name" class="form-controller" value="{{ $user->name }}"
                                        name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Email</label>
                                <div class="col-md-8">
                                    <input type="text" name="email" class="form-controller" value="{{ $user->email }}"
                                        name="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Password</label>
                                <div class="col-md-8">
                                    <input type="text" name="password" class="form-controller"
                                        value="{{ $user->password }}" name="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">Sebagai</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="sebagai" id="exampleSelect1">

                                        {{-- <option value="{{$user->roles()->first()->id}}">{{$user->roles()->first()->name}}</option> --}}
                                        @foreach ($role as $item)
                                            <option value="{{ $item->id }}"
                                                {{ $item->id == $user->sebagai ? 'selected' : '' }}>{{ $item->name }}
                                            </option>
                                        @endforeach


                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-md-3">NIP/NUPTK</label>
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
                                    <textarea class="form-control" name="alamat" value="{{ $user->alamat }}">{{ $user->alamat }}</textarea>
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
                                            <option value="{{ $agama->id }}"
                                                {{ $agama->id == $user->id_agama ? 'selected' : '' }}>
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
                                                {{ $pendidikan->id_pendidikan == $user->id_pendidikan ? 'selected' : '' }}>
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
                                                {{ $golongan->id == $user->id_golongan ? 'selected' : '' }}>
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
                                                {{ $keluarga->id == $user->id_status ? 'selected' : '' }}>
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
                            <div class="tile-footer">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="fa fa-fw fa-lg fa-check-circle"></i>edit</button>
                                        <a class="btn btn-secondary" href="/admin/user"><i
                                                class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
