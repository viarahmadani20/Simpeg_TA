<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use App\Models\Agama;
use App\Models\Golongan;
use App\Models\Keluarga;
use App\Models\User;
use App\Models\Laporan;
use App\Models\Surat;

class PegawaiController extends Controller
{
    public function tampil(){
        $user = User::all()->count();
        $laporan = Laporan::all()->count();
        $surat = Surat::all()->count();

        return view('admin.pegawai.tampil', compact('user', 'laporan', 'surat'));
      }

    public function show( Pegawai $pegawai){


        return view('admin/pegawai/show', [
            'pegawai'=>$pegawai
        ]);
    }

    public function add(){
        $daftar_agama= Agama::all();
        $daftar_golongan = Golongan::all();
        $daftar_keluarga = Keluarga::all();
        return view ('admin.pegawai.add')
            ->with('daftar_agama', $daftar_agama)
            ->with('daftar_golongan', $daftar_golongan)
            ->with('daftar_keluarga', $daftar_keluarga);
    }

    public function index(){
        $daftar_pegawai = Pegawai::all();
        return view ('admin.pegawai.index', compact(
            [
                'daftar_pegawai'
            ]
        ));
    }

    public function store(Request $request){
        $pegawai = new Pegawai;
        $pegawai->nip = $request ->nip;
        $pegawai->namap = $request->namap;
        $pegawai->tempat_lahir = $request->tempat_lahir;
        $pegawai->tanggal_lahir = $request->tanggal_lahir;
        $pegawai->alamat = $request->alamat;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->id_agama = $request->agama;
        $pegawai->id_golongan = $request->golongan;
        $pegawai->id_status = $request->status;
        $pegawai->foto = $request->foto;
        $pegawai->no_hp = $request->no_hp;
        $pegawai->save();

        return redirect ()->route('admin/pegawai/index');

    }

    public function simpan_pegawai(Request $request){
        $pegawai =Pegawai::create([
            'nip' =>$request->nip,
            'namap'=>$request->namap,
            'tempat_lahir' =>$request->tempat_lahir,
            'tanggal_lahir' =>$request->tanggal_lahir,
            'alamat' =>$request->alamat,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'id_agama'=>$request->agama,
            'id_golongan'=>$request->golongan,
            'id_status' => $request->status,
            'foto' =>$request->foto,
            'no_hp' =>$request->no_hp,
        ]);

        return redirect()->route('admin/pegawai/index');
    }

    public function edit($id){
        $daftar_agama = Agama::all();
        $daftar_golongan = Golongan::all();
        $daftar_keluarga = Keluarga::all();
        $pegawai = Pegawai::find($id);
        return view('admin.pegawai.edit', compact('pegawai'))
        ->with('daftar_agama', $daftar_agama)
        ->with('daftar_golongan', $daftar_golongan)
        ->with('daftar_keluarga', $daftar_keluarga);
    }

    public function simpan_edit(Request $request, $id){
        $pegawai = Pegawai::find($id);
        $pegawai->nip = $request ->nip;
        $pegawai->namap = $request->namap;
        $pegawai->tempat_lahir = $request->tempat_lahir;
        $pegawai->tanggal_lahir = $request->tanggal_lahir;
        $pegawai->alamat = $request->alamat;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->agama = $request->agama;
        $pegawai->golongan = $request->golongan;
        $pegawai->status = $request->status;
        $pegawai->foto = $request->foto;
        $pegawai->no_hp = $request->no_hp;
        $pegawai -> save();

        return redirect ('admin/pegawai/index')->with('update', 'data berhasil di update');
    }

    public function hapus($id){
        $pegawai = Pegawai::find($id);
        $pegawai->delete();

        return redirect()->route('admin/pegawai/index');
    }








}


