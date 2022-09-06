@section('title')
    User
@endsection
@section('master')
    active
@endsection
@extends('app')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div class="div">
                <h1><i class="fa fa-laptop"></i> Data User</h1>
                <!-- <p>Bootstrap Components</p> -->
            </div>

            <ul class="app-breadcrumb breadcrumb">
                {{-- <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">User</a></li> --}}
                <li class="app-search">
                    <form action="{{route('admin/user')}}">
                        @csrf
                <input class="app-search__input" name="cari" type="search" placeholder="Search">
                <button class="app-search__button"><i class="fa fa-search">Cari</i></button>
            </form>
            </li>
            </ul>
        </div>
        <!-- Buttons-->
        <div class="tile mb-4">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- <h2 class="mb-3 line-head" id="buttons">Data Pegawai</h2> -->
                        <div class="form-group col-md 8">
                            <a href="{{ route('admin/user/add') }}" class="btn btn-primary"><span class="fa fa-plus">Tambah
                                    User</span></a>
                        </div>
                        <table class="table table-hover">
                            <thead>
                                <tr role="row">
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Sebagai</th>
                                    <th>Operasi</th>
                                </tr>
                            </thead>
                            @foreach ($daftar_user as $no_user => $user)
                                <tbody>
                                    <tr>
                                        <td class="sorting_1">{{ $no_user + 1 }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>Disembunyikan</td>
                                        <td>
                                            {{ $user->roles()->first()->name }}
                                        </td>
                                        <td><a href="{{ route('admin/editu', $user->id) }}"class="btn btn-info"><span
                                                    class="fa fa-edit (alias)"> Edit</span></a></td>
                                        <td> <button class="btn btn-danger" data-toggle="modal"
                                                data-target="#konfirmasiHapus{{$user->id}}"><span class="fa fa-trash">
                                                    Hapus</span></button>

                                        </td>

                                    </tr>

                                </tbody>
                                <div class="modal" tabindex="-1" role="dialog" id="konfirmasiHapus{{$user->id}}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Konfirmasi Hapus</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Apakah Anda yakin ingin menghapus data user?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('admin/user/hapus', $user->id) }}">
                                                    <button class="btn btn-danger" type="submit"><span class="fa fa-trash"> Hapus</span></button>
                                                </form>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </table>
                    </div>
                    {{ $daftar_user->links() }}
                </div>
            </div>
            <div class="row">
            </div>
        </div>

    </main>
@endsection
