<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{

        public function index(){
            $daftar_jabatan = Jabatan::all();
            return view ('admin.jabatan.tampil', compact(
                [
                    'daftar_jabatan'
                ]
            ));
        }

        public function add(){
            return view ('admin.jabatan.add');
        }

        public function simpan_jabatan(Request $request){
            $jabatan = Jabatan::create([
                'nama' =>$request->nama,
                'nama_jabatan' =>$request->nama_jabatan
            ]);
            return redirect()->route('admin/jabatan');

        }

        public function store(Request $request)
    {
        //
        $jabatan = new Jabatan;
        $jabatan-> nama_jabatan = $request ->nama_agama;
        $jabatan-> save();

        return redirect ('admin/jabatan');
    }

    public function edit($id)
    {
        $jabatan= Jabatan::find($id);
        return view('admin.jabatan.edit', compact('jabatan'));
    }



    public function simpan_edit (Request $request, $id)
    {
    $jabatan = Jabatan::find($id);
    $jabatan->nama = $request ->nama;
    $jabatan->nama_jabatan = $request ->nama_jabatan;
    $jabatan->save();

    return redirect('admin/jabatan')->with('update','Data Berhasil Di Update');

}





        public function hapus($id){
            $jabatan = Jabatan::find($id);
            $jabatan->delete();

            return redirect()->route('admin/jabatan');
        }

}
