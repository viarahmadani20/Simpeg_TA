<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    protected $table = 'keluarga';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];
}
