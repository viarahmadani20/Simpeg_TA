@extends('app')
@section('title')
Pendidikan
@endsection
@section('pegawai')
active
@endsection
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Pendidikan</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">...</li>
          <li class="breadcrumb-item"><a href="#">Detail Pendidkan</a></li>
          <li class="breadcrumb-item"><a href="#">Pendidikan</a></li>
        </ul>
      </div>

      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="form-group col-md 8">
              <a href="{{route('admin/pendidikan/add')}}"
              class="btn btn-primary"><span class="fa fa-plus"> Tambah Pendidikan</span></a>
            </div>

            <table class="table table-hover">
                <thead>
                  <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="no_pendidikan: activate to sort column ascending" style="width: 91.0625px;" >No</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="tahun_pendidikan: activate to sort column ascending" style="width: 91.0625px;" >Tahun Lulus</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="nama_pendidikan: activate to sort column ascending" style="width: 91.0625px;" > Pendidikan Terakhir</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="operasi: activate to sort column ascending" style="width: 91.0625px;" >Operasi</th>
                  </tr>
                </thead>
                @foreach ( $daftar_pendidikan as $no_pendidikan =>$pendidikan )
                <tbody>
                    <tr>
                    <td class="sorting_1" >{{$no_pendidikan+1}}</td>
                    <td>{{$pendidikan->tahun_pendidikan}}</td>
                    <td>{{$pendidikan->nama_pendidikan}}</td>
                    <td><a href="{{route('admin/editp', $pendidikan->id)}}"class="btn btn-info"><span class="fa fa-edit (alias)"> Edit</span></a></td>
                    <td><form action="{{route("admin/pendidikan/hapus", $pendidikan->id)}}" >
                      <button class="btn btn-danger" type="submit" ><span class="fa fa-trash"> Hapus</span></button>
                    </td>
                    </form>
                  </tr>

                </tbody>
                @endforeach
              </table>

          </div>
        </div>
      </div>
</main>
@endsection


