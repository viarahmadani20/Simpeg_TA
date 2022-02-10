@extends('app')
@section('title')
Pengalaman Kerja
@endsection
@section('pegawai')
active
@endsection
@section('content')
<main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-edit"></i> Pengalaman Kerja</h1>
          <!-- <p>Sample forms</p> -->
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item">...</li>
          <li class="breadcrumb-item"><a href="#">Detail Pegawai</a></li>
          <li class="breadcrumb-item"><a href="#">Pengalman Kerja</a></li>
        </ul>
      </div>

      <div class="row">        
        <div class="col-md-12">
          <div class="tile">
            <div class="form-group col-md 8">              
              <a href="{{route ('pengalaman/add')}}"
              class="btn btn-primary"><span class="fa fa-plus"> Tambah Pengalaman</span></a>
            </div>
            
    <table class="table table-stripped table-hover">
    <thead>
        <th>Nama Pekerjaan</th>
        <th>Data Pekerjaan</th>        
        <th>Operasi</th>                       
    </thead>
    <tbody>
   
        <tr>            
            <td>#</td>  
            <td>#</td>                         
            <!-- <td><a href=""><input type="submit" class="btn btn-warning fa fa-edit"> Edit</a></td> -->
            <td><a href="#"><button class="btn btn-warning fa fa-edit"> Edit</button></a></td>
          <td>
              <form action="" method="post">
             
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
         

