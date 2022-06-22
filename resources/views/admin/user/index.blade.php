@section('title')
User
@endsection
@section('master')
active
@endsection
@extends('app')
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Data User</h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">User</a></li>
        </ul>
      </div>
      <!-- Buttons-->
      <div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
              <!-- <h2 class="mb-3 line-head" id="buttons">Data Pegawai</h2> -->
              <div class="form-group col-md 8">
              <a href="{{route('admin/user/add')}}"
              class="btn btn-primary"><span class="fa fa-plus">Tambah User</span></a>
              </div>
                <table class="table table-hover">
                  <thead>
                    <tr role="row">
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="No: activate to sort column ascending" style="width: 91.0625px;" >No</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="name: activate to sort column ascending" style="width: 91.0625px;" >Nama</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="email: activate to sort column ascending" style="width: 91.0625px;" >Email</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="password: activate to sort column ascending" style="width: 91.0625px;" >Password</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="sebagai: activate to sort column ascending" style="width: 91.0625px;" >Sebagai</th>
                      <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="operasi: activate to sort column ascending" style="width: 91.0625px;" >Operasi</th>
                    </tr>
                  </thead>
                  @foreach ( $daftar_user as $no_user =>$user )
                  <tbody>
                      <tr>
                      <td class="sorting_1" >{{$no_user+1}}</td>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>Disembunyikan</td>
                      <td>{{$user->sebagai  }}</td>
                      <td><a href="{{route('admin/editu', $user->id)}}"class="btn btn-info"><span class="fa fa-edit (alias)"> Edit</span></a></td>
                      <td>
                    <form action="{{route("admin/user/hapus", $user->id)}}" >
                        <button class="btn btn-danger" type="submit" ><span class="fa fa-trash"> Hapus</span></button>
                      </td>
                      </form>
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
