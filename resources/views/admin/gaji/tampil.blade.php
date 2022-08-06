@section('title')
 Gaji
@endsection
@section('master')
active
@endsection
@extends('app')
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Gaji</h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Gaji</a></li>
        </ul>
      </div>
      <!-- Buttons-->
      <div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
              <!-- <h2 class="mb-3 line-head" id="buttons">Data Pegawai</h2> -->
              <div class="form-group col-md 8">
              <a href="{{route('admin/gaji/add')}}"
              class="btn btn-primary"><span class="fa fa-view"> Tambah Gaji</span></a>
                <a href="{{route('admin/gaji/cetak')}}"
                class="btn btn-primary" target="_blank"><span class="fa fa-view"> Cetak Gaji</span></a>
                </div>
                <table class="table table-hover">
                  <thead>
                    <tr>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="No: activate to sort column ascending" style="width: 91.0625px;" >No</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="id_user: activate to sort column ascending" style="width: 91.0625px;" >Nama</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="bulan: activate to sort column ascending" style="width: 91.0625px;" >Bulan</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="gaji_pkk: activate to sort column ascending" style="width: 91.0625px;" >Gaji</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="operasi: activate to sort column ascending" style="width: 91.0625px;" >Operasi </th>
                    </tr>
                  </thead>
                  @foreach ( $daftar_gaji as $no_gaji =>$gaji )
                  <tbody>
                    <tr>
                        <td class="sorting_1">{{$no_gaji+1}}</td>
                        <td>{{$gaji->pengguna->name}} <br>
                            {{$gaji->pengguna->email}}
                        </td>
                        <td>{{$gaji->bulan}}</td>
                        <td><a href="{{route('admin/gaji/show', $gaji->id_gaji)}}">{{$gaji->gaji_diterima}}</a></td>
                        <td><a href="{{route('admin/editg', $gaji->id_gaji)}}" class="btn btn-info"><span class="fa fa-edit (alias)">Edit</span></a></td>
                        <td> <button class="btn btn-danger" data-toggle="modal"
                            data-target="#konfirmasiHapus{{$gaji->id_gaji}}"><span class="fa fa-trash">
                                Hapus</span></button>
                            {{-- <form action="{{ route("admin/gaji/hapus", $gaji->id_gaji)}}" class="d-inline-block">
                            <button class="btn btn-danger" type="submit" ><span class="fa fa-trash"> Hapus</span></button> --}}
                        </td>
                    </tr>
                  </tbody>
                  <div class="modal" tabindex="-1" role="dialog" id="konfirmasiHapus{{$gaji->id_gaji}}">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Konfirmasi Hapus</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah Anda yakin ingin menghapus data Gaji?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('admin/gaji/hapus', $gaji->id_gaji) }}">
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
          </div>
        </div>
        <div class="row">
        </div>
      </div>
    </main>
@endsection
