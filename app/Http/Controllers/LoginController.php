<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login () {
        return view('auth.login');
     }

     public function registrasi () {
        return view('auth.registrasi');
     }

    //  public function login(Request $request){

    // $credentials = [
    //     "email" => $request->email,
    //     "password" => $request->password
    //     ];

    //     if (Auth::attempt($credentials)) {

    //         $request->session()->regenerate();


    //         return redirect()->intended('dashboard');

    //     }



    //     return back()->withErrors([
    //         'email' => 'The provided credentials do not match our records.',
    //     ]);
    //  }

    //  public function logout(Request $request){
    //      Auth::logout();

    //      $request->session()->invalidate();
    //      $request->session()->regenerateToken();

    //      return redirect('/');
    //  }


}
