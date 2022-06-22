<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable =
    ['name','guard_web'];
    public function user(){
        return $this->belongsTo(
            User::class,
            'sebagai',

        );
    }
}
