<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterWilayah extends Model
{
    use HasFactory;

    protected $table = 'master_wilayah';
    protected $primaryKey = 'wilayah_id';

    protected $fillable = [
        'nama_wilayah'
    ];

    public function user_tabels()
	{
		return $this->hasMany(User::class, 'wilayah_id');
	}

    public function menupasien_tabel()
	{
		return $this->hasMany(MenuPasien::class, 'wilayah_id');
	}

    public function menutindakandanobat_tabel()
	{
		return $this->hasMany(MenuTindakDanObat::class, 'wilayah_id');
	}
    public function tagihan_tabel()
	{
		return $this->hasMany(Tagihan::class, 'wilayah_id');
	}
}
