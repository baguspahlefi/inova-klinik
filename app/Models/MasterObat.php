<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterObat extends Model
{
    use HasFactory;
    protected $table = 'master_obat';
    protected $primaryKey = 'obat_id';

    protected $fillable = [
        'nama_obat','satuan','jumlah_obat','harga'
    ];

    public function menutindakandanobat()
	{
		return $this->hasMany(MasterObat::class, 'obat_id');
	}

    public function tagihan_tabel()
	{
		return $this->hasMany(Tagihan::class, 'obat_id');
	}
}
