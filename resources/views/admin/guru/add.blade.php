@section('title')
Tambah Admin
@endsection
@section('master')
active
@endsection
@extends('app')
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Tambah Admin</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="/agama">Admin</a></li>
          <li class="breadcrumb-item"><a href="#">Tambah Admin</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <form class="form-horizontal" action="{{url('/admin')}}" method="post">
                {{ csrf_field()}}
                <div class="form-group row">
                  <label class="control-label col-md-3">Nama User</label>
                  <div class="col-md-8">
                    <input class="form-control col-md-8" type="text" name="nmadmin">
                  </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Email</label>
                    <div class="col-md-8">
                      <input class="form-control col-md-8" id="email" name="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Password</label>
                    <div class="col-md-8">
                      <input class="form-control col-md-8" id="password" type="password" placeholder="Password" name="password" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3">Confirm Password</label>
                    <div class="col-md-8">
                        <input class="form-control col-md-8" id="password" type="password" placeholder="Confirm Password" name="password" required>
                    </div>
                </div>

            <div class="tile-footer">
              <div class="row">
              <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
                  <a class="btn btn-secondary" href="/agama"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>

              </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </main>

@endsection
