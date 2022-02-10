@extends('app')
@section('title')
Pelatihan
@endsection
@section('pegawai')
active
@endsection
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Pelatihan</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">...</li>
          <li class="breadcrumb-item"><a href="#">Detail Pegawai</a></li>
          <li class="breadcrumb-item"><a href="#">Pelatihan</a></li>
        </ul>
      </div>

      <div class="row">        
        <div class="col-md-12">
          <div class="tile">                       
            <div class="form-group col-md 8">              
              <a href="pendidikan/"
              class="btn btn-primary"><span class="fa fa-plus"> Tambah Pelatihan</span></a>
            </div>
            
            <table class="table table-stripped table-hover">
              <thead>
                <th>Tanggal Pelatihan</th>
                <th>Topik Pelatihan</th>        
                <th>Operasi</th>                       
              </thead>
              <tbody>
             
                <tr>            
                  <td>1 Januari 2021</td>  
                  <td>Cara mencari uang tanpa kerja</td>
                  <td><a href="#"><button class="btn btn-warning fa fa-edit" type="submit"> Edit</button></a></td>
                  <td>
                        <form action="#" method="post">
                      
                        {{method_field('DELETE')}}
                        <button class="btn btn-danger fa fa-trash" type="submit" > Hapus</button>
                        </form>
                      </td>
                </tr>
          
              </tbody>
            </table>           
           
          </div>
        </div>              
      </div>
</main>
@endsection
         

