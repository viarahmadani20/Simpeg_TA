<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login () {
        return view('auth.login');
     }

     public function registrasi () {
        return view('auth.registrasi');
     }

     public function registrasi_simpan (Request $request){

    $credentials = [
        "name" => $request->name,
        "email" => $request->email,
        "password" => $request->password,
        "confirm_password" => $request->confirm_password
        ];

        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();


            return redirect()->intended('pegawai.tampil');

        }



        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
     }

     public function logout(Request $request){
         Auth::logout();

         $request->session()->invalidate();
         $request->session()->regenerateToken();

         return redirect('/');
     }


}
