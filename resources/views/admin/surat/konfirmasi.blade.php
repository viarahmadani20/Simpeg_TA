@section('title')
    Konfirmasi Surat
@endsection
@section('master')
    active
@endsection
@extends('app')
@section('content')
    <main class="app-content">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <!-- <h3 class="tile-title">Register</h3> -->
                    <div class="tile-body">
                        <!-- <form class="form-horizontal" action="#" method="post"> -->
                        <form class="form-horizontal" method="post"
                            action="{{ route('admin/surat/konfirmasi', $surat->id_surat) }}"
                            enctype="multipart/form-data">
                            <div class="form-group row">
                                @csrf
                                <label class="control-label col-md-3">Nama Surat :</label>
                                <div class="col-md-8">
                                    <input type="text" readonly value="{{ $surat->nama_surat }}" />
                                </div>
                                <label class="control-label col-md-3">Keterangan Surat :</label>
                                <div class="col-md-8">
                                    <input type="text" readonly value="{{ $surat->keterangan }} " />
                                </div>
                                <label class="control-label col-md-3">Upload File Surat :</label>
                                <div class="col-md-8">
                                    <input type="file" name="file_surat" />
                                </div>

                                <button type="submit">Konfirmasi</button> <br>
                            </div>

                            <div class="tile-footer">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="fa fa-fw fa-lg fa-check-circle"></i>Konfirmasi</button>
                                        <a class="btn btn-secondary" href="{{route('admin/surat')}}"><i
                                                class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                                    </div>

                                </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </main>
@endsection
