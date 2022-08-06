@extends('app')
@section('title')
Detail Pegawai
@endsection
@section('pegawai')
active
@endsection
@section('content')
    <main class="app-content">
      <div class="app-title">
        <div class="div">
          <h1><i class="fa fa-laptop"></i> Lihat Gaji</h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Gaji</li>
          <li class="breadcrumb-item"><a href="/pegawai/gaji">Gaji Bulan Ini</a></li>
          <li class="breadcrumb-item"><a href="#">Lihat Gaji</a></li>
        </ul>
      </div>
      <!-- Buttons-->
      <div class="tile">
        <div class="page-header">
          <div class="row">
            <div class="col-md-12">
						<img src="#" width="180px" height="120px" alt="">
            <table class="table-condensed">
            	<tr>
			    			<td>NIP</td>
			    			<td>:</td>
			    			<td>{{$pegawai->nip}}</td>
		    			</tr>
							<tr>
								<td>Nama</td>
								<td>: </td>
                			<td>{{$pegawai->namap}}</td>
							</tr>
                            <tr>
								<td> Golongan</td>
								<td>:</td>
								<td>{{$pegawai->golongan->nama_golongan}}</td>
							</tr>
						</table>
            </div>
          </div>
        </div>
      </div>

    </main>
@endsection
