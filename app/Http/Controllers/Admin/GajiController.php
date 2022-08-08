<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gaji;
use App\Models\User;
use Barryvdh\DomPDF\Facade as Download;


class GajiController extends Controller
{
    public function index(){
        $daftar_gaji = Gaji::with([
            'pengguna'
        ])->get();
        return view('admin.gaji.tampil', compact(
            [
                'daftar_gaji'
            ]
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

        $jumlah = $gaji_pkk+$tunjangan_umum+$tmb_tunjangan_umum+$tunjangan_struk+$tunjangan_fungsi+$tunjangan_beras+$tunjangan_pph;
        $total = $jumlah - $potongan_bpjs-$potongan_pensiun-$potongan_beras-$potongan_cp-$potongan_pph-$potongan_ll;

        $pengguna = User::findOrFail($id_user);
        $pengguna->gaji()->create([
            'id_user' => $id_user,
            'bulan' => $bulan,
            'gaji_pkk' => $gaji_pkk,
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
        $gaji = Gaji::find($id);
        $gaji->bulan = $request->bulan;
        $gaji->gaji_pkk = $request->gaji_pkk;
        $gaji->tunjangan_umum = $request->tunjangan_umum;
        $gaji->tmb_tunjangan_umum = $request->tmb_tunjangan_umum;
        $gaji->tunjangan_struk = $request->tunjangan_struk;
        $gaji->tunjangan_fungsi = $request->tunjangan_fungsi;
        $gaji->tunjangan_beras = $request->tunjangan_beras;
        $gaji->tunjangan_pph = $request->tunjangan_pph;
        $gaji->potongan_bpjs = $request->potongan_bpjs;
        $gaji->potongan_pensiun = $request->potongan_pensiun;
        $gaji->potongan_beras = $request->potongan_beras;
        $gaji->potongan_cp = $request->potongan_cp;
        $gaji->potongan_pph = $request->potongan_pph;
        $gaji->potongan_ll = $request->potongan_ll;
        $gaji->gaji_diterima = $request->gaji_diterima;
        $gaji->save();

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

    public function cetaka()
    {
        $gaji = Gaji::all();
        return view('admin.gaji.cetak')->with('cetak', $gaji);
    }



    // Guru



    // Pegawai


    public function show(){
        $user = auth()->user();
        $gaji_user = $user->gaji;
        // dd($user->gaji);
        return view ('gajip/show')->with('cetak', $gaji_user);

    }

    public function cetak()
    {
        $user = auth()->user();
        $cetakGaji = $user->gaji;;
        return view('gajip.cetak')->with('cetak', $cetakGaji);
    }

}


