@extends('app')
@section('title')
Data Pegawai
@endsection
@section('pegawai')
active
@endsection
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Data Pegawai</h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
            {{-- <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">User</a></li> --}}
            <li class="app-search">
                <form action="{{route('admin/pegawai/index')}}">
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
                <div class="form-group col-md 8">
                    <a href="{{route('admin/pegawai/add')}}"
                    class="btn btn-primary"><span class="fa fa-plus">Tambah Pegawai</span></a>
                </div>

                <table class="table table-hover">
                  <thead>
                    <tr>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="No_pegawai: activate to sort column ascending" style="width: 91.0625px;" >No</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="foto: activate to sort column ascending" style="width: 91.0625px;" >Foto</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="nip: activate to sort column ascending" style="width: 91.0625px;" >NIP</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="namap: activate to sort column ascending" style="width: 91.0625px;" >Nama</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="tempat_lahir: activate to sort column ascending" style="width: 91.0625px;" >TTL</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="jenis_kelamin: activate to sort column ascending" style="width: 91.0625px;" >Jenis Kelamin</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="no_hp: activate to sort column ascending" style="width: 91.0625px;" >No HP</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="operasi: activate to sort column ascending" style="width: 91.0625px;" >Operasi</th>

                    </tr>
                  </thead>

                  @foreach( $daftar_pegawai as $no_pegawai =>$pegawai)

                  <tbody>
                    <tr>
                      <td class="sorting_1">{{$no_pegawai+1}}</td>
                      <td><img src="{{asset('upload/'.$pegawai->foto)}}" alt="" width="50px" height="50px"></td>
                      <td>{{$pegawai->nip}}</td>
                      <td><a href="{{route('admin/pegawai/show', $pegawai->id)}}">{{$pegawai->name}}</a></td>
                      <td>{{$pegawai->tempat_lahir}}, {{$pegawai->tanggal_lahir}}</td>
                      <td>{{$pegawai->jenis_kelamin}}</td>
                      <td>{{$pegawai->no_hp}}</td>
                      <td>
                        <a href="{{route('admin/editpg', $pegawai->id)}}"
                        class="btn btn-info"><span class="fa fa-edit (alias)">Edit</span></a>
                      </td>
                      <td> <button class="btn btn-danger" data-toggle="modal"
                        data-target="#konfirmasiHapus{{$pegawai->id}}"><span class="fa fa-trash">
                            Hapus</span></button>
                        {{-- <form action="{{route('admin/pegawai/hapus', $pegawai->id)}}"><button class="btn btn-danger" type="submit" ><span class="fa fa-trash">Hapus</span></button></form> --}}
                      </td>
                    </tr>
                  </tbody>

                  <div class="modal" tabindex="-1" role="dialog" id="konfirmasiHapus{{$pegawai->id}}">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Konfirmasi Hapus</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah Anda yakin ingin menghapus data Pegawai?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('admin/pegawai/hapus', $pegawai->id) }}">
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
            {{$daftar_pegawai->links()}}
          </div>
        </div>
        <div class="row">
        </div>
        </div>
      </div>
    </main>
@endsection
