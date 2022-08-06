@section('title')
Edit Gaji
@endsection
@section('master')
active
@endsection
@extends('app')
@section('content')

<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Edit Gaji</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Tabel Master</li>
          <li class="breadcrumb-item"><a href="/admin/gaji">Gaji</a></li>
          <li class="breadcrumb-item"><a href="#">Edit Gaji</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">
              <form class="form-horizontal" method="post" action="{{ route('admin/simpan_editg', $gaji->id_gaji)}}" >
                <div class="form-group row">
                    @csrf

                  <label class="control-label col-md-3">Bulan</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control-md-8" value="{{$gaji->bulan}}" name="bulan">
                  </div>
                  <label class="control-label col-md-3">Gaji Pokok</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control-md-8" value="{{$gaji->gaji_pkk}}" name="gaji_pkk">
                  </div>
                  <label class="control-label col-md-3">Tunjangan Umum</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control-md-8" value="{{$gaji->tunjangan_umum}}" name="tunjangan_umum">
                  </div>
                  <label class="control-label col-md-3">Tambahan Tunjangan Umum</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control-md-8" value="{{$gaji->tmb_tunjangan_umum}}" name="tmb_tunjangan_umum">
                  </div>
                  <label class="control-label col-md-3">Tunjangan Struk</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control-md-8" value="{{$gaji->tunjangan_struk}}" name="tunjangan_struk">
                  </div>
                  <label class="control-label col-md-3">Tunjangan Fungsi</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control-md-8" value="{{$gaji->tunjangan_fungsi}}" name="tunjangan_fungsi">
                  </div>
                  <label class="control-label col-md-3">Tunjangan Beras</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control-md-8" value="{{$gaji->tunjangan_beras}}" name="tunjangan_beras">
                  </div>
                  <label class="control-label col-md-3">Tunjangan PPH</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control-md-8" value="{{$gaji->tunjangan_pph}}" name="tunjangan_pph">
                  </div>
                  <label class="control-label col-md-3">Potongan BPJS</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control-md-8" value="{{$gaji->potongan_bpjs}}" name="potongan_bpjs">
                  </div>
                  <label class="control-label col-md-3">Potongan Pensiun</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control-md-8" value="{{$gaji->potongan_pensiun}}" name="potongan_pensiun">
                  </div>
                  <label class="control-label col-md-3">Potongan Beras</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control-md-8" value="{{$gaji->potongan_beras}}" name="potongan_beras">
                  </div>
                  <label class="control-label col-md-3">Potongan CP</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control-md-8" value="{{$gaji->potongan_cp}}" name="potongan_cp">
                  </div>
                  <label class="control-label col-md-3">Potongan PPH</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control-md-8" value="{{$gaji->potongan_pph}}" name="potongan_pph">
                  </div>
                  <label class="control-label col-md-3">Potongan Lain-lain</label>
                  <div class="col-md-8">
                    <input type="text" class="form-control-md-8" value="{{$gaji->potongan_ll}}" name="potongan_ll">
                  </div>

              </div>

            <div class="tile-footer">
              <div class="row">
              <div class="col-md-8 col-md-offset-3">
                  <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Edit</button>
                  <a class="btn btn-secondary" href="/admin/gaji"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                </div>

              </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </main>

@endsection
