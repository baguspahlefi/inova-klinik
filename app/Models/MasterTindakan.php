<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterTindakan extends Model
{
    use HasFactory;
    
    protected $table = 'master_tindakan';
    protected $primaryKey = 'tindakan_id';

    protected $fillable = [
        'nama_tindakan','tarif'
    ];

    public function menutindakandanobat()
	{
		return $this->hasMany(MenuTindakanDanObat::class, 'tindakan_id');
	}

    public function tagihan()
	{
		return $this->hasMany(Tagihan::class, 'tindakan_id');
	}
}
