<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\MasterWilayah;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class MasterPegawaiController extends Controller
{
    public function index(){
        $items = User::all();
        $master_wilayah = MasterWilayah::all();
        return view('pages/master_pegawai/index',
        [
            'items'=>$items,
            'master_wilayah'=>$master_wilayah
        ]);
    }


    public function create(){
        $wilayah_item = MasterWilayah::all();
        return view('pages/master_pegawai/create',[
            'wilayah_item' => $wilayah_item
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'NIP' => 'required|max:12|unique:users',
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|unique:users',
            'status' => 'required',
            'password' => 'required|min:5|max:255',
            'wilayah_id' => 'required'
        ]);

        // hash
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect()->route('master_pegawai');
    }

    public function edit($id){
        $item = User::findOrFail($id);
        $user = User::all();
        $wilayah_item = MasterWilayah::all();
        return view ('pages.master_pegawai.edit',[
            'item' => $item,
            'wilayah_item' => $wilayah_item
        ]);
    }

    public function update(Request $request, $id)
    {

        $data = $request->all();

        $data['password'] = Hash::make($data['password']);
        $item = User::findOrFail($id);
        $item->update($data);
        return redirect()->route('master_pegawai');
    }

    public function destroy($id)
    {
        $item = User::findOrFail($id);
        $item->delete();
        sleep(1);
        return redirect()->route('master_pegawai');
    }
}
