<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluarga;

class KeluargaController extends Controller
{
    public function index(){
        $daftar_keluarga = Keluarga::all();
        return view ('keluarga.tampil', compact(
            [
                'daftar_keluarga'
            ]
        ));
    }

    public function add(){
        return view ('keluarga.add');
    }

    public function simpan_keluarga(Request $request){
        $keluarga = Keluarga::create([
            'nama_keluarga' =>$request->nama_keluarga
        ]);
        return redirect()->route('keluarga');

    }

    public function store(Request $request)
{
    //
    $keluarga = new Keluarga;
    $keluarga-> nama_keluarga = $request ->nama_keluarga;
    $keluarga-> save();

    return redirect ('keluarga');
}

public function editt($id)
{
    $keluarga= Keluarga::findOrFail($id);
    return view('keluarga.edit', compact('keluarga'));
}



public function save_edit (Request $request, $id)
{
$keluarga = Keluarga::find($id);
$keluarga->nama_keluarga = $request ->nama_keluarga;
$keluarga->save();

return redirect('keluarga')->with('update','Data Berhasil Di Update');

}
    public function hapus($id){
        $keluarga = Keluarga::find($id);
        $keluarga->delete();

        return redirect()->route('keluarga');
    }




}
