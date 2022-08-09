<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;
use App\Models\Agama;
use App\Models\Golongan;
use App\Models\Keluarga;
use App\Models\Pendidikan;


class LoginController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function registrasi()
    {
        return view('admin.auth.registrasi');
    }

    //  public function registrasi_simpan (Request $request){

    // $credentials = [
    //     "name" => $request->name,
    //     "email" => $request->email,
    //     "password" => $request->password,
    //     "confirm_password" => $request->confirm_password
    //     ];

    //     if (Auth::attempt($credentials)) {

    //         $request->session()->regenerate();


    //         return redirect()->intended('dasboard');

    //     }



    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ]);
    //  }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin/login');
    }

    public function simpan_login(Request $request)
    {

        $credentials = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            $user = auth()->user();

            //dd($user->load(['roles']));
            if ($user->hasRole('admin')){

                return redirect()->route('admin/dashboard');

            } else if ($user->hasRole('guru')){

                return redirect()->route('guru/dashboard');

            }
            else if($user->hasRole('pegawai')) {

                return redirect()->route('pegawai/dashboard');
            }

        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function profil(){
        return view ('profil/show');
    }

    public function edit($id){
        $user = auth()->user();
        $daftar_agama = Agama::all();
        $daftar_pendidikan = Pendidikan::all();
        $daftar_golongan = Golongan::all();
        $daftar_keluarga = Keluarga::all();
        return view('profil/edit', compact('user', 'daftar_agama', 'daftar_pendidikan', 'daftar_golongan', 'daftar_keluarga'));
    }

    public function simpan_edit(Request $request){
        if ($request->hasFile('foto'))
        {
        $file = $request->file('foto');
        $lokasi_foto = $file->store('foto', ['disk' => 'upload']);
        }
        $user = auth()->user();
        $user->name= $request->name;
        $user->email= $request->email;
        $user->password= $request->password;
        $user->nip = $request ->nip;
        $user->tempat_lahir = $request->tempat_lahir;
        $user->tanggal_lahir = $request->tanggal_lahir;
        $user->alamat = $request->alamat;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->id_agama = $request->id_agama;
        $user->id_pendidikan = $request->id_pendidikan;
        $user->id_golongan = $request->id_golongan;
        $user->id_status = $request->id_status;
        if ($request->hasFile('foto')){$user->foto = $lokasi_foto;}
        $user->no_hp = $request->no_hp;
        $user ->save();

        return view('profil.show');
    }
}
