<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tagihan extends Model
{
    use HasFactory;
    protected $table = 'tagihan';
    protected $primaryKey = 'tagihan_id';

    protected $fillable = [
        'NIK',
        'nama_pasien',
        'no_phone',
        'tanggal_lahir',
        'jenis_kelamin',
        'keluhan',
        'pegawai_id',
        'wilayah_id',
        'tindakan_id',
        'obat_id',
        'status_tindakan',
        'total_tagihan',
        'status_pembayaran'
    ];

    public function masterwilayah_tabel()
	{
		return $this->belongsTo(MasterWilayah::class, 'wilayah_id');
	}

    public function user_tabel()
	{
		return $this->belongsTo(User::class, 'pegawai_id');
	}
}
