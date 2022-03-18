<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function admin_index(){
        return view('admin.managemen_admin.index');
    }

    public function admin_add(){
        return view ('admin.managemen_admin.add');
    }

    public function pegawaiuser_index(){
        return view('admin.pegawai.index');
    }

    public function pegawaiuser_add(){
        return view ('admin.pegawai.add');
    }

    public function guruuser_index(){
        return view('admin.guru.index');
    }

    public function guruuser_add(){
        return view ('admin.guru.add');
    }


}
