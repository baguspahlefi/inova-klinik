<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'NIP',
        'name',
        'email',
        'password',
        'wilayah_id',
        'status'
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


    public function masterwilayah_tabel()
	{
		return $this->belongsTo(MasterWilayah::class, 'wilayah_id');
	}

    public function menupasien_tabel()
	{
		return $this->hasMany(MenuPasien::class, 'pasien_id');
	}

    public function menutindakandanobat()
	{
		return $this->hasMany(MenuTindakanDanObat::class, 'tdo_id');
	}

    public function tagihan_tabel()
	{
		return $this->hasMany(Tagihan::class, 'tagihan_id');
	}
}
