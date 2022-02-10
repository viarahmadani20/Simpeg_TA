<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NegaraController extends Controller
{
    public function index(){
        return view ('negara.tampil');
    }

    public function add(){
        return view ('negara.add');
    }
}
