<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gaji;
use App\Models\User;
use Barryvdh\DomPDF\Facade as Download;


class GajiController extends Controller
{
    public function index(Request $request){

        $bulan = $request->cari;
        $id_user= $request->cari;
        if ($request->filled('cari')){
            $daftar_gaji=Gaji::whereLike('bulan', $bulan)->orWhereLike('id_user', $id_user)->paginate(12);
        }

        else {
            $daftar_gaji = Gaji::paginate(12);
        }
        return view('admin.gaji.tampil', compact(
                'daftar_gaji'

        ));
    }



    public function store(Request $request){
        $gaji = new Gaji;
        $gaji-> bulan =$request->bulan;
        $gaji-> gaji_pkk = $request ->gaji_pkk;
        $gaji-> save();

        return redirect ('admin.gaji');
    }

    public function add(){

        $daftar_user = User::role(['pegawai', 'guru'])->get();
        return view ('admin.gaji.add', compact([
            'daftar_user'
        ]));
    }

    public function simpan_gaji(Request $request){

        $id_user = $request->id_user;
        $bulan = $request->bulan;
        $gaji_pkk= $request->gaji_pkk;
        $tunjangan_istri = $request->tunjangan_istri;
        $tunjangan_anak = $request->tunjangan_anak;
        $tunjangan_umum = $request->tunjangan_umum;
        $tmb_tunjangan_umum = $request->tunjangan_umum;
        $tunjangan_struk = $request->tunjangan_struk;
        $tunjangan_fungsi = $request->tunjangan_fungsi;
        $tunjangan_beras = $request->tunjangan_beras;
        $tunjangan_pph = $request->tunjangan_pph;
        $potongan_bpjs = $request->potongan_bpjs;
        $potongan_pensiun = $request->potongan_pensiun;
        $potongan_beras = $request->potongan_beras;
        $potongan_cp = $request->potongan_cp;
        $potongan_pph = $request->potongan_pph;
        $potongan_ll = $request->potongan_ll;
        $gaji_diterima = $request->gaji_diterima;

        $jumlah = $gaji_pkk+$tunjangan_istri+$tunjangan_anak+$tunjangan_umum+$tmb_tunjangan_umum+$tunjangan_struk+$tunjangan_fungsi+$tunjangan_beras+$tunjangan_pph;
        $total = $jumlah - $potongan_bpjs-$potongan_pensiun-$potongan_beras-$potongan_cp-$potongan_pph-$potongan_ll;

        $pengguna = User::findOrFail($id_user);
        $pengguna->gaji()->create([
            'id_user' => $id_user,
            'bulan' => $bulan,
            'gaji_pkk' => $gaji_pkk,
            'tunjangan_istri' => $tunjangan_istri,
            'tunjangan_anak' => $tunjangan_anak,
            'tunjangan_umum' => $tunjangan_umum,
            'tmb_tunjangan_umum' => $tmb_tunjangan_umum,
            'tunjangan_struk' => $tunjangan_struk,
            'tunjangan_fungsi' => $tunjangan_fungsi,
            'tunjangan_beras' => $tunjangan_beras,
            'tunjangan_pph' => $tunjangan_pph,
            'potongan_bpjs' => $potongan_bpjs,
            'potongan_pensiun' => $potongan_pensiun,
            'potongan_beras' => $potongan_beras,
            'potongan_cp' => $potongan_cp,
            'potongan_pph' => $potongan_pph,
            'potongan_ll' => $potongan_ll,
            'gaji_diterima' =>$total ,

        ]);
        return redirect()->route('admin/gaji');

    }

    public function edit($id){
        $daftar_user = User::role('pegawai')->get();
        $gaji = Gaji::find($id);
        // dd($gaji);
        return view('admin.gaji.edit', compact ('daftar_user', 'gaji') );
    }

