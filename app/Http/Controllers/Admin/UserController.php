<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $daftar_user = User::all();
        return view('admin.user.index', compact(
            [
                'daftar_user'
            ]
        ));
    }

    public function simpan_user(Request $request){
        $user = User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
            'sebagai' =>$request->sebagai,
        ]);

        $user->assignRole($request->sebagai);
        return redirect()->route('admin/user');
    }

    public function add(){
        $role = Role::all();
        return view('admin.user.add',compact('role'));

    }

    public function edit ($id){
        $user = User::find($id);
        $role = Role::all();
        return view ('admin/user/edit', compact('user', 'role'));
    }


    public function simpan_upuser(Request $request, $id){

        $request->validate([
            'name'   => 'required|max:255',
            'email' => 'required|max:255',
            'password' => 'required|max:255',
            'sebagai' =>'required|max:255',
            //harus diisi 255 huruf
        ]);

        $user= User::find($id);
        $user->name= $request->name;
        $user->email= $request->email;
        $user->password= $request->password;
        $user->sebagai = $request->sebagai;
        $user->save();

        return redirect()->route('admin/user');
    }

    public function hapus($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin/user');
    }





}
