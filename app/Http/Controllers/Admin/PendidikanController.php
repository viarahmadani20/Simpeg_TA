<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    public function index(Request $request){


        $nama_pendidikan= $request->cari;
        if ($request->filled('cari')){
            $daftar_pendidikan=Pendidikan::whereLike('nama_pendidikan', $nama_pendidikan)->paginate(2);
        }

        else {
            $daftar_pendidikan = Pendidikan::paginate(2);
        }
        return view('admin.pendidikan.tampil', compact(
                'daftar_pendidikan'

        ));
    }

    public function add(){
        return view ('admin.pendidikan.add');
    }

    public function simpan_pendidikan(Request $request){
        $pendidikan = Pendidikan::create([
            'tahun_pendidikan' =>$request->tahun_pendidikan,
            'nama_pendidikan' =>$request->nama_pendidikan
        ]);
        return redirect() ->route('admin/pendidikan');
    }

    public function store(Request $request)
    {
        //
        $pendidikan = new Pendidikan;
        $pendidikan-> tahun_pendidikan = $request ->tahun_pendidikan;
        $pendidikan-> nama_pendidikan = $request ->nama_pendidikan;
        $pendidikan-> save();

        return redirect ('admin/pendidikan');
    }

    public function editp($id){
        $pendidikan = Pendidikan::find($id);
        return view('admin.pendidikan.edit', compact('pendidikan'));
    }

    public function simpan_editp(Request $request, $id){
        $pendidikan = Pendidikan::find($id);
        $pendidikan->tahun_pendidikan = $request ->tahun_pendidikan;
        $pendidikan->nama_pendidikan = $request ->nama_pendidikan;
        $pendidikan->save();

        return redirect('admin/pendidikan')->with('update', 'Data Berhasil di Update');
    }

    public function hapus($id){
        $pendidikan = Pendidikan::find($id);
        $pendidikan->delete();

        return redirect()->route('admin/pendidikan');

    }


}
