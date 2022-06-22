@section('title')
Edit User
@endsection
@section('master')
active
@endsection
@extends('app')
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Edit User</h1>
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
              <form class="form-horizontal"  method="post" action="{{ route('admin/simpan_upuser', $user->id)}}">
                <div class="form-group row">
                    @csrf
                  <label class="control-label col-md-3">Nama User</label>
                  <div class="col-md-8">
                    <input type="text" name="name" class="form-controller"  value="{{$user->name}}" name="name">
                  </div>
                  <label class="control-label col-md-3">Email</label>
                  <div class="col-md-8">
                    <input type="text" name="email" class="form-controller" value="{{$user->email}}" name="email">
                  </div><label class="control-label col-md-3">Password</label>
                  <div class="col-md-8">
                    <input type="text" name="password" class="form-controller" value="{{$user->password}}" name="password">
                  </div><label class="control-label col-md-3">Sebagai</label>
                  <div class="col-md-8">
                    <select class="form-control" name="sebagai" id="exampleSelect1">

                        <option value="{{$user->sebagai}}">{{$user->sebagai}}</option>
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
