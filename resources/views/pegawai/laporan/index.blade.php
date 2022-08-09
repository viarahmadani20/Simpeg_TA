@section('title')
Laporan
@endsection
@section('master')
active
@endsection
@extends('apppegawai')
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Laporan</h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Laporan</a></li>
        </ul>
      </div>
      <!-- Buttons-->
      <div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
              <!-- <h2 class="mb-3 line-head" id="buttons">Data Pegawai</h2> -->
              <div class="form-group col-md 8">
              <a href="{{route('pegawai/laporan/add')}}"
              class="btn btn-primary"><span class="fa fa-plus"> Tambah Laporan</span></a>
              </div>
                <table class="table table-hover">
                  <thead>
                    <tr>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="No: activate to sort column ascending" style="width: 91.0625px;" >No</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="nama_laporan: activate to sort column ascending" style="width: 91.0625px;" > Tema Laporan</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="file: activate to sort column ascending" style="width: 91.0625px;" > Dokumen</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="file: activate to sort column ascending" style="width: 91.0625px;" > Status</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="operasi: activate to sort column ascending" style="width: 91.0625px;" ></th>
                    </tr>
                  </thead>


                  @foreach ( $daftar_laporan as $no_laporan=>$laporan)
                  <tbody>
                    <tr>
                      <td class="sorting_1" >{{$no_laporan+1}}</td>
                      <td>{{$laporan->nama_laporan}}</td>
                      <td>
                        @if (isset($laporan->file))
                            <a href="{{asset('upload/'.$laporan->file)}}" target="_blank">Download file</a>
                        @else
                            (Belum Diterima)
                        @endif
                      </td>
                      <td>{{$laporan->status}}</td>
                      {{-- <td><a href=""class="btn btn-info d-inline-block"><span class="fa fa-edit (alias)"> Edit</span></a>
                          {{-- {{-- <form action="{{route('pegawai/hapus', $laporan->id)}}" class="d-inline-block" ><button class="btn btn-danger" type="submit" ><span class="fa fa-trash"> Hapus</span></button>
                        </form> --}}
                      {{-- </td> --}}
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
