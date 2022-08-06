<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $table = "users";
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'email',
        'password',
        'sebagai',
        'nip',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'jenis_kelamin',
        'id_agama',
        'id_pendidikan',
        'id_golongan',
        'id_status',
        'foto',
        'no_hp'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // public function role(){

    //     return $this->hasMany(
    //         Role::class,
    //         'id'

    //     );
    // }

    public function surat(){
        return $this->hasMany(
            Surat::class,
            'id_user',
            'id'
        );
    }

    public function laporan(){
        return $this->hasMany(
            Laporan::class,
            'id_user',
            'id'
        );
    }

    public function gaji(){
        return $this->hasMany(
            Gaji::class,
            'id_user',
            'id'
        );
    }

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


}
