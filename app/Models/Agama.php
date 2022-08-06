<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
// use Pegawai;

class Agama extends Model
{

    protected $table = "agama";
    protected $primaryKey = "id";
    protected $fillable = [
        'nama_agama'
    ];

    public function pegawai(){
        return $this->hasMany(
            Pegawai::class,
            'id',
            'id_agama'
        );
    }

    public function guru(){
        return $this->hasMany(
            Guru::class,
            'id',
            'id_agama'
        );
    }

    public function user(){
        return $this->hasMany(
            User::class,
            'id',
            'id_agama'
        );
    }
}
