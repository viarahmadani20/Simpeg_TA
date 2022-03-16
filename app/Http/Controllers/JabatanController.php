<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{

        public function index(){
            $daftar_jabatan = Jabatan::all();
            return view ('jabatan.tampil', compact(
                [
                    'daftar_jabatan'
                ]
            ));
        }

        public function add(){
            return view ('jabatan.add');
        }

        public function simpan_jabatan(Request $request){
            $jabatan = Jabatan::create([
                'nama' =>$request->nama,
                'nama_jabatan' =>$request->nama_jabatan
            ]);
            return redirect()->route('jabatan');

        }

        public function hapus($id){
            $jabatan = Jabatan::find($id);
            $jabatan->delete();

            return redirect()->route('agama');
        }

}
