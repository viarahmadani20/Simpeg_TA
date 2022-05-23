<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gaji;


class GajiController extends Controller
{
    public function index(){
        $daftar_gaji = Gaji::all();
        return view('gaji.tampil', compact(
            [
                'daftar_gaji'
            ]
        ));
    }

    public function lihat(){
        return view ('gaji.lihat');
    }

    public function store(Request $request){
        $gaji = new Gaji;
        $gaji-> jmlhgaji = $request ->jmlhgaji;
        $gaji-> save();

        return redirect ('gaji');
    }

    public function add(){
        return view ('gaji.add');
    }

    public function simpan_gaji(Request $request){
        $gaji = Gaji::create([
            'jmlhgaji' => $request->jmlhgaji

        ]);
        return redirect()->route('gaji');

    }

    public function edit($id){
        $gaji = Gaji::find($id);
        return view('gaji.edit', compact ('gaji') );
    }

    public function simpan_edit (Request $request, $id) {
        $gaji = Gaji::find($id);
        $gaji->jmlhgaji = $request->jmlhgaji;
        $gaji->save();

        return redirect ('gaji')->with('update', 'Data berhasil di update');
    }

    public function hapus($id){
        $gaji = Gaji::find($id);
        $gaji->delete();

        return redirect()->route('gaji');
    }
}
