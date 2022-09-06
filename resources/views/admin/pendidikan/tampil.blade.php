@extends('app')
@section('title')
    Pendidikan
@endsection
@section('pegawai')
    active
@endsection
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> Pendidikan</h1>
                <!-- <p>Sample forms</p> -->
            </div>
            <ul class="app-breadcrumb breadcrumb">
                {{-- <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#">User</a></li> --}}
                <li class="app-search">
                    <form action="{{route('admin/pendidikan')}}">
                        @csrf
                <input class="app-search__input" name="cari" type="search" placeholder="Search">
                <button class="app-search__button"><i class="fa fa-search">Cari</i></button>
            </form>
            </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="form-group col-md 8">
                        <a href="{{ route('admin/pendidikan/add') }}" class="btn btn-primary"><span class="fa fa-plus">
                                Tambah Pendidikan</span></a>
                    </div>

                    <table class="table table-hover">
                        <thead>
                            <tr role="row">
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                    aria-label="no_pendidikan: activate to sort column ascending" style="width: 91.0625px;">
                                    No</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                    aria-label="tahun_pendidikan: activate to sort column ascending"
                                    style="width: 91.0625px;">Tahun Lulus</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                    aria-label="nama_pendidikan: activate to sort column ascending"
                                    style="width: 91.0625px;"> Pendidikan Terakhir</th>
                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                    aria-label="operasi: activate to sort column ascending" style="width: 91.0625px;">
                                    Operasi</th>
                            </tr>
                        </thead>
                        @foreach ($daftar_pendidikan as $no_pendidikan => $pendidikan)
                            <tbody>
                                <tr>
                                    <td class="sorting_1">{{ $no_pendidikan + 1 }}</td>
                                    <td>{{ $pendidikan->tahun_pendidikan }}</td>
                                    <td>{{ $pendidikan->nama_pendidikan }}</td>
                                    <td><a
                                            href="{{ route('admin/editp', $pendidikan->id_pendidikan) }}"class="btn btn-info"><span
                                                class="fa fa-edit (alias)"> Edit</span></a></td>
                                    <td> <button class="btn btn-danger" data-toggle="modal"
                                        data-target="#konfirmasiHapus{{$pendidikan->id}}"><span class="fa fa-trash">
                                            Hapus</span></button>
                                        {{-- <form action="{{ route('admin/pendidikan/hapus', $pendidikan->id_pendidikan) }}">
                                            <button class="btn btn-danger" type="submit"><span class="fa fa-trash">
                                                    Hapus</span></button> --}}
                                    </td>
                                    </form>
                                </tr>

                            </tbody>

                            <div class="modal" tabindex="-1" role="dialog" id="konfirmasiHapus{{$pendidikan->id}}">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Konfirmasi Hapus</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Apakah Anda yakin ingin menghapus data pendidikan?</p>
                                        </div>
                                        <div class="modal-footer">
                                            <form action="{{ route('admin/pendidikan/hapus', $pendidikan->id_pendidikan) }}">
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
                {{$daftar_pendidikan->links()}}
            </div>
        </div>
    </main>
@endsection
