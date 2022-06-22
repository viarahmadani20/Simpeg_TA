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
          <h1><i class="fa fa-laptop"></i> Detail Pegawai</h1>
          <!-- <p>Bootstrap Components</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">Pegawai</li>
          <li class="breadcrumb-item"><a href="/pegawai">Data Pegawai</a></li>
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
			    			<td>No</td>
			    			<td>:</td>
			    			<td>{{$gaji->no}}</td>
		    			</tr>
							<tr>
								<td>Gaji Bulanan</td>
								<td>:</td>
                                <td>{{$gaji->gaji}}</td>
							</tr>
						</table>
            </div>
          </div>
        </div>
      </div>

<a href="#" class="btn btn-primary"><span> Pelatihan</span></a>
<a href="#" class="btn btn-primary"><span> Pendidikan</span></a>
<a href="#" class="btn btn-primary"><span> Pengalaman Kerja</span></a>

    </main>
@endsection
