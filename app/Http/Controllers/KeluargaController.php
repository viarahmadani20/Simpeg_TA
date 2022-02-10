<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    public function index(){
        return view ('keluarga.tampil');
    }

    public function add(){
        return view ('keluarga.add');
    }
}
