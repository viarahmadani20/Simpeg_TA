@extends('apppegawai')
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
                        <img src="{{ asset(Auth::user()->foto) }}" width="180px" height="120px" alt="">
                        {{-- <table class="table-condensed"> --}}
                            <br>

                        <table class="static" align="center" rules="all" border="1px" style="width: 1%;">
                            <tr>
                                <th>No.</th>
                                <th>Nama </th>
                                <th>Bulan</th>
                                <th>Gaji Pokok</th>
                                <th>Tunjangan Umum</th>
                                <th>Tambahan Tunjangan Umum</th>
                                <th>Tunjangan Struk</th>
                                <th>Tunjangan Fungsi</th>
                                <th>Tunjangan Beras</th>
                                <th>Tunjangan PPH</th>
                                <th>Potongan BPJS</th>
                                <th>Potongan Pensiun</th>
                                <th>Potongan Beras</th>
                                <th>Potongan CP</th>
                                <th>Potongan PPH</th>
                                <th>Potongan Lain-lain</th>
                                <th>Gaji Yang Dietrima</th>
                            </tr>
                            <br>
                            @foreach ($cetak as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ Auth::user()->name }}</td>
                                    <td>{{ $item->bulan }}</td>
                                    <td>{{ $item->gaji_pkk }}</td>
                                    <td>{{ $item->tunjangan_umum }}</td>
                                    <td>{{ $item->tmb_tunjangan_umum }}</td>
                                    <td>{{ $item->tunjangan_struk }}</td>
                                    <td>{{ $item->tunjangan_fungsi }}</td>
                                    <td>{{ $item->tunjangan_beras }}</td>
                                    <td>{{ $item->tunjangan_pph }}</td>
                                    <td>{{ $item->potongan_bpjs }}</td>
                                    <td>{{ $item->potongan_pensiun }}</td>
                                    <td>{{ $item->potongan_beras }}</td>
                                    <td>{{ $item->potongan_cp }}</td>
                                    <td>{{ $item->potongan_pph }}</td>
                                    <td>{{ $item->potongan_ll }}</td>
                                    <td>{{ $item->gaji_diterima }}</td>
                                </tr>
                            @endforeach
                        </table>

{{--

                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            @foreach ($gajipr as $gaji)
                                <td>Bulan</td>
                                <td>: </td>
                                <td>{{ $gaji->bulan }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($gajipr as $gaji)
                                <td> Gaji Pokok</td>
                                <td>:</td>
                                <td>{{ $gaji->gaji_pkk }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($gajipr as $gaji)
                                <td> Tunjangan Umum</td>
                                <td>:</td>
                                <td>{{ $gaji->tunjangan_umum }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($gajipr as $gaji)
                                <td>Tambahan Tunjangan Umum</td>
                                <td>:</td>
                                <td>{{ $gaji->tmb_tunjangan_umum }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($gajipr as $gaji)
                                <td> Tunjangan Struk</td>
                                <td>:</td>
                                <td>{{ $gaji->tunjangan_struk }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($gajipr as $gaji)
                                <td> Tunjangan Fungsi</td>
                                <td>:</td>
                                <td>{{ $gaji->tunjangan_fungsi }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($gajipr as $gaji)
                                <td> Tunjangan Beras</td>
                                <td>:</td>
                                <td>{{ $gaji->tunjangan_beras }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($gajipr as $gaji)
                                <td> Tunjangan PPH</td>
                                <td>:</td>
                                <td>{{ $gaji->tunjangan_pph }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($gajipr as $gaji)
                                <td> Potongan BPJS</td>
                                <td>:</td>
                                <td>{{ $gaji->potongan_bpjs }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($gajipr as $gaji)
                                <td> Potongan Pensiun</td>
                                <td>:</td>
                                <td>{{ $gaji->potongan_pensiun }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($gajipr as $gaji)
                                <td> Potongan Beras</td>
                                <td>:</td>
                                <td>{{ $gaji->potongan_beras }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($gajipr as $gaji)
                                <td> Potongan CP</td>
                                <td>:</td>
                                <td>{{ $gaji->potongan_cp }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($gajipr as $gaji)
                                <td> Potongan PPH</td>
                                <td>:</td>
                                <td>{{ $gaji->potongan_pph }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($gajipr as $gaji)
                                <td> Potongan Lain-lain</td>
                                <td>:</td>
                                <td>{{ $gaji->potongan_ll }}</td>
                            @endforeach
                        </tr>
                        <tr>
                            @foreach ($gajipr as $gaji)
                                <td> Gaji Yang Dietrima</td>
                                <td>:</td>
                                <td>{{ $gaji->gaji_diterima }}</td>
                            @endforeach
                        </tr> --}}
                        <br>
                        <br>
                        <div>
                            <a class="btn btn-secondary" target="_blank" href="{{ route('gaji/cetak'), $item->id }}"><i
                                    class="fa-solid fa-print"></i>Cetak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
