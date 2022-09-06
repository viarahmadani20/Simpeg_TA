<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Surat extends Model
{
    protected $table ='surat';
    protected $primaryKey = 'id_surat';
    protected $fillable = [
        'nama_surat',
        'keterangan'
    ];

    public function pengguna(){
        return $this->belongsTo(
            User::class,
            'id_user',
            'id'
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
