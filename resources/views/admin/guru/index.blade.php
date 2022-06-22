@extends('app')
@section('title')
Data User
@endsection
@section('pegawai')
active
@endsection
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Data User</h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Pegawai</li>
          <li class="breadcrumb-item"><a href="3">Data User</a></li>
        </ul>
      </div>
      <!-- Buttons-->
      <div class="tile mb-4">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
                <div class="form-group col-md 8">
                    <a href="{{route('admin_add')}}"
                    class="btn btn-primary"><span class="fa fa-plus">Tambah User</span></a>
                </div>
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Confirm Password</th>
                      <th>More</th>
                    </tr>
                  </thead>
                  <tbody>
                    {{-- @foreach() --}}
                    <tr>
                      <td>Via</td>
                      <td>via1@gmail.com</td>
                      <td>via11</td>
                      <td>via11</td>
                      <td>
                        <a href="3"
                        class="btn btn-info"><span class="fa fa-edit (alias)"></span></a>

                      </td>
                      <td>
                        <form action="#" method="post">
                        <button class="btn btn-danger" type="submit" ><span class="fa fa-trash"></span></button>
                        </form>
                      </td>

                    </tr>
                    {{-- @endforeach --}}

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
