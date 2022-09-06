<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $table = "laporan";
    protected $primaryKey ="id_lap";
    protected $fillable = [
        'nama_laporan',
        'file'
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
