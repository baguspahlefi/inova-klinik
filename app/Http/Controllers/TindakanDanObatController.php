<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuTindakDanObat;
use App\Models\User;
use App\Models\MasterWilayah;
use App\Models\MasterTindakan;
use App\Models\MasterObat;
use App\Models\Tagihan;

class TindakanDanObatController extends Controller
{
    public function index(){
        $items = MenuTindakDanObat::all();
        
        return view ('pages/tindakan_dan_obat/index',
    [
        'items'=>$items
    ]);
    }

    public function edit($tdo_id){
        $item = MenuTindakDanObat::findOrFail($tdo_id);
        $tindakan_item = MasterTindakan::all();
        $obat_item = MasterObat::all();
   
        return view ('pages/tindakan_dan_obat/tindakan',[
            'item' => $item,
            'tindakan_item' => $tindakan_item,
            'obat_item'=>$obat_item
        ]);
    }

    public function update(Request $request , $tdo_id){
        $data = $request->all();

        $item = MenuTindakDanObat::findOrFail($tdo_id);
        $item->update($data);

        Tagihan::create(
            [
                'NIK'=>$request->NIK,
                'nama_pasien'=>$request->nama_pasien,
                'no_phone'=>$request->no_phone,
                'tanggal_lahir'=>$request->tanggal_lahir,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'keluhan'=>$request->keluhan,
                'pegawai_id'=>$request->pegawai_id,
                'wilayah_id'=>$request->wilayah_id,
                'tindakan_id'=>$request->tindakan_id,
                'obat_id'=>$request->obat_id,
                'status_tindakan'=>$request->status_tindakan,
                'total_tagihan'=>$request->total_tagihan,
                'status_pembayaran'=>$request->status_pembayaran,
            ]
        );
        
        return redirect()->route('menu_tindakan_dan_obat');
    }

    public function destroy($tdo_id)
    {
        $item = MenuTindakDanObat::findOrFail($tdo_id);
        $item->delete();
        sleep(1);
        return redirect()->route('menu_tindakan_dan_obat');
    }
}
