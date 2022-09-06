<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    protected $table = 'keluarga';
    protected $primaryKey = 'id';
    protected $fillable = [
        'kodes',
        'nama_keluarga',
        'jmlhanak'
    ];

    public function pegawai(){
        return $this->hasMany(
            Pegawai::class,
            'id',
            'id_status'
        );
    }

    public function guru(){
        return $this->hasMany(
            Guru::class,
            'id',
            'id_status'
        );
    }
    public function user(){
        return $this->hasMany(
            User::class,
            'id',
            'id_status'
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
