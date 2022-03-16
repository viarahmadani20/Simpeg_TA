<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    public function index(){
        return view ('pendidikan.tampil');
    }

    public function add(){
        return view ('pendidikan.add');
    }

    public function simpan_pendidikan(Request $request){
        $pendidikan = Pendidikan::create([
            'nama'
        ]);
    }
}
