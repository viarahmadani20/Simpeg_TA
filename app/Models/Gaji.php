<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gaji extends Model
{
    protected $table = "gaji";
    protected $primaryKey = "id_gaji";
    protected $fillable = [
        'bulan',
        'gaji_pkk',
        'tunjangan_umum',
        'tmb_tunjangan_umum',
        'tunjangan_struk',
        'tunjangan_fungsi',
        'tunjangan_beras',
        'tunjangan_pph',
        'potongan_bpjs',
        'potongan_pensiun',
        'potongan_ll',
        'potongan_beras',
        'potongan_cp',
        'potongan_pph',
        'gaji_diterima',
    ];

    public function pengguna(){
        return $this->belongsTo(
            User::class,
            'id_user',
            'id'
        );
    }
}
