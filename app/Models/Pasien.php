<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $primaryKey = 'id';

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
        'jumlah_obat',
        'keterangan_obat',
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

    public function masterobat_tabel(){
        return $this->belongsTo(MasterObat::class,'obat_id');
    }

    public function mastertindakan_tabel(){
        return $this->belongsTo(MasterTindakan::class,'tindakan_id');
    }

    public function scopeFirstCal($query){
        return $query
        ->where('date_format(pasien.created_at, "%M")', '=', '"October"')
        ->groupBy('date_format(pasien.created_at, "%M")')
        ->addSelect(DB::raw('COUNT(id) as data_october', 'date_format(created_at, "%M") as month_name'));
    }

    public function scopeJanuaryCal($query){
        return $query
        ->whereBetween('created_at', [date('2022-01-01'), date('2022-01-31')])
        ->count();
    }

    public function scopeFebruaryCal($query){
        return $query
        ->whereBetween('created_at', [date('2022-02-01'), date('2022-02-28')])
        ->count();
    }

    public function scopeMarchCal($query){
        return $query
        ->whereBetween('created_at', [date('2022-03-01'), date('2022-03-31')])
        ->count();
    }

    public function scopeAprilCal($query){
        return $query
        ->whereBetween('created_at', [date('2022-04-01'), date('2022-04-30')])
        ->count();
    }

    public function scopeMayCal($query){
        return $query
        ->whereBetween('created_at', [date('2022-05-01'), date('2022-05-31')])
        ->count();
    }

    public function scopeJuneCal($query){
        return $query
        ->whereBetween('created_at', [date('2022-06-01'), date('2022-06-30')])
        ->count();
    }

    public function scopeJulyCal($query){
        return $query
        ->whereBetween('created_at', [date('2022-07-01'), date('2022-07-31')])
        ->count();
    }

    public function scopeAugustCal($query){
        return $query
        ->whereBetween('created_at', [date('2022-08-01'), date('2022-08-31')])
        ->count();
    }

    public function scopeSeptemberCal($query){
        return $query
        ->whereBetween('created_at', [date('2022-09-01'), date('2022-09-30')])
        ->count();
    }

    public function scopeOctoberCal($query){
        return $query
        ->whereBetween('created_at', [date('2022-10-01'), date('2022-10-31')])
        ->count();
    }

    public function scopeNovemberCal($query){
        return $query
        ->whereBetween('created_at', [date('2022-11-01'), date('2022-11-30')])
        ->count();
    }

    public function scopeDesemberCal($query){
        return $query
        ->whereBetween('created_at', [date('2022-12-01'), date('2022-12-31')])
        ->count();
    }




    
    public function scopeTagihanJan($query){
        return $query
        ->whereBetween('created_at', [date('2022-01-01'), date('2022-01-31')])
        ->sum('total_tagihan');
    }

    public function scopeTagihanFeb($query){
        return $query
        ->whereBetween('created_at', [date('2022-02-01'), date('2022-02-28')])
        ->sum('total_tagihan');
    }

    public function scopeTagihanMar($query){
        return $query
        ->whereBetween('created_at', [date('2022-03-01'), date('2022-03-31')])
        ->sum('total_tagihan');
    }

    public function scopeTagihanApr($query){
        return $query
        ->whereBetween('created_at', [date('2022-04-01'), date('2022-04-30')])
        ->sum('total_tagihan');
    }

    public function scopeTagihanMay($query){
        return $query
        ->whereBetween('created_at', [date('2022-05-01'), date('2022-05-31')])
        ->sum('total_tagihan');
    }

    public function scopeTagihanJun($query){
        return $query
        ->whereBetween('created_at', [date('2022-06-01'), date('2022-06-30')])
        ->sum('total_tagihan');
    }

    public function scopeTagihanJul($query){
        return $query
        ->whereBetween('created_at', [date('2022-07-01'), date('2022-07-31')])
        ->sum('total_tagihan');
    }

    public function scopeTagihanAug($query){
        return $query
        ->whereBetween('created_at', [date('2022-08-01'), date('2022-08-31')])
        ->sum('total_tagihan');
    }

    public function scopeTagihanSep($query){
        return $query
        ->whereBetween('created_at', [date('2022-09-01'), date('2022-09-30')])
        ->sum('total_tagihan');
    }

    public function scopeTagihanOct($query){
        return $query
        ->whereBetween('created_at', [date('2022-10-01'), date('2022-10-31')])
        ->sum('total_tagihan');
    }

    public function scopeTagihanNov($query){
        return $query
        ->whereBetween('created_at', [date('2022-11-01'), date('2022-11-30')])
        ->sum('total_tagihan');
    }

    public function scopeTagihanDes($query){
        return $query
        ->whereBetween('created_at', [date('2022-12-01'), date('2022-12-31')])
        ->sum('total_tagihan');
    }
    
}
