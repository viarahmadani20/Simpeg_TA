@extends('app')
@section('title')
    Detail Gaji
@endsection
@section('pegawai')
    active
@endsection
@section('content')
    <main class="app-content">
        <div class="app-title">
            <div class="div">
                <h1><i class="fa fa-laptop"></i> Detail Gaji</h1>
                <!-- <p>Bootstrap Components</p> -->
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Gaji</li>
                <li class="breadcrumb-item"><a href="/admin/gaji">Data Gaji</a></li>
                <li class="breadcrumb-item"><a href="#">Detail Gaji</a></li>
            </ul>
        </div>
        <!-- Buttons-->
        <div class="tile">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12">
                        {{-- <img src="{{ asset('upload/'.Auth::user()->foto) }}" width="180px" height="120px" alt=""> --}}
                        <table class="table-condensed">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{ $gaji->pengguna->name }}</td>
                            </tr>
                            <tr>
                                <td>Bulan</td>
                                <td>: </td>
                                <td>{{ $gaji->bulan }}</td>
                            </tr>
                            <tr>
                                <td> Gaji Pokok</td>
                                <td>:</td>
                                <td>Rp.{{number_format($gaji->gaji_pkk)}}</td>
                            </tr>
                            <tr>
                                <td> Tunjangan Istri</td>
                                <td>:</td>
                                <td>Rp.{{number_format($gaji->tunjangan_istri)}}</td>
                            </tr>
                            <tr>
                                <td> Tunjangan Anak</td>
                                <td>:</td>
                                <td>Rp.{{number_format($gaji->tunjangan_anak)}}</td>
                            </tr>
                            <tr>
                                <td> Tunjangan Umum</td>
                                <td>:</td>
                                <td>Rp.{{number_format($gaji->tunjangan_umum)}}</td>
                            </tr>
                            <tr>
                                <td>Tambahan Tunjangan Umum</td>
                                <td>:</td>
                                <td>Rp.{{number_format($gaji->tmb_tunjangan_umum)}}</td>
                            </tr>
                            <tr>
                                <td> Tunjangan Struk</td>
                                <td>:</td>
                                <td>Rp.{{number_format( $gaji->tunjangan_struk)}}</td>
                            </tr>
                            <tr>
                                <td> Tunjangan Fungsi</td>
                                <td>:</td>
                                <td>Rp.{{number_format($gaji->tunjangan_fungsi)}}</td>
                            </tr>
                            <tr>
                                <td> Tunjangan Beras</td>
                                <td>:</td>
                                <td>Rp.{{number_format($gaji->tunjangan_beras)}}</td>
                            </tr>
                            <tr>
                                <td> Tunjangan PPH</td>
                                <td>:</td>
                                <td>Rp.{{number_format($gaji->tunjangan_pph)}}</td>
                            </tr>
                            <tr>
                                <td> Potongan BPJS</td>
                                <td>:</td>
                                <td>Rp.{{number_format($gaji->potongan_bpjs)}}</td>
                            </tr>
                            <tr>
                                <td> Potongan Pensiun</td>
                                <td>:</td>
                                <td>Rp.{{number_format( $gaji->potongan_pensiun)}}</td>
                            </tr>
                            <tr>
                                <td> Potongan Beras</td>
                                <td>:</td>
                                <td>Rp.{{number_format($gaji->potongan_beras)}}</td>
                            </tr>
                            <tr>
                                <td> Potongan CP</td>
                                <td>:</td>
                                <td>Rp.{{number_format($gaji->potongan_cp )}}</td>
                            </tr>
                            <tr>
                                <td> Potongan PPH</td>
                                <td>:</td>
                                <td>Rp.{{number_format($gaji->potongan_pph)}}</td>
                            </tr>
                            <tr>
                                <td> Potongan Lain-lain</td>
                                <td>:</td>
                                <td>Rp.{{number_format($gaji->potongan_ll)}}</td>
                            </tr>
                            <tr>
                                <td> Gaji Yang Dietrima</td>
                                <td>:</td>
                                <td>Rp.{{number_format($gaji->gaji_diterima)}}</td>
                            </tr>
                        </table>
                        <div>
                            <a class="btn btn-secondary" href="{{ route('admin/gaji') }}"><i
                                    class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>


    </main>
@endsection
