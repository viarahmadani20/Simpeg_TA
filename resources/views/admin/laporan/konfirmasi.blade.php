@section('title')
    Konfirmasi Laporan
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
                            action="{{ route('admin/laporan/konfirmasi', $laporan->id_lap) }}"
                            enctype="multipart/form-data">
                            <div class="form-group row">
                                @csrf
                                <label class="control-label col-md-3">Nama Laporan :</label>
                                <div class="col-md-8">
                                    <input type="text" readonly value="{{ $laporan->nama_laporan }}" />
                                </div>
                                <label class="control-label col-md-3">Status :</label>
                                <div class="col-md-8">
                                    <input type="text" readonly value="{{ $laporan->status }} " />
                                </div>
                                <button type="submit">Konfirmasi</button> <br>
                            </div>

                            <div class="tile-footer">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="fa fa-fw fa-lg fa-check-circle"></i>Konfirmasi</button>
                                        <a class="btn btn-secondary" href="/admin/laporan"><i
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
