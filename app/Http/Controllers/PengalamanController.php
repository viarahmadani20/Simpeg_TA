<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengalamanController extends Controller
{ 
    public function index ()
    {
        return view ("Pengalaman.tampil");
    }

    public function add ()
    {
        return view ("Pengalaman.add");
    }
}

