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
          <h1><i class="fa fa-laptop"></i> Detail Pegawai</h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Pegawai</li>
          <li class="breadcrumb-item"><a href="/admin/pegawai">Data Pegawai</a></li>
          <li class="breadcrumb-item"><a href="#">Detail Pegawai</a></li>
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
								<td> Tempat, Tanggal Lahir</td>
								<td>:</td>
								<td>{{$pegawai->tempat_lahir}}, {{$pegawai->tanggal_lahir}}</td>
							</tr>
							<tr>
								<td> Jenis Kelamin</td>
								<td>:</td>
								<td>{{$pegawai->jenis_kelamin}}</td>
							</tr>
							<tr>
								<td> Alamat</td>
								<td>:</td>
								<td>{{$pegawai->alamat}}</td>
							</tr>
							<tr>
								<td> Agama</td>
								<td>:</td>
								<td>{{$pegawai->agama->nama_agama}}</td>
							</tr>
								<td> Golongan</td>
								<td>:</td>
								<td>{{$pegawai->golongan->nama_golongan}}</td>
							</tr>
							</tr>
								<td> Status</td>
								<td>:</td>
								<td>{{$pegawai->status->nama_keluarga}}</td>
							</tr>
							</tr>
								<td> Nomor HP</td>
								<td>:</td>
								<td>{{$pegawai->no_hp}}</td>
							</tr>
						</table>
            </div>
          </div>
        </div>
      </div>

<a href="/pegawai/{{$pegawai->id}}/pelatihan" class="btn btn-primary"><span> Pelatihan</span></a>
<a href="/pegawai/{{$pegawai->id}}/pendidikan" class="btn btn-primary"><span> Pendidikan</span></a>
<a href="/pegawai/{{$pegawai->id}}/pengalaman" class="btn btn-primary"><span> Pengalaman Kerja</span></a>

    </main>
@endsection
