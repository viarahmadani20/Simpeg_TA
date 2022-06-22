<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login () {
        return view('admin.auth.login');
     }

     public function registrasi () {
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

     public function logout(Request $request){
         Auth::logout();

         $request->session()->invalidate();
         $request->session()->regenerateToken();

         return redirect('admin/auth.login');
     }

     public function simpan_login(Request $request){

        $credentials = [
            "email" => $request->email,
            "password" => $request->password
            ];

            if (Auth::attempt($credentials)) {

                $request->session()->regenerate();

                $user = auth()->user();

                if ($user ->hasRole('admin')){
                    return redirect()->route('admin/admin/tampil');
                }

                else if ($user->hasRole('guru')){
                    return redirect()->route('admin/guru/tampil');

                }

                else if($user->hasRole('pegawai'))

                return redirect()->route('admin/pegawai/tampil');

            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }



}
