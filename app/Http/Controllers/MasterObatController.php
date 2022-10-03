<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterObat;

class MasterObatController extends Controller
{
    public function index(){
        $items = MasterObat::all();
        return view('pages/master_obat/index',
        ['items' => $items]);
    }

    public function create(){
        return view('pages/master_obat/create');
    }

    public function store(Request $request){
        $data = $request->all();
        MasterObat::create($data);
        return redirect()->route('master_obat');
    }

    public function edit($obat_id){
        $item = MasterObat::findOrFail($obat_id);
        $master_obat = MasterObat::all();
        return view ('pages.master_obat.edit',[
            'item' => $item
        ]);
    }

    public function update(Request $request , $obat_id){
        $data = $request->all();

        $item = MasterObat::findOrFail($obat_id);
        $item->update($data);
        return redirect()->route('master_obat');
    }

    public function destroy($obat_id)
    {
        $item = MasterObat::findOrFail($obat_id);
        $item->delete();
        sleep(1);
        return redirect()->route('master_obat');
    }
}
