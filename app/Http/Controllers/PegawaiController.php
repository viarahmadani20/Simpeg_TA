<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        return view ('pegawai.tampil');
    }

    public function add(){
        return view ('pegawai.add');
    }
}

