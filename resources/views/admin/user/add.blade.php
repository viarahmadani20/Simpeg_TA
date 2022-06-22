@section('title')
Tambah User
@endsection
@section('master')
active
@endsection
@extends('app')
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Tambah User</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tabel Master</li>
          <li class="breadcrumb-item"><a href="/admin/user">User</a></li>
          <li class="breadcrumb-item"><a href="#">Tambah User</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <form class="form-horizontal" action="{{url('/admin/user')}}" method="post" action="{{ route('admin/simpan_user')}}">
                <div class="form-group row">
                    @csrf
                  <label class="control-label col-md-3">Nama User</label>
                  <div class="col-md-8">
                    <input type="text" name="name" class="form-controller">
                  </div>
                  <label class="control-label col-md-3">Email</label>
                  <div class="col-md-8">
                    <input type="email" name="email" class="form-controller">
                  </div><label class="control-label col-md-3">Password</label>
                  <div class="col-md-8">
                    <input type="password" name="password" class="form-controller">
                  </div><label class="control-label col-md-3">Sebagai</label>
                  <div class="col-md-8">
                    <select class="form-control" name="sebagai" id="exampleSelect1">


                            @foreach ($role as $item)
                            <option value="{{$item->name}}">{{$item->name}}</option>

                            @endforeach


                    </select>
                  </div>

              </div>

            <div class="tile-footer">
              <div class="row">
              <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
                  <a class="btn btn-secondary" href="/admin/user"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>

              </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </main>

@endsection
