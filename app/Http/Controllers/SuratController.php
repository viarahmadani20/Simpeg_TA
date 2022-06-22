<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;

class SuratController extends Controller
{
    public function index ()
    {
        $daftar_surat = Surat::all();
        return view ("surat.tampil", compact(
            [
                'daftar_surat'
            ]
        ));
    }

    public function store(Request $request){
        $surat = new Surat;
        $surat->nama_surat = $request->nama_surat;
        $surat->save();
    }

    public function add ()
    {
        return view ('surat.add');
    }

    public function simpan_surat(Request $request){
        $surat = Surat::create([
            'nama_surat' =>$request->nama_surat,
        ]);

        return redirect()->route('surat');

    }

    public function edit($id){
        $surat = Surat::find($id);
        return view ('surat.edit', compact('surat'));
    }

    public function simpan_edit(Request $request, $id){
        $surat = Surat::find($id);
        $surat->nama_surat = $request ->nama_surat;
        $surat->save();

        return redirect('surat')->with('update');
    }

    public function hapus($id){
        $surat = Surat::find($id);
        $surat->delete();

        return redirect()->route('surat');
    }
}

