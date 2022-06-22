<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Agama;
use App\Models\Golongan;
use App\Models\Keluarga;

class Pegawai extends Model
{
    protected $table = "pegawai";
    protected $primarykey = 'id';
    protected $guarded = ['id'];

    public function agama(){

        return $this->belongsTo(
            Agama::class,
            'id_agama',
            'id'
        );
    }

    public function golongan(){

        return $this->belongsTo(
            Golongan::class,
            'id_golongan',
            'id'
        );
    }

    public function status(){

        return $this->belongsTo(
            Keluarga::class,
            'id_status',
            'id'
        );
    }




}

