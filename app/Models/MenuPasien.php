<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuPasien extends Model
{
    use HasFactory;
    protected $table = 'menu_pasien';
    protected $primaryKey = 'pasiend_id';

    protected $fillable = [
        'NIK','nama_pasien','no_phone','tanggal_lahir','jenis_kelamin','keluhan','pegawai_id','wilayah_id'
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
