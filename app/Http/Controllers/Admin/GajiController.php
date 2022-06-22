<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gaji;


class GajiController extends Controller
{
    public function index(){
        $daftar_gaji = Gaji::all();
        return view('admin.gaji.tampil', compact(
            [
                'daftar_gaji'
            ]
        ));
    }

    public function lihat(){
        return view ('admin.gaji.lihat');
    }

    public function store(Request $request){
        $gaji = new Gaji;
        $gaji-> jmlhgaji = $request ->jmlhgaji;
        $gaji-> save();

        return redirect ('admin.gaji');
    }

    public function add(){
        return view ('admin.gaji.add');
    }

    public function simpan_gaji(Request $request){
        $gaji = Gaji::create([
            'jmlhgaji' => $request->jmlhgaji

        ]);
        return redirect()->route('admin/gaji');

    }

    public function edit($id){
        $gaji = Gaji::find($id);
        return view('admin.gaji.edit', compact ('gaji') );
    }

    public function simpan_edit (Request $request, $id) {
        $gaji = Gaji::find($id);
        $gaji->jmlhgaji = $request->jmlhgaji;
        $gaji->save();

        return redirect ('admin/gaji')->with('update', 'Data berhasil di update');
    }

    public function hapus($id){
        $gaji = Gaji::find($id);
        $gaji->delete();

        return redirect()->route('admin/gaji');
    }
}
