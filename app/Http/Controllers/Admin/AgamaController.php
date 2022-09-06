<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agama;

class AgamaController extends Controller
{
    public function index(Request $request){

        $nama_agama = $request->cari;

        if ($request->filled('cari')){
            $daftar_agama=Agama::whereLike('nama_agama', $nama_agama)->paginate(3);
        }

        else {
            $daftar_agama = Agama::paginate(3);
        }
        return view('admin.agama.tampil', compact(
                'daftar_agama'

        ));
    }

    public function store(Request $request)
    {

        $agama = new Agama;
        $agama-> nama_agama = $request ->nama_agama;
        $agama-> save();

        return redirect ('admin.agama');
    }


    public function add (){
        return view ('admin.agama.add');
    }

    public function simpan_agama(Request $request){
        $agama = Agama::create([
            'nama_agama' =>$request->nama_agama
        ]);
        return redirect()->route('admin/agama');
    }


    public function ediit($id)
    {
        $agama= Agama::find($id);
        return view('admin.agama.edit', compact('agama'));
    }



    public function simpn_edit (Request $request, $id)
    {
    $agama = Agama::find($id);
    $agama->nama_agama = $request ->nama_agama;
    $agama->save();

    return redirect('admin/agama')->with('update','Data Berhasil Di Update');

}

    public function hapus($id){
        $agama = Agama::find($id);
        $agama->delete();

        return redirect()->route('admin/agama')->with('Data Berhasil Di Hapus');;
    }

}
