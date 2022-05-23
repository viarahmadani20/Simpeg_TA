<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{
    public function index(){
        $daftar_laporan = Laporan::all();
        return view ('laporan.tampil', compact(
            [
                'daftar_laporan'
            ]
        ));
    }

    public function add(){
        return view ('laporan.add');
    }

    public function store(Request $request)
    {
        //
        $laporan = new Laporan;
        $laporan-> nama_laporan = $request ->nama_laporan;
        $laporan->file = $request->file;
        $laporan-> save();

        return redirect ('laporan');
    }

    public function simpan_laporan(Request $request){
        $laporan = Laporan::create([
            'nama_laporan' =>$request->nama_laporan,
            'file' =>$request->file
        ]);
        return redirect()->route('laporan');
    }

    public function editlaporan($id){
        $laporan = Laporan::find($id);
        return view('laporan.edit', compact('laporan'));
    }

    public function lap_edit(Request $request, $id){
        $laporan = Laporan::find($id);
        $laporan->nama_laporan = $request ->nama_laporan;
        $laporan->file = $request ->file;
        $laporan->save();

        return redirect('laporan')->with('update', 'data berhasil diupdate');
    }

    public function hapus($id){
        $laporan = Laporan::find($id);
        $laporan->delete();

        return redirect()->route('laporan');
    }



}
