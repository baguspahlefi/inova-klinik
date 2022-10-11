<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\User;
use App\Models\masterObat;
use App\Models\masterWilayah;
use App\Models\masterTindakan;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::all();
        $total_user = $user->count();
        $total_obat = MasterObat::count()-1;
        $total_wilayah = MasterWilayah::count();
        $total_tindakan = MasterTindakan::count()-1;
        
        $january_pasien = Pasien::JanuaryCal();
        $february_pasien = Pasien::FebruaryCal();
        $march_pasien = Pasien::MarchCal();
        $april_pasien = Pasien::AprilCal();
        $may_pasien = Pasien::MayCal();
        $june_pasien = Pasien::JuneCal();
        $july_pasien = Pasien::JulyCal();
        $august_pasien = Pasien::AugustCal();
        $september_pasien = Pasien::SeptemberCal();
        $october_pasien = Pasien::OctoberCal();
        $november_pasien = Pasien::NovemberCal();
        $desember_pasien = Pasien::DesemberCal();



        $january_tagihan = Pasien::Tagihanjan();
        $february_tagihan = Pasien::Tagihanfeb();
        $march_tagihan = Pasien::Tagihanmar();
        $april_tagihan = Pasien::Tagihanapr();
        $may_tagihan = Pasien::Tagihanmay();
        $june_tagihan = Pasien::Tagihanjun();
        $july_tagihan = Pasien::Tagihanjul();
        $august_tagihan = Pasien::Tagihanaug();
        $september_tagihan = Pasien::Tagihansep();
        $october_tagihan = Pasien::Tagihanoct();
        $november_tagihan = Pasien::Tagihannov();
        $desember_tagihan = Pasien::Tagihandes();


        return view('home',[
            'pegawai'=>$total_user,
            'obat' => $total_obat,
            'wilayah' => $total_wilayah,
            'tindakan' => $total_tindakan,
            'january_pasien'=> $january_pasien,
            'february_pasien'=> $february_pasien,
            'march_pasien'=> $march_pasien,
            'april_pasien'=> $april_pasien,
            'may_pasien'=> $may_pasien,
            'june_pasien'=> $june_pasien,
            'july_pasien'=> $july_pasien,
            'august_pasien'=> $august_pasien,
            'september_pasien'=> $september_pasien,
            'october_pasien'=>$october_pasien,
            'november_pasien'=>$november_pasien,
            'desember_pasien'=>$desember_pasien,


            'january_tagihan'=>$january_tagihan,
            'february_tagihan'=>$february_tagihan,
            'march_tagihan'=>$march_tagihan,
            'april_tagihan'=>$april_tagihan,
            'may_tagihan'=>$may_tagihan,
            'june_tagihan'=>$june_tagihan,
            'july_tagihan'=>$july_tagihan,
            'august_tagihan'=>$august_tagihan,
            'september_tagihan'=>$september_tagihan,
            'october_tagihan'=>$october_tagihan,
            'november_tagihan'=>$november_tagihan,
            'desember_tagihan'=>$desember_tagihan
            
        ]);
    }
}
