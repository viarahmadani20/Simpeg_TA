<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Golongan;

class GolonganController extends Controller
{
    public function index(){
        $daftar_golongan = Golongan::all();
        return view ('golongan.tampil', compact(
            [
                'daftar_golongan'
            ]
        ));
    }

    public function add(){
        return view ('golongan.add');
    }

    public function simpan_golongan(Request $request){
        $agama = Golongan::create([
            'nama_golongan' =>$request->nama_golongan
        ]);
        return redirect()->route('golongan');
    }

    public function store(Request $request)
    {
        $golongan = new Golongan;
        $golongan-> nama_golongan = $request ->nama_golongan;
        $golongan-> save();

        return redirect ('golongan');
    }

    public function editg($id){
        $golongan = Golongan::find($id);
        return view('golongan.edit', compact ('golongan'));
    }

    public function gol_edit(Request $request, $id){
        $golongan = Golongan::find($id);
        $golongan->nama_golongan = $request ->nama_golongan;
        $golongan->save();

        return redirect ('golongan')->with('update', 'Data telah berhasil dirubah');
    }

    public function hapus($id){
        $golongan = Golongan::find($id);
        $golongan->delete();

        return redirect()->route('golongan');
    }

}
