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
						<img src="{{asset($user->foto)}}" width="120px" height="120px" alt="">
            <table class="table-condensed">
            	            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>{{$user->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
			    			<td>NUPTK</td>
			    			<td>:</td>
			    			<td>{{$user->nip}}</td>
		    			    </tr>
							<tr>
								<td> Tempat, Tanggal Lahir</td>
								<td>:</td>
								<td>{{$user->tempat_lahir}}, {{$user->tanggal_lahir}}</td>
							</tr>
							<tr>
								<td> Jenis Kelamin</td>
								<td>:</td>
								<td>{{$user->jenis_kelamin}}</td>
							</tr>
							<tr>
								<td> Alamat</td>
								<td>:</td>
								<td>{{$user->alamat}}</td>
							</tr>
							<tr>
								<td> Agama</td>
								<td>:</td>
								<td>{{$user->agama->nama_agama}}</td>
							</tr>
                            <tr>
								<td> Pendidikan</td>
								<td>:</td>
								<td>{{$user->pendidikan->nama_pendidikan}}</td>
							</tr>
                            <tr>
								<td> Golongan</td>
								<td>:</td>
								<td>{{$user->golongan->nama_golongan}}</td>
							</tr>
							<tr>
								<td> Status</td>
								<td>:</td>
								<td>{{$user->status->nama_keluarga}}</td>
							</tr>
							<tr>
								<td> Nomor HP</td>
								<td>:</td>
								<td>{{$user->no_hp}}</td>
							</tr>
						</table>
                        <div>
                        <a class="btn btn-secondary" href="{{ route('admin/pegawai/index') }}"><i class="fa fa-fw fa-lg fa-times-circle"></i>Kembali</a>
                        </div>

            </div>
          </div>
        </div>
      </div>


    </main>
@endsection
