<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuTindakDanObat extends Model
{
    use HasFactory;
    protected $table = 'tindakan_dan_obat';
    protected $primaryKey = 'tdo_id';

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
        'total_tagihan'
    ];


    public function masterwilayah_tabel()
	{
		return $this->belongsTo(MasterWilayah::class, 'wilayah_id');
	}

    public function user_tabel()
	{
		return $this->belongsTo(User::class, 'pegawai_id');
	}

    public function mastertindakan_tabel()
	{
		return $this->belongsTo(MasterTindakan::class, 'tindakan_id');
	}

    public function masterobat_tabel()
	{
		return $this->belongsTo(MasterObat::class, 'obat_id');
	}
    
}
