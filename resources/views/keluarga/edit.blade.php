@section('title')
Edit Keluarga
@endsection
@section('master')
active
@endsection
@extends('app')
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Edit Keluarga</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tabel Master</li>
          <li class="breadcrumb-item"><a href="/keluarga">Keluarga</a></li>
          <li class="breadcrumb-item"><a href="#">Edit Keluarga</a></li>
        </ul>
      </div>


      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <form class="form-horizontal" method="post" action="{{route('save_edit', $keluarga->id)}}" >
                <div class="form-group row">
                    @csrf
                  <label class="control-label col-md-3">Status</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control-md-8" value="{{$keluarga->nama_keluarga}}" name="nama_keluarga">
                  </div>

              </div>

            <div class="tile-footer">
              <div class="row">
              <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Edit</button>
                  <a class="btn btn-secondary" href="/keluarga"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>

              </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </main>

@endsection
