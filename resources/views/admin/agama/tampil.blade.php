@section('title')
Master Agama
@endsection
@section('master')
active
@endsection
@extends('app')
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Master Agama</h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tabel Master</li>
          <li class="breadcrumb-item"><a href="#">Agama</a></li>
        </ul>
      </div>
      <!-- Buttons-->
      <div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            {{-- @include('messages.alert') --}}
            <div class="col-lg-12">
              <!-- <h2 class="mb-3 line-head" id="buttons">Data Pegawai</h2> -->
              <div class="form-group col-md 8">
              <a href="{{route('admin/agama/add')}}"
              class="btn btn-primary"><span class="fa fa-plus">Tambah Agama</span></a>
              </div>
              {{-- data tabel --}}
                <table class="table  table-hover">
                  <thead>
                    <tr role="row">
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="No: activate to sort column ascending" style="width: 91.0625px;" >No</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="nama_agama: activate to sort column ascending"  style="width: 91.0625px;" >Agama</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="operasi: activate to sort column ascending" style="width: 130px;" >Operasi</th>
                    </tr>
                  </thead>
                  @foreach ( $daftar_agama as $no_agama =>$agama )
                  <tbody>
                      <tr>
                      <td class="sorting_1" >{{$no_agama+1}}</td>
                      <td>{{$agama->nama_agama}}</td>
                      <td><a href="{{route('admin/ediit', $agama->id)}}"class="btn btn-info"><span class="fa fa-edit (alias)"> Edit</span></a></td>
                        <td> <button class="btn btn-danger" data-toggle="modal"
                            data-target="#konfirmasiHapus{{$agama->id}}" ><span class="fa fa-trash"> Hapus</span></button>
                    {{-- <form action="{{route("admin/agama/hapus", $agama->id)}}" >
                        <button class="btn btn-danger" type="submit" ><span class="fa fa-trash"> Hapus</span></button>
                    </form> --}}
                </tr>
                    </td>


                  </tbody>
                  <div class="modal" tabindex="-1" role="dialog" id="konfirmasiHapus{{$agama->id}}">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Konfirmasi Hapus</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah Anda yakin ingin menghapus data Agama?</p>
                            </div>
                            <div class="modal-footer">
                                <form action="{{ route('admin/agama/hapus', $agama->id) }}">
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

{{-- data tabel --}}
{{-- @push('script-addon')
<script>
$(document), ready(function(){
    $('.data').DataTable();
});
</script>

@endpush --}}
