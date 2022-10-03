<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterWilayah;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class MasterWilayahController extends Controller
{
    public function index(){
        $items = MasterWilayah::all();
        return view('pages/master_wilayah/index',
    [
        'items' => $items
    ]);
    }

    public function create(){
        return view('pages/master_wilayah/create');
    }

    public function store(Request $request){
        $data = $request->all();
        MasterWilayah::create($data);
        return redirect()->route('master_wilayah');
    }

    public function edit($wilayah_id)
    {
        $item = MasterWilayah::findOrFail($wilayah_id);
        $master_wilayah = Masterwilayah::all();
        return view ('pages.master_wilayah.edit',[
            'item' => $item
        ]);
    }

    public function update(Request $request, $wilayah_id)
    {
        $data = $request->all();

        $item = MasterWilayah::findOrFail($wilayah_id);
        $item->update($data);
        return redirect()->route('master_wilayah');
    }

    public function destroy($wilayah_id)
    {
        $item = MasterWilayah::findOrFail($wilayah_id);
        $item->delete();
        sleep(1);
        return redirect()->route('master_wilayah');
    }
}
