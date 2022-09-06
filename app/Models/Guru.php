<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Agama;
use App\Models\Golongan;
use App\Models\Keluarga;
use App\Models\pendidikan;

class Guru extends Model
{
    protected $table = "guru";
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

    public function pendidikan(){

        return $this->belongsTo(
            Pendidikan::class,
            'id_pendidikan',
            'id_pendidikan'
        );
    }
    public function scopeWhereLike($query, $column, $value)
    {
        return $query->where($column, 'like', '%'.$value.'%');
    }
    public function scopeOrWhereLike($query, $column, $value)
    {
        return $query->orWhere($column, 'like', '%'.$value.'%');
    }
}
