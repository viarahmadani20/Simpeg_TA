<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    public function index(){
        $daftar_pendidikan = Pendidikan::all();
        return view ('pendidikan.tampil', compact(
            [
                'daftar_pendidikan'
            ]
        ));
    }

    public function add(){
        return view ('pendidikan.add');
    }

    public function simpan_pendidikan(Request $request){
        $pendidikan = Pendidikan::create([
            'tahun_pendidikan' =>$request->tahun_pendidikan,
            'nama_pendidikan' =>$request->nama_pendidikan
        ]);
        return redirect() ->route('pendidikan');
    }

    public function store(Request $request)
    {
        //
        $pendidikan = new Pendidikan;
        $pendidikan-> tahun_pendidikan = $request ->tahun_pendidikan;
        $pendidikan-> nama_pendidikan = $request ->nama_pendidikan;
        $pendidikan-> save();

        return redirect ('pendidikan');
    }

    public function editp($id){
        $pendidikan = Pendidikan::find($id);
        return view('pendidikan.edit', compact('pendidikan'));
    }

    public function simpan_editp(Request $request, $id){
        $pendidikan = Pendidikan::find($id);
        $pendidikan->tahun_pendidikan = $request ->tahun_pendidikan;
        $pendidikan->nama_pendidikan = $request ->nama_pendidikan;
        $pendidikan->save();

        return redirect('pendidikan')->with('update', 'Data Berhasil di Update');
    }

    public function hapus($id){
        $pendidikan = Pendidikan::find($id);
        $pendidikan->delete();

        return redirect()->route('pendidikan');

    }


}
