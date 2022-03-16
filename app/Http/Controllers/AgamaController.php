<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agama;

class AgamaController extends Controller
{
    public function index () {
        $daftar_agama = Agama::all();
        return view ('agama.tampil', compact (
            [
                'daftar_agama'
            ]
        ));
    }

    public function add (){
        return view ('agama.add');
    }

    public function simpan_agama(Request $request){
        $agama = Agama::create([
            'nama_agama' =>$request->nama_agama
        ]);
        return redirect()->route('agama');
    }

    public function hapus($id){
        $agama = Agama::find($id);
        $agama->delete();

        return redirect()->route('agama');
    }

}
