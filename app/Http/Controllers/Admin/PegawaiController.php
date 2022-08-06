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
use App\Models\Pendidikan;
use Illuminate\Support\Facades\Hash;



class PegawaiController extends Controller
{
    // public function indek()
    // {
    //     // $user = User::all();
    //     $laporan = Laporan::all()->count();
    //     $surat = Surat::all()->count();

    //     return $laporan;

    //     // return view('admin.pegawai.tampil')
    //     //     ->with('user', $user);
    //         // ->with('laporan', $laporan)
    //         // ->with('surar', $surat);
    // }

    public function tampil(){
        $user = User::all()->count();
        $laporan = Laporan::all()->count();
        $surat = Surat::all()->count();

        // return $surat;

        return view('admin.pegawai.tampil', [
            'user' => $user,
            'laporan' => $laporan,
            'surat' => $surat
        ]);

}

    public function show( User $pegawai){
        return view('admin/pegawai/show', [
            'user'=>$pegawai,
        ]);
    }

    public function add(){
        $daftar_agama= Agama::all();
        $daftar_pendidikan= Pendidikan::all();
        $daftar_golongan = Golongan::all();
        $daftar_keluarga = Keluarga::all();
        return view ('admin.pegawai.add')
            ->with('daftar_agama', $daftar_agama)
            ->with('daftar_pendidikan', $daftar_pendidikan)
            ->with('daftar_golongan', $daftar_golongan)
            ->with('daftar_keluarga', $daftar_keluarga);
    }

    public function index(){
        $daftar_pegawai = User::role('pegawai')->get();
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
        $pegawai->id_pendidikan = $request->pendidikan;
        $pegawai->id_golongan = $request->golongan;
        $pegawai->id_status = $request->status;
        $pegawai->foto = $request->foto;
        $pegawai->no_hp = $request->no_hp;
        $pegawai->save();

        return redirect ()->route('admin/pegawai/index');

    }

    public function simpan_pegawai(Request $request){
        // return $request;

        $file = $request->file('foto');
        $lokasi_foto = $file->store('foto');

        $pegawai =User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
            'nip' =>$request->nip,
            'namap'=>$request->namap,
            'tempat_lahir' =>$request->tempat_lahir,
            'tanggal_lahir' =>$request->tanggal_lahir,
            'alamat' =>$request->alamat,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'id_agama'=>$request->agama,
            'id_pendidikan'=>$request->pendidikan,
            'id_golongan'=>$request->golongan,
            'id_status' => $request->status,
            'foto' =>$lokasi_foto,
            'no_hp' =>$request->no_hp,

        ]);

        $pegawai->assignRole('pegawai');
        return redirect()->route('admin/pegawai/index');
    }

    public function edit($id){
        $daftar_agama = Agama::all();
        $daftar_pendidikan = Pendidikan::all();
        $daftar_golongan = Golongan::all();
        $daftar_keluarga = Keluarga::all();
        $pegawai = User::find($id);
        return view('admin.pegawai.edit', compact('pegawai'))
        ->with('daftar_agama', $daftar_agama)
        ->with('daftar_pendidikan', $daftar_pendidikan)
        ->with('daftar_golongan', $daftar_golongan)
        ->with('daftar_keluarga', $daftar_keluarga);
    }

    public function simpan_edit(Request $request, $id){
        if ($request->hasFile('foto'))
        {
        $file = $request->file('foto');
        $lokasi_foto = $file->store('foto');
        }
        $pegawai = User::find($id);
        $pegawai->name= $request->name;
        $pegawai->email= $request->email;
        $pegawai->nip = $request ->nip;
        $pegawai->tempat_lahir = $request->tempat_lahir;
        $pegawai->tanggal_lahir = $request->tanggal_lahir;
        $pegawai->alamat = $request->alamat;
        $pegawai->jenis_kelamin = $request->jenis_kelamin;
        $pegawai->id_agama = $request->id_agama;
        $pegawai->id_pendidikan = $request->id_pendidikan;
        $pegawai->id_golongan = $request->id_golongan;
        $pegawai->id_status = $request->id_status;
        if ($request->hasFile('foto')){$pegawai->foto = $lokasi_foto;}
        $pegawai->no_hp = $request->no_hp;
        $pegawai -> save();


        return redirect ('admin/pegawai/index')->with('update', 'data berhasil di update');
    }

    public function hapus($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin/pegawai/index');
    }









}


