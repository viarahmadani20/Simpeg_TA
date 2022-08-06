<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Guru;
use App\Models\Agama;
use App\Models\Golongan;
use App\Models\Keluarga;
use App\Models\User;
use App\Models\Pendidikan;
use Illuminate\Support\Facades\Hash;



class GuruController extends Controller
{
    public function index(){
        $daftar_guru = User::role('guru')->get();
        return view ('admin.guru.index', compact([
            'daftar_guru'
        ]));
    }

    public function showa(User $guru){
        return view ('admin/guru/show ',[
            'user' =>$guru,
        ]);
    }

    public function add(){
        $daftar_agama= Agama::all();
        $daftar_pendidikan= Pendidikan::all();
        $daftar_golongan = Golongan::all();
        $daftar_keluarga = Keluarga::all();
        return view ('admin.guru.add')
            ->with('daftar_agama', $daftar_agama)
            ->with('daftar_pendidikan', $daftar_pendidikan)
            ->with('daftar_golongan', $daftar_golongan)
            ->with('daftar_keluarga', $daftar_keluarga);
    }

    public function simpan_guru(Request $request){
        // return $request;
        $file = $request->file('foto');
        $lokasi_foto = $file->store('foto');

        $guru =User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
            'nip' =>$request->nip,
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

        $guru->assignRole('guru');

        return redirect()->route('admin/guru/index');
    }

    public function edit($id){
        $daftar_agama = Agama::all();
        $daftar_pendidikan = Pendidikan::all();
        $daftar_golongan = Golongan::all();
        $daftar_keluarga = Keluarga::all();
        $guru = User::find($id);
        return view('admin.guru.edit', compact('guru'))
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
        $guru = User::find($id);
        $guru->name= $request->name;
        $guru->email= $request->email;
        $guru->nip = $request ->nip;
        $guru->tempat_lahir = $request->tempat_lahir;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->alamat = $request->alamat;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        $guru->id_agama = $request->id_agama;
        $guru->id_pendidikan = $request->id_pendidikan;
        $guru->id_golongan = $request->id_golongan;
        $guru->id_status = $request->id_status;
        if ($request->hasFile('foto')){$guru->foto = $lokasi_foto;}
        $guru->no_hp = $request->no_hp;
        $guru -> save();

        return redirect ('admin/guru/index')->with('update', 'data berhasil di update');
    }

    public function hapus($id){
        $guru = User::find($id);
        $guru->delete();

        return redirect()->route('admin/guru/index');
    }


    //Guru

    // public function indexg(){
    //     $pengguna = auth()->user();

    //     $daftar_guru = $pengguna->guru;

    //     return view('guru/guru/index', [
    //         'daftar_guru' => $daftar_guru
    //     ]);

    // }


    // public function editg($id){
    //     $daftar_agama = Agama::all();
    //     $daftar_pendidikan = Pendidikan::all();
    //     $daftar_golongan = Golongan::all();
    //     $daftar_keluarga = Keluarga::all();
    //     $guru = guru::find($id);
    //     return view('guru.guru.edit', compact('guru'))
    //     ->with('daftar_agama', $daftar_agama)
    //     ->with('daftar_pendidikan', $daftar_pendidikan)
    //     ->with('daftar_golongan', $daftar_golongan)
    //     ->with('daftar_keluarga', $daftar_keluarga);
    // }

    // public function simpan_editg(Request $request, $id){
    //     $guru = Guru::find($id);
    //     $guru->nip = $request ->nip;
    //     $guru->namap = $request->namap;
    //     $guru->tempat_lahir = $request->tempat_lahir;
    //     $guru->tanggal_lahir = $request->tanggal_lahir;
    //     $guru->alamat = $request->alamat;
    //     $guru->jenis_kelamin = $request->jenis_kelamin;
    //     $guru->id_agama = $request->id_agama;
    //     $guru->id_pendidikan = $request->id_pendidikan;
    //     $guru->id_golongan = $request->id_golongan;
    //     $guru->id_status = $request->id_status;
    //     $guru->foto = $request->foto;
    //     $guru->no_hp = $request->no_hp;
    //     $guru -> save();

    //     return redirect ('guru/guru/index')->with('update', 'data berhasil di update');
    // }

    // public function showg(Guru $guru){
    //     return view ('guru/guru/show ',[
    //         'guru' =>$guru,
    //     ]);
    // }




}
