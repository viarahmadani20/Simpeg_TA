<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgamaController extends Controller
{
    public function index () {
        return view ('agama.tampil');
    }

    public function add (){
        return view ('agama.add');
    }


}
