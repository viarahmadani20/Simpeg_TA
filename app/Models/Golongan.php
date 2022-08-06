<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    protected $table ="golongan";
    protected $primaryKey = "id";
    protected $fillable = ['nama_golongan'];

    public function pegawai(){
        return $this->hasMany(
            Pegawai::class,
            'id',
            'id_golongan'
        );
    }

    public function guru(){
        return $this->hasMany(
            Guru::class,
            'id',
            'id_golongan'
        );
    }
    public function user(){
        return $this->hasMany(
            User::class,
            'id',
            'id_golongan'
        );
    }
}
