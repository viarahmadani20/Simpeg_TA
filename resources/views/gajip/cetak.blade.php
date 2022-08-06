<!doctype html>
<html lang="en">
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <style>
      table.static {
        position: relative;
        /* left: 3%; */
        border: 1px solid #543535
      }
    </style>
    <title>Cetak Gaji</title>



    {{-- <!-- Required meta tags --> buat nyambungin ke css
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Cetak Gaji</title> --}}
  </head>

  {{-- untuk print nota --}}
  <body>

    <div class="form-group">
      <p align="center"><b>Slip Gaji</b></p>
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
      @foreach ($cetak as $item)
      <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{ Auth::user()->name}}</td>
        <td>{{$item->bulan}}</td>
        <td>{{$item->gaji_pkk}}</td>
        <td>{{$item->tunjangan_umum}}</td>
        <td>{{$item->tmb_tunjangan_umum}}</td>
        <td>{{$item->tunjangan_struk}}</td>
        <td>{{$item->tunjangan_fungsi}}</td>
        <td>{{$item->tunjangan_beras}}</td>
        <td>{{$item->tunjangan_pph}}</td>
        <td>{{$item->potongan_bpjs}}</td>
        <td>{{$item->potongan_pensiun}}</td>
        <td>{{$item->potongan_beras}}</td>
        <td>{{$item->potongan_cp}}</td>
        <td>{{$item->potongan_pph}}</td>
        <td>{{$item->potongan_ll}}</td>
        <td>{{$item->gaji_diterima}}</td>
      </tr>
      @endforeach
      </table>
    </div>
    <script type="text/javascript">
        window.print();
    </script>









    {{-- <div class="row">
    @foreach($gaji as $item)
        <div class="col-md-3">
            <h4>{{$item->nama_barang}}</h4>
            <h2>Rp . {{$b->harga_barang}}</h2>
            <h2></h2>
            <img src="data:image/png;base64,{{DNS1D::getBarcodePNG($b->harga_barang, 'C39')}}" height="60" width="180">

        </div>
        <br>
    @endforeach

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
  </body>
</html>