    public function simpan_edit (Request $request, $id) {
        $id_user = $request->id_user;
        $bulan = $request->bulan;
        $gaji_pkk= $request->gaji_pkk;
        $tunjangan_istri = $request->tunjangan_istri;
        $tunjangan_anak = $request->tunjangan_anak;
        $tunjangan_umum = $request->tunjangan_umum;
        $tmb_tunjangan_umum = $request->tunjangan_umum;
        $tunjangan_struk = $request->tunjangan_struk;
        $tunjangan_fungsi = $request->tunjangan_fungsi;
        $tunjangan_beras = $request->tunjangan_beras;
        $tunjangan_pph = $request->tunjangan_pph;
        $potongan_bpjs = $request->potongan_bpjs;
        $potongan_pensiun = $request->potongan_pensiun;
        $potongan_beras = $request->potongan_beras;
        $potongan_cp = $request->potongan_cp;
        $potongan_pph = $request->potongan_pph;
        $potongan_ll = $request->potongan_ll;
        $gaji_diterima = $request->gaji_diterima;

        $jumlah = $gaji_pkk+$tunjangan_istri+$tunjangan_anak+$tunjangan_umum+$tmb_tunjangan_umum+$tunjangan_struk+$tunjangan_fungsi+$tunjangan_beras+$tunjangan_pph;
        $total = $jumlah - $potongan_bpjs-$potongan_pensiun-$potongan_beras-$potongan_cp-$potongan_pph-$potongan_ll;

        //edit
        $gaji = Gaji::find($request->id_gaji);
        $gaji->bulan = $bulan;
        $gaji->gaji_pkk = $gaji_pkk;
        $gaji->tunjangan_istri = $tunjangan_istri;
        $gaji->tunjangan_anak = $tunjangan_anak;
        $gaji->tunjangan_umum = $tunjangan_umum;
        $gaji->tmb_tunjangan_umum = $tmb_tunjangan_umum;
        $gaji->tunjangan_struk = $tunjangan_struk;
        $gaji->tunjangan_fungsi = $tunjangan_fungsi;
        $gaji->tunjangan_beras = $tunjangan_beras;
        $gaji->tunjangan_pph = $tunjangan_pph;
        $gaji->potongan_bpjs = $potongan_bpjs;
        $gaji->potongan_pensiun = $potongan_pensiun;
        $gaji->potongan_beras = $potongan_beras;
        $gaji->potongan_cp = $potongan_cp;
        $gaji->potongan_pph = $potongan_pph;
        $gaji->potongan_ll = $potongan_ll;
        $gaji->gaji_diterima=$total ;
        $gaji->save();
        // dd($pengguna);

        // dd($gaji);



        return redirect ('admin/gaji')->with('update', 'Data berhasil di update');
    }

    public function hapus($id){
        $gaji = Gaji::find($id);
        $gaji->delete();

        return redirect()->route('admin/gaji');
    }

    public function showa(Gaji $gaji){


         return view('admin.gaji.show', ['gaji'=>$gaji]);

    }

    public function cetaka($id)
    {
        $cetak = Gaji::find($id);
        // dd($cetak);
        return view('admin.gaji.cetak', compact('cetak'));
    }

    public function cetakall()
    {
        $cetak = Gaji::all();
        // dd($cetak);
        return view('admin.gaji.cetakall', compact('cetak'));
    }



    // Guru



    // Pegawai


    public function show(Request $request){
        $bulan = $request->cari;
        $id_user= $request->cari;
        if ($request->filled('cari')){
            $daftar_gaji=Gaji::whereLike('bulan', $bulan)->orWhereLike('id_user', $id_user)->paginate(2);
        }
        else {
            $user = auth()->user();
            $daftar_gaji=Gaji::whereLike('id_user', $user->id)->paginate(2);
        }
        return view ('gajip/show', compact('daftar_gaji'));
    }

    public function cetak()
    {
        $user = auth()->user();
        $cetakGaji = $user->gaji;;
        return view('gajip.cetak')->with('cetak', $cetakGaji);
    }

}


