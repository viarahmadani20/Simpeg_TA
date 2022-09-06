<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat;

class SuratController extends Controller
{
    public function index(Request $request){

        $nama_surat = $request->cari;
        // $id_user= $request->cari;
        if ($request->filled('cari')){
            $daftar_surat=Surat::whereLike('nama_surat', $nama_surat)->paginate(5);
        }

        else {
            $daftar_surat = Surat::with([
                'pengguna'
            ])->latest()->paginate(5);
        }

        return view('admin.surat.index', compact(
                'daftar_surat'

        ));
    }


    public function store(Request $request){
        $surat = new Surat;
        $surat->nama_surat = $request->nama_surat;
        $surat->save();
    }

    public function add ()
    {
        return view ('admin.surat.add');
    }

    public function simpan_surat(Request $request){
        $surat = Surat::create([
            'nama_surat' =>$request->nama_surat,
        ]);

        return redirect()->route('admin/surat');

    }

    public function edit($id){
        $surat = Surat::find($id);
        return view ('surat.edit', compact('admin/surat'));
    }

    public function simpan_edit(Request $request, $id){
        $surat = Surat::find($id);
        $surat->nama_surat = $request ->nama_surat;
        $surat->save();

        return redirect('admin/surat')->with('update');
    }

    public function hapus($id){
        $surat = Surat::find($id);
        $surat->delete();

        return redirect()->route('admin/surat');
    }

    //guru/pegawai


    //controller admin

    //ngeliat daftar surat yang pernah dibuat guru/pegawai

    public function indexx(Request $request){


        $nama_surat= $request->cari;
        if ($request->filled('cari')){
            $daftar_surat=Surat::whereLike('nama_surat', $nama_surat)->paginate(5);
        }

        else {
            $pengguna = auth()->user();
            $daftar_surat = $pengguna->surat()->latest()->paginate(5);
        }


        // $pengguna = auth()->user();

        // $daftar_surat = $pengguna->surat()->latest()->get();

        return view('guru/surat/tampil', [
            'daftar_surat' => $daftar_surat
        ]);

    }

    public function form_surat(){
        return view ('guru/surat/add');
    }

    public function buat_surat(Request $request){
        $nama_surat = $request->nama_surat;
        $keterangan = $request->keterangan;

        $pengguna = auth()->user();

        $pengguna->surat()->create([
            'nama_surat'=>$nama_surat,
            'keterangan'=>$keterangan

        ]);

        return redirect()->route('guru/surat');
    }

    public function editg($id){
        $surat=Surat::find($id);
        return view('guru.surat.edit', compact(
            'surat'
        ));
    }

    public function simpan_editg(Request $request, $id){
        $surat = Surat::find($id);
        $surat->nama_surat=$request->nama_surat;
        $surat->keterangan=$request->keterangan;
        $surat->save();
        return redirect ('guru/surat');
    }


    // konfirmasi bagian admin

    public function form_konfirmasi(Surat $surat){
        return view ('admin/surat/konfirmasi', [
            'surat' =>$surat
        ]);
    }

    public function konfirmasi(Surat $surat, Request $request){
        $file_surat = $request->file('file_surat' );

        $lokasi_file_surat = $file_surat->store('surat', ['disk' => 'upload']);
        $surat->file_surat = $lokasi_file_surat;
        $surat->status = "Diverifikasi";
        $surat->save();




        return redirect()->route('admin/surat');

    }

    //pegawai

    public function indexp(Request $request){


        $nama_surat= $request->cari;
        if ($request->filled('cari')){
            $daftar_surat=Surat::whereLike('nama_surat', $nama_surat)->paginate(5);
        }

        else {
            $pengguna = auth()->user();
            $daftar_surat = $pengguna->surat()->latest()->paginate(5);
        }


        // $pengguna = auth()->user();

        // $daftar_surat = $pengguna->surat()->latest()->get();

        return view('pegawai/surat/index', [
            'daftar_surat' => $daftar_surat
        ]);

    }

    public function form_suratp(){
        return view ('pegawai/surat/add');
    }

    public function buat_suratp(Request $request){
        $nama_surat = $request->nama_surat;
        $keterangan = $request->keterangan;

        $pengguna = auth()->user();

        $pengguna->surat()->create([
            'nama_surat'=>$nama_surat,
            'keterangan'=>$keterangan

        ]);

        return redirect()->route('pegawai/surat');
    }


    public function editp($id){
        $surat=Surat::find($id);
        return view('pegawai.surat.edit', compact (
            'surat'
        ));
    }

    public function simpan_editp(Request $request, $id){
        $surat = Surat::find($id);
        $surat->nama_surat=$request->nama_surat;
        $surat->keterangan=$request->keterangan;
        $surat->save();
        return redirect ('pegawai/surat');
    }





}

