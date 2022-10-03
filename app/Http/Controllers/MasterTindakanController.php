<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterTindakan;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class MasterTindakanController extends Controller
{
    public function index(){
        $items = MasterTindakan::all();
        return view('pages/master_tindakan/index',
        ['items' => $items]);
    }

    public function create(){
        return view('pages/master_tindakan/create');
    }

    public function store(Request $request){
        $data = $request->all();
        MasterTindakan::create($data);
        return redirect()->route('master_tindakan');
    }

    public function edit($tindakan_id){
        $item = MasterTindakan::findOrFail($tindakan_id);
        $master_tindakan = MasterTindakan::all();
        return view ('pages.master_tindakan.edit',[
            'item' => $item
        ]);
    }

    public function update(Request $request , $tindakan_id){
        $data = $request->all();

        $item = MasterTindakan::findOrFail($tindakan_id);
        $item->update($data);
        return redirect()->route('master_tindakan');
    }

    public function destroy($tindakan_id)
    {
        $item = MasterTindakan::findOrFail($tindakan_id);
        $item->delete();
        sleep(1);
        return redirect()->route('master_tindakan');
    }
}
