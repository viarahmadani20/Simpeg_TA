<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Agama;
use App\Models\Golongan;
use App\Models\Keluarga;
use App\Models\Pendidikan;


use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $daftar_user = User::all();
        return view('admin.user.index', compact(
            [
                'daftar_user'
            ]
        ));
    }

    public function simpan_user(Request $request){
        $file = $request->file('foto');
        $lokasi_foto = $file->store('foto', ['disk' => 'upload']);
        $user = User::create([
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

        $user->assignRole($request->sebagai);
        return redirect()->route('admin/user');
    }

    public function add(){
        $role = Role::all();
        $daftar_agama= Agama::all();
        $daftar_pendidikan= Pendidikan::all();
        $daftar_golongan = Golongan::all();
        $daftar_keluarga = Keluarga::all();
        return view('admin.user.add',compact('role', 'daftar_agama', 'daftar_pendidikan', 'daftar_golongan', 'daftar_keluarga'));

    }

    public function edit ($id){
        $user = User::find($id);
        $role = Role::all();
        $daftar_agama = Agama::all();
        $daftar_pendidikan = Pendidikan::all();
        $daftar_golongan = Golongan::all();
        $daftar_keluarga = Keluarga::all();
        return view ('admin/user/edit', compact('user', 'role', 'daftar_agama', 'daftar_pendidikan', 'daftar_golongan', 'daftar_keluarga'));
    }


    public function simpan_upuser(Request $request, $id){

        $request->validate([
            'name'   => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255',
            'sebagai' =>'required|max:255',
            //harus diisi 255 huruf
        ]);

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $lokasi_foto = $file->store('foto', ['disk' => 'upload']);
        }

        $user= User::find($id);
        $user->name= $request->name;
        $user->email= $request->email;
        $user->password=Hash::make($request->password);
        $user->nip = $request ->nip;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->alamat = $request->alamat;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->id_agama = $request->id_agama;
        $user->id_pendidikan = $request->id_pendidikan;
        $user->id_golongan = $request->id_golongan;
        $user->id_status = $request->id_status;
        if ($request->hasFile('foto')){$user->foto = $lokasi_foto; }
        $user->no_hp = $request->no_hp;
        $user->save();

        $user->syncRoles($request->sebagai);

        return redirect()->route('admin/user');
    }

    public function hapus($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin/user');
    }





}
