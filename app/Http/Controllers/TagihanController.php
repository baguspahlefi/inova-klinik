<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tagihan;

class TagihanController extends Controller
{
    public function index(){
        $item = Tagihan::all();
        
        return view('pages/tagihan/index',
        ['item' => $item]);
    }
}
