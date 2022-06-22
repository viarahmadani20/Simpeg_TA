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
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Pegawai</li>
          <li class="breadcrumb-item"><a href="3">Data Pegawai</a></li>
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
                      <td><img src="#" alt="" width="50px" height="50px"></td>
                      <td>{{$pegawai->nip}}</td>
                      <td><a href="{{route('admin/pegawai/show', $pegawai->id)}}">{{$pegawai->namap}}</a></td>
                      <td>{{$pegawai->tempat_lahir}}, {{$pegawai->tanggal_lahir}}</td>
                      <td>{{$pegawai->jenis_kelamin}}</td>
                      <td>{{$pegawai->no_hp}}</td>
                      <td>
                        <a href="{{route('admin/editpg', $pegawai->id)}}"
                        class="btn btn-info"><span class="fa fa-edit (alias)">Edit</span></a>
                      </td>
                      <td>
                        <form action="{{route('admin/pegawai/hapus', $pegawai->id)}}"><button class="btn btn-danger" type="submit" ><span class="fa fa-trash">Hapus</span></button></form>
                      </td>
                    </tr>
                  </tbody>
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
