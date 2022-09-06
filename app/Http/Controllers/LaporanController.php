<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;

class LaporanController extends Controller
{

    //Admin

    public function index(Request $request){

        $nama_laporan = $request->cari;
        // $id_user= $request->cari;
        if ($request->filled('cari')){
            $daftar_laporan=Laporan::whereLike('nama_laporan', $nama_laporan)->paginate(5);
        }

        else {
            $daftar_laporan = Laporan::with([
                'pengguna'
            ])->latest()->paginate(5);
        }


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


    public function indexp(Request $request){


        $nama_laporan= $request->cari;
        if ($request->filled('cari')){
            $daftar_laporan=Laporan::whereLike('nama_laporan', $nama_laporan)->paginate(5);
        }

        else {
            $pengguna = auth()->user();
            $daftar_laporan = $pengguna->laporan()->latest()->paginate(5);
        }



        return view('pegawai/laporan/index', [
            'daftar_laporan' => $daftar_laporan
        ]);

    }

    public function add(){
        return view ('pegawai.laporan.add');
    }

    public function simpan_laporan(Laporan $laporan, Request $request){
        $file = $request->file('file');
        $lokasi_file = $file->store('laporan', ['disk' => 'upload']);
        $nama_laporan = $request->nama_laporan;
        $file = $request->file;
        $pengguna = auth()->user();
        $pengguna->laporan()->create([
            'nama_laporan'=>$nama_laporan,
            'file'=>$lokasi_file

        ]);

        return redirect()->route('pegawai/laporan');
    }

    public function editp($id){
        $laporan = Laporan::find($id);
        return view('pegawai.laporan.edit', compact(
            'laporan'
        ));
    }

    public function simpan_editlapp(Request $request, $id){

        // $file = $request->file('file');
        // $lokasi_file = $file->store('laporan', ['disk' => 'upload']);
        $laporan=Laporan::find($id);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $lokasi_file = $file->store('file', ['disk' => 'upload']);
            $laporan->file= $lokasi_file;
        }
        $laporan->nama_laporan= $request->nama_laporan;

        $laporan->save();

        return redirect ('pegawai/laporan');
    }




    //Guru

    public function indexg(Request $request){

        $nama_laporan= $request->cari;
        if ($request->filled('cari')){
            $daftar_laporan=Laporan::whereLike('nama_laporan', $nama_laporan)->orWhereLike('nama_laporan', $nama_laporan)->paginate(5);
        }

        else {
            $pengguna = auth()->user();
            $daftar_laporan = $pengguna->laporan()->latest()->paginate(5);
        }


        return view('guru/laporan/tampil', [
            'daftar_laporan' => $daftar_laporan
        ]);

    }
    public function addg(){
        return view ('guru.laporan.add');
    }



    public function simpan_laporang(Laporan $laporan, Request $request){
        $file = $request->file('file');
        $lokasi_file = $file->store('laporan', ['disk' => 'upload']);
        $nama_laporan = $request->nama_laporan;
        $file = $request->file;
        $pengguna = auth()->user();
        $pengguna->laporan()->create([
            'nama_laporan'=>$nama_laporan,
            'file'=>$lokasi_file

        ]);

        return redirect()->route('guru/laporan');
    }

    public function editg($id){
        $laporan = Laporan::find($id);
        return view('guru.laporan.edit', compact(
            'laporan'
        ));
    }

    public function simpan_editlap(Request $request, $id){

        // $file = $request->file('file');
        // $lokasi_file = $file->store('laporan', ['disk' => 'upload']);
        $laporan=Laporan::find($id);
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $lokasi_file = $file->store('file', ['disk' => 'upload']);
            $laporan->file= $lokasi_file;
        }
        $laporan->nama_laporan= $request->nama_laporan;

        $laporan->save();

        return redirect ('guru/laporan');
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


