@extends('appguru')
@section('title')
    Detail Profil
@endsection
@section('pegawai')
    active
@endsection
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div class="div">
                <h1><i class="fa fa-laptop"></i> Detail Profil</h1>
                <!-- <p>Bootstrap Components</p> -->
            </div>
        </div>
        <!-- Buttons-->
        <div class="tile">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12">
                        <img src="{{ asset ('upload/'.Auth::user()->foto) }}" width="180px" height="120px" alt="">
                        <table class="table-condensed">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ Auth::user()->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ Auth::user()->email }}</td>
                            </tr>
                           <tr>
                                <td>NIP</td>
                                <td>:</td>
                                <td>{{ Auth::user()->nip }}</td>
                            </tr>
                            <tr>
                                <td> Tempat, Tanggal Lahir</td>
                                <td>:</td>
                                <td>{{ Auth::user()->tempat_lahir }}, {{ Auth::user()->tanggal_lahir }}</td>
                            </tr>
                            <tr>
                                <td> Jenis Kelamin</td>
                                <td>:</td>
                                <td>{{ Auth::user()->jenis_kelamin }}</td>
                            </tr>
                            <tr>
                                <td> Alamat</td>
                                <td>:</td>
                                <td>{{ Auth::user()->alamat }}</td>
                            </tr>
                            <tr>
                                <td> Agama</td>
                                <td>:</td>
                                <td>{{ Auth::user()->agama->nama_agama }}</td>
                            </tr>
                            <tr>
                                <td> Pendidikan</td>
                                <td>:</td>
                                <td>{{ Auth::user()->pendidikan->nama_pendidikan }}</td>
                            </tr>
                            <tr>
                                <td> Golongan</td>
                                <td>:</td>
                                <td>{{ Auth::user()->golongan->nama_golongan }}</td>
                            </tr>
                            <tr>
                                <td> Status</td>
                                <td>:</td>
                                <td>{{ Auth::user()->status->nama_keluarga }}</td>
                            </tr>
                            <tr>
                                <td> Nomor HP</td>
                                <td>:</td>
                                <td>{{ Auth::user()->no_hp }}</td>
                            </tr>
                        </table>
                        <div>
                            <a class="btn btn-primary" type="submit" href="{{ route('profil/edit', Auth::user()->id) }}">Edit</a>
                            {{-- <a class="btn btn-secondary" href="{{ route('profil') }}"><i
                                    class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a> --}}
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </main>
@endsection
