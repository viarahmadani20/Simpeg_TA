<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' =>'via',
            'email' =>'via@gmail.com',
            'password' => Hash::make('viacantik')

        ]);

        $pegawai = User::create([
            'name' =>'rahma',
            'email' =>'rahma@gmail.com',
            'password' => Hash::make('rahmacantik')

        ]);

        $guru = User::create([
            'name' =>'dani',
            'email' =>'dani@gmail.com',
            'password' => Hash::make('danicantik')

        ]);



        $admin->assignRole('admin');
        $pegawai->assignRole('pegawai');
        $guru->assignRole('guru');
    }
}
