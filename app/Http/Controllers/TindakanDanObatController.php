<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\User;
use App\Models\MasterWilayah;
use App\Models\MasterTindakan;
use App\Models\MasterObat;

class TindakanDanObatController extends Controller
{
    public function index(){
        $items = Pasien::all();
        
        return view ('pages/tindakan_dan_obat/index',
    [
        'items'=>$items
    ]);
    }

    public function edit($id){
        $item = Pasien::findOrFail($id);
        $tindakan_item = MasterTindakan::all();
        $obat_item = MasterObat::all();
   
        return view ('pages/tindakan_dan_obat/tindakan',[
            'item' => $item,
            'tindakan_item' => $tindakan_item,
            'obat_item'=>$obat_item
        ]);
    }

    public function update(Request $request , $id){
        $item = Pasien::findOrFail($id);
        $data = $request->all();
        $item->status_tindakan = "sudah";
       
        $item->update($data);
        
        return redirect()->back();
    }

    public function pembayaran($id){
        $item = Pasien::findOrFail($id);
        $item->total_tagihan =  $item->masterobat_tabel->harga * $item->jumlah_obat + $item->mastertindakan_tabel->tarif ;
        $item->update();

        return redirect()->route('tagihan.show',$item->id);
        
    }

    public function destroy($id)
    {
        $item = Pasien::findOrFail($id);
        $item->delete();
        sleep(1);
        return redirect()->route('menu_tindakan_dan_obat');
    }
}
