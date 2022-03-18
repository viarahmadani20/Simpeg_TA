<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DarahController extends Controller
{
    public function index(){
        return view ('golongan.tampil');
    }

    public function add(){
        return view ('golongan.add');
    }
}
