@section('title')
Master Golongan
@endsection
@section('master')
active
@endsection
@extends('app')
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Master Golongan </h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="app-search">
            <form action="{{route('admin/golongan')}}">
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
              <a href="{{route('admin/golongan/add')}}"
              class="btn btn-primary"><span class="fa fa-plus"> Tambah Pangkat/Golongan </span></a>
              </div>
                <table class="table table-hover">
                  <thead>
                    <tr>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="No: activate to sort column ascending" style="width: 91.0625px;" >No</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="nama_golongan: activate to sort column ascending"  >Nama Pangkat/Golongan</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="operasi: activate to sort column ascending" style="width: 91.0625px;" >Operasi</th>
                    </tr>
                  </thead>
                  @foreach ( $daftar_golongan as $no_golongan =>$golongan )

                  <tbody>
                    <tr>
                        <td class="sorting_1" >{{$no_golongan+1}}</td>
                        <td>{{$golongan->nama_golongan}}</td>
                        <td><a href="{{route('admin/editgl', $golongan->id)}}"class="btn btn-info"><span class="fa fa-edit (alias)"> Edit</span></a></td>
                        <td> <button class="btn btn-danger" data-toggle="modal"
                            data-target="#konfirmasiHapus{{$golongan->id}}"><span class="fa fa-trash">
                                Hapus</span></button>
                            {{-- <form action="{{route('admin/golongan/hapus', $golongan->id)}}" >
                          <button class="btn btn-danger" type="submit" ><span class="fa fa-trash"> Hapus</span></button> --}}
                        </td>
                        </form>
                    </tr>

                  </tbody>
                  <div class="modal" tabindex="-1" role="dialog" id="konfirmasiHapus{{$golongan->id}}">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Konfirmasi Hapus</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah Anda yakin ingin menghapus data golongan?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('admin/golongan/hapus', $golongan->id) }}">
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
            {{$daftar_golongan->links()}}
          </div>
        </div>
        <div class="row">

        </div>
      </div>
    </main>
@endsection
