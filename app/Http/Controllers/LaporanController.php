<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{

    //Admin

    public function index(){
        $daftar_laporan = Laporan::with([
            'pengguna'
        ])->get();
        return view ('admin.laporan.index', compact(
            [
                'daftar_laporan'
            ]
        ));
    }



    public function form_konfirmasilap(Laporan $laporan){
       return view('admin.laporan.konfirmasi', [
        'laporan' =>$laporan
    ]);
    }

    public function konfirmasi_laporan( Laporan $laporan, Request $request){
        $laporan->status = "Diterima";
        $laporan->save();

        return redirect()->route('admin/laporan');

    }



    public function hapus($id){
        $laporan = Laporan::find($id);
        $laporan->delete();

        return redirect()->route('admin/laporan');
    }

    //Pegawai


    public function indexp(){
        $pengguna = auth()->user();
        $daftar_laporan = $pengguna->laporan;

        return view('pegawai/laporan/index', [
            'daftar_laporan' => $daftar_laporan
        ]);

    }
    public function add(){
        return view ('pegawai.laporan.add');
    }



    public function simpan_laporan(Laporan $laporan, Request $request){
        $file = $request->file('file');
        $lokasi_file = $file->store('laporan');
        $nama_laporan = $request->nama_laporan;
        $file = $request->file;
        $pengguna = auth()->user();
        $pengguna->laporan()->create([
            'nama_laporan'=>$nama_laporan,
            'file'=>$lokasi_file

        ]);

        return redirect()->route('pegawai/laporan');
    }




    //Guru

    public function indexg(){
        $pengguna = auth()->user();
        $daftar_laporan = $pengguna->laporan;

        return view('guru/laporan/tampil', [
            'daftar_laporan' => $daftar_laporan
        ]);

    }
    public function addg(){
        return view ('guru.laporan.add');
    }



    public function simpan_laporang(Laporan $laporan, Request $request){
        $file = $request->file('file');
        $lokasi_file = $file->store('laporan');
        $nama_laporan = $request->nama_laporan;
        $file = $request->file;
        $pengguna = auth()->user();
        $pengguna->laporan()->create([
            'nama_laporan'=>$nama_laporan,
            'file'=>$lokasi_file

        ]);

        return redirect()->route('guru/laporan');
    }

    // public function store( Request $request)
    // {
    //     //

    //     $laporan = new Laporan;
    //     $laporan-> nama_laporan = $request ->nama_laporan;
    //     $laporan->file = $request->file;
    //     $laporan-> save();

    //     return redirect ('pegawai/laporan');
    // }
}
