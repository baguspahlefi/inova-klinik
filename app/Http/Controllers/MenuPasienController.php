<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuPasien;
use App\Models\User;
use App\Models\MasterWilayah;
use App\Models\MenuTindakDanObat;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class MenuPasienController extends Controller
{
    public function index(){
        $item = MenuPasien::all();
        $user_item = User::all();
        $wilayah_item = MasterWilayah::all();
        return view('pages/menu_pasien/index',
    [
        'item'=>$item,
        'user_item'=>$user_item,
        'wilayah_item'=>$wilayah_item
    ]);
    }

    public function create(){
        $user_item = User::all();
        $wilayah_item = MasterWilayah::all();
        return view('pages/menu_pasien/create',[
            'user_item' => $user_item,
            'wilayah_item' => $wilayah_item
        ]);
    }

    public function store(Request $request){
        $data = $request->all();
        MenuPasien::create($data);
        MenuTindakDanObat::create(
            [
                'NIK'=>$request->NIK,
                'nama_pasien'=>$request->nama_pasien,
                'no_phone'=>$request->no_phone,
                'tanggal_lahir'=>$request->tanggal_lahir,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'keluhan'=>$request->keluhan,
                'pegawai_id'=>$request->pegawai_id,
                'wilayah_id'=>$request->wilayah_id
            ]
        );
        return redirect()->route('menu_pasien');
    }
}
