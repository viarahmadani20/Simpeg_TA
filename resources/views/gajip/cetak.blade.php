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
            <th>
                Tunjangan Istri <br>
                Tunjangan Anak <br>
                Tunjangan Umum <br>
                Tambahan Tunjangan Umum </th>
            <th>Tunjangan Struk <br>
                Tunjangan Fungsi <br>
                Tunjangan Beras <br>
                Tunjangan PPH <br>
            </th>
            <th>Potongan BPJS <br>
                Potongan Pensiun <br>
                Potongan Beras </th>
            <th>Potongan CP<br>
                Potongan PPH<br>
                Potongan Lain-lain</th>
            <th>Gaji Yang Dietrima</th>
          </tr>
          @foreach ($cetak as $item)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ Auth::user()->name}}</td>
            <td>{{$item->bulan}}</td>
            <td>Rp.{{number_format($item->gaji_pkk)}}</td>
            <td>Rp.{{number_format($item->tunjangan_istri)}} <br>
                Rp.{{number_format($item->tunjangan_anak)}} <br>
                Rp.{{number_format($item->tunjangan_umum)}} <br>
                Rp.{{number_format($item->tmb_tunjangan_umum)}} </td>
            <td>Rp.{{number_format($item->tunjangan_struk)}} <br>
                Rp.{{number_format($item->tunjangan_fungsi)}} <br>
                Rp.{{number_format($item->tunjangan_beras)}} <br>
                Rp.{{number_format($item->tunjangan_pph)}}</td>
            <td>Rp.{{number_format($item->potongan_bpjs)}} <br>
                Rp.{{number_format($item->potongan_pensiun)}} <br>
                Rp.{{number_format($item->potongan_beras)}} </td>
            <td>Rp.{{number_format($item->potongan_cp)}}<br>
                Rp.{{number_format($item->potongan_pph)}}<br>
                Rp.{{number_format($item->potongan_ll)}}</td>
            <td>Rp.{{number_format($item->gaji_diterima)}}</td>
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
