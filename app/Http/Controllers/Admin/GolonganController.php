<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Golongan;

class GolonganController extends Controller
{
    public function index(){
        $daftar_golongan = Golongan::all();
        return view ('admin.golongan.tampil', compact(
            [
                'daftar_golongan'
            ]
        ));
    }

    public function add(){
        return view ('admin.golongan.add');
    }

    public function simpan_golongan(Request $request){
        $agama = Golongan::create([
            'nama_golongan' =>$request->nama_golongan
        ]);
        return redirect()->route('admin/golongan');
    }

    public function store(Request $request)
    {
        $golongan = new Golongan;
        $golongan-> nama_golongan = $request ->nama_golongan;
        $golongan-> save();

        return redirect ('admin/golongan');
    }

    public function editg($id){
        $golongan = Golongan::find($id);
        return view('admin.golongan.edit', compact ('golongan'));
    }

    public function gol_edit(Request $request, $id){
        $golongan = Golongan::find($id);
        $golongan->nama_golongan = $request ->nama_golongan;
        $golongan->save();

        return redirect ('admin/golongan')->with('update', 'Data telah berhasil dirubah');
    }

    public function hapus($id){
        $golongan = Golongan::find($id);
        $golongan->delete();

        return redirect()->route('admin/golongan');
    }

}
