@section('title')
    Tambah Gaji
@endsection
@section('master')
    active
@endsection
@extends('app')
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i> Tambah Gaji</h1>
                <!-- <p>Sample forms</p> -->
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Tabel Master</li>
                <li class="breadcrumb-item"><a href="/admin/gaji">Gaji</a></li>
                <li class="breadcrumb-item"><a href="#">Tambah Gaji</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <form class="form-horizontal" action="{{ url('/admin/gaji') }}" method="post"
                            action="{{ route('admin/simpan_gaji') }}">
                            <div class="form-group row">
                                @csrf
                                    <label class="control-label col-md-3">Nama</label>
                                    <div class="col-md-8">
                                        <select class="form-control" name="id_user" id="exampleSelect1">
                                            @foreach ($daftar_user as $user)
                                                <option value="{{ $user->id }}" selected="">{{ $user->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                            </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Bulan</label>
                                    <div class="col-md-8">
                                        <input class="form-control col-md-8" type="date" name="bulan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Gaji Pokok</label>
                                    <div class="col-md-8">
                                        <input type="text" name="gaji_pkk" class="form-controller">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Tunjangan Umum</label>
                                    <div class="col-md-8">
                                        <input type="text" name="tunjangan_umum" class="form-controller">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Tambahan Tunjangan Umum</label>
                                    <div class="col-md-8">
                                        <input type="text" name="tmb_tunjangan_umum" class="form-controller">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Tunjangan Struk</label>
                                    <div class="col-md-8">
                                        <input type="text" name="tunjangan_struk" class="form-controller">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Tunjangan Fungsi</label>
                                    <div class="col-md-8">
                                        <input type="text" name="tunjangan_fungsi" class="form-controller">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Tunjangan Beras</label>
                                    <div class="col-md-8">
                                        <input type="text" name="tunjangan_beras" class="form-controller">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Tunjangan PPH</label>
                                    <div class="col-md-8">
                                        <input type="text" name="tunjangan_pph" class="form-controller">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Potongan BPJS</label>
                                    <div class="col-md-8">
                                        <input type="text" name="potongan_bpjs" class="form-controller">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Potongan Pensiun</label>
                                    <div class="col-md-8">
                                        <input type="text" name="potongan_pensiun" class="form-controller">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Potongan Beras</label>
                                    <div class="col-md-8">
                                        <input type="text" name="potongan_beras" class="form-controller">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Potongan CP</label>
                                    <div class="col-md-8">
                                        <input type="text" name="potongan_cp" class="form-controller">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Potongan PPH</label>
                                    <div class="col-md-8">
                                        <input type="text" name="potongan_pph" class="form-controller">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="control-label col-md-3">Potongan Lain-lain</label>
                                    <div class="col-md-8">
                                        <input type="text" name="potongan_ll" class="form-controller">
                                    </div>
                                </div>


                            <div class="tile-footer">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-3">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="fa fa-fw fa-lg fa-check-circle"></i>Tambah</button>
                                        <a class="btn btn-secondary" href="/admin/gaji"><i
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
