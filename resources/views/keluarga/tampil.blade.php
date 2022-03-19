@section('title')
Master Status Keluarga
@endsection
@section('master')
active
@endsection
@extends('app')
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Master Status Keluarga</h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tabel Master</li>
          <li class="breadcrumb-item"><a href="#">Status Keluarga</a></li>
        </ul>
      </div>
      <!-- Buttons-->
      <div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
              <!-- <h2 class="mb-3 line-head" id="buttons">Data Pegawai</h2> -->
              <div class="form-group col-md 8">
              <a href="{{route('keluarga/add')}}"
              class="btn btn-primary"><span class="fa fa-plus"> Tambah Status</span></a>
              </div>
                <table class="table table-hover">
                  <thead>
                    <tr role="row">
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="No: activate to sort column ascending" style="width: 91.0625px;" >No</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="nama_keluarga: activate to sort column ascending" style="width: 91.0625px;" >Keluarga</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="operasi: activate to sort column ascending" style="width: 91.0625px;" >Operasi</th>
                      </tr>
                  </thead>
                  @foreach ( $daftar_keluarga as $no_keluarga=>$keluarga )
                  <tbody>
                    <tr>
                      <td class = "sorting_1">{{$no_keluarga+1}}</td>
                      <td>{{$keluarga->nama_keluarga}}</td>
                      <td><a href="{{route('editt', $keluarga->id)}}"class="btn btn-info"><span class="fa fa-edit (alias)"> Edit</span></a></td>
                      <td><form action="keluarga/hapus/{{$keluarga->id}}"><button class="btn btn-danger" type="submit" ><span class="fa fa-trash"> Hapus</span></button>
                        </form>
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
