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

                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Foto</th>
                      <th>NIP</th>
                      <th>Nama</th>
                      <th>TTL</th>
                      <th>JK</th>
                      <th>No. Telp</th>
                      <th>More</th>
                    </tr>
                  </thead>
                  <tbody>
                    {{-- @foreach() --}}
                    <tr>
                      <td><img src=""></td>
                      <td>1903061</td>
                      <td><a href="#">Via</a></td>
                      <td>Tegal, 20</td>
                      <td>Perempuan</td>
                      <td>085811253413</td>
                      <td>
                        <a href="{{route('pegawai/index')}}"
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
