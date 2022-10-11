<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\User;
use App\Models\MasterWilayah;
use App\Models\MasterTindakan;
use App\Models\MasterObat;
use Illuminate\Support\Facades\DB;

class MenuPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $item = Pasien::all();

        return view('pages/menu_pasien/index',
        [
            'item'=>$item,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user_item = User::all();
        $wilayah_item = MasterWilayah::all();
        return view('pages/menu_pasien/create',[
            'user_item' => $user_item,
            'wilayah_item' => $wilayah_item
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Pasien::create($data);

        return redirect()->route('menu_pasien');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Pasien::findOrFail($id);
        $tindakan_item = MasterTindakan::all();
        $obat_item = MasterObat::all();
        $user_item = User::all();
        $wilayah_item = MasterWilayah::all();

   
        return view ('pages/menu_pasien/edit',[
            'item' => $item,
            'tindakan_item' => $tindakan_item,
            'obat_item'=>$obat_item,
            'user_item'=>$user_item,
            'wilayah_item'=>$wilayah_item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Pasien::findOrFail($id);
        $data = $request->all();

        $item->update($data);
        return redirect()->route('menu_pasien');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Pasien::findOrFail($id);
        $item->delete();
        sleep(1);
        return redirect()->route('menu_pasien');
    }
}
