<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table = "pendidikan";
    protected $primaryKey = "id_pendidikan";
    protected $fillable = [
        'tahun_pendidikan',
        'nama_pendidikan',

    ];

    public function pegawai(){
        return $this->hasMany(
            Pegawai::class,
            'id_pendidikan',
            'id_pendidikan'
        );
    }

    public function guru(){
        return $this->hasMany(
            Guru::class,
            'id_pendidikan',
            'id_pendidikan'
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

