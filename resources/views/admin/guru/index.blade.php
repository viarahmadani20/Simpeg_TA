@extends('app')
@section('title')
Data Guru
@endsection
@section('pegawai')
active
@endsection
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Data Guru</h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
      </div>

      <!-- Buttons-->
      <div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
                <div class="form-group col-md 8">
                    <a href="{{route('admin/guru/add')}}"
                    class="btn btn-primary"><span class="fa fa-plus">Tambah Guru</span></a>
                </div>

                <table class="table table-hover">
                  <thead>
                    <tr>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="No_guru: activate to sort column ascending" style="width: 91.0625px;" >No</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="foto: activate to sort column ascending" style="width: 91.0625px;" >Foto</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="nip: activate to sort column ascending" style="width: 91.0625px;" >NIP</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="namap: activate to sort column ascending" style="width: 91.0625px;" >Nama</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="tempat_lahir: activate to sort column ascending" style="width: 91.0625px;" >TTL</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="jenis_kelamin: activate to sort column ascending" style="width: 91.0625px;" >Jenis Kelamin</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="no_hp: activate to sort column ascending" style="width: 91.0625px;" >No HP</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="operasi: activate to sort column ascending" style="width: 91.0625px;" >Operasi</th>

                    </tr>
                  </thead>

                  @foreach( $daftar_guru as $no_guru =>$guru)

                  <tbody>
                    <tr>
                      <td class="sorting_1">{{$no_guru+1}}</td>
                      <td><img src="{{asset('upload/'.$guru->foto)}}" alt="" width="50px" height="50px"></td>
                      <td>{{$guru->nip}}</td>
                      <td><a href="{{route('admin/guru/show', $guru->id)}}">{{$guru->name}}</a></td>
                      <td>{{$guru->tempat_lahir}}, {{$guru->tanggal_lahir}}</td>
                      <td>{{$guru->jenis_kelamin}}</td>
                      <td>{{$guru->no_hp}}</td>
                      <td>
                        <a href="{{route('admin/edita', $guru->id)}}"
                        class="btn btn-info"><span class="fa fa-edit (alias)">Edit</span></a>
                      </td>
                      <td> <button class="btn btn-danger" data-toggle="modal"
                        data-target="#konfirmasiHapus{{$guru->id}}"><span class="fa fa-trash">
                            Hapus</span></button>
                        {{-- <form action="{{route('admin/guru/hapus', $guru->id)}}"><button class="btn btn-danger" type="submit" ><span class="fa fa-trash">Hapus</span></button></form> --}}
                      </td>
                    </tr>
                  </tbody>
                  <div class="modal" tabindex="-1" role="dialog" id="konfirmasiHapus{{$guru->id}}">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Konfirmasi Hapus</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah Anda yakin ingin menghapus data guru?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('admin/guru/hapus', $guru->id) }}">
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
