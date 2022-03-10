<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function admin_index(){
        return view('admin.index');
    }

    public function admin_add(){
        return view ('admin.add');
    }
}
