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
            <div class="col-lg-12">
              <!-- <h2 class="mb-3 line-head" id="buttons">Data Pegawai</h2> -->
              <div class="form-group col-md 8">
              <a href="{{route('agama/add')}}"
              class="btn btn-primary"><span class="fa fa-plus"> Tambah Agama</span></a>
              </div>
                <table class="table table-hover">
                  <thead>
                    <tr role="row">
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="No: activate to sort column ascending" style="width: 91.0625px;" >No</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="nama_agama: activate to sort column ascending" style="width: 91.0625px;" >Agama</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="operasi: activate to sort column ascending" style="width: 91.0625px;" >Operasi</th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($daftar_agama as $no_agama)


                      @endforeach
                      <tr>
                      <td>1</td>
                      <td>Islam</td>
                      <td>
                        <a href="#"
                        class="btn btn-info"><span class="fa fa-edit (alias)"> Edit</span></a>
                      </td>
                      <td>
                        <form action="#" method="post">

                        {{method_field('DELETE')}}
                        <button class="btn btn-danger" type="submit" ><span class="fa fa-trash"> Hapus</span></button>
                      </td>
                      </form>
                    </tr>

                  </tbody>
                </table>
            </div>
          </div>
        </div>
        <div class="row">

        </div>
      </div>
    </main>
@endsection
