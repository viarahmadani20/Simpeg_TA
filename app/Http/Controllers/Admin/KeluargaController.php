<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keluarga;

class KeluargaController extends Controller
{
    public function index(){
        $daftar_keluarga = Keluarga::all();
        return view ('admin.keluarga.tampil', compact(
            [
                'daftar_keluarga'
            ]
        ));
    }

    public function add(){
        return view ('admin.keluarga.add');
    }

    public function simpan_keluarga(Request $request){
        $keluarga = Keluarga::create([
            'kodes' =>$request->kodes,
            'nama_keluarga' =>$request->nama_keluarga,
            'jmlhanak' =>$request->jmlhanak
        ]);
        return redirect()->route('admin/keluarga');

    }

    public function store(Request $request)
{
    //
    $keluarga = new Keluarga;
    $keluarga-> nama_keluarga = $request ->nama_keluarga;
    $keluarga-> save();

    return redirect ('admin/keluarga');
}

public function editt($id)
{
    $keluarga= Keluarga::findOrFail($id);
    return view('admin.keluarga.edit', compact('keluarga'));
}



public function save_edit (Request $request, $id)
{
$keluarga = Keluarga::find($id);
$keluarga->kodes = $request ->kodes;
$keluarga->nama_keluarga = $request ->nama_keluarga;
$keluarga->jmlhanak = $request ->jmlhanak;
$keluarga->save();

return redirect('admin/keluarga')->with('update','Data Berhasil Di Update');

}
    public function hapus($id){
        $keluarga = Keluarga::find($id);
        $keluarga->delete();

        return redirect()->route('admin/keluarga');
    }




}
