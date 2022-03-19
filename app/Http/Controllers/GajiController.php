<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function index(){
        return view('gaji.tampil');
    }

    public function add(){
        return view ('gaji.add');
    }
}
