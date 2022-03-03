<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function tampil(){
        return view ('pegawai.tampil');
    }

    public function add(){
        return view ('pegawai.add');
    }

    public function index(){
        //return "X";
        return view('pegawai.index');
    }
}

