<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function index(){
        return view ('pendidikan.tampil');
    }

    public function add(){
        return view ('pendidikan.add');
    }
}
