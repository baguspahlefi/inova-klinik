<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/master_wilayah', [App\Http\Controllers\MasterWilayahController::class, 'index'])
->middleware(['auth'])
->name('master_wilayah');
Route::get('/master_wilayah/tambah_wilayah', [App\Http\Controllers\MasterWilayahController::class, 'create'])
->middleware(['auth'])
->name('master_wilayah.create');
Route::post('/master_wilayah/tambah_wilayah/store', [App\Http\Controllers\MasterWilayahController::class, 'store'])
->middleware(['auth'])
->name('master_wilayah.store');
Route::get('/master_wilayah/tambah_wilayah/edit/{wilayah_id}', [App\Http\Controllers\MasterWilayahController::class, 'edit'])
->middleware(['auth'])
->name('master_wilayah.edit');
Route::put('/master_wilayah/tambah_wilayah/update/{wilayah_id}', [App\Http\Controllers\MasterWilayahController::class, 'update'])
->middleware(['auth'])
->name('master_wilayah.update');
Route::delete('/master_wilayah/tambah_wilayah/delete/{wilayah_id}', [App\Http\Controllers\MasterWilayahController::class, 'destroy'])
->middleware(['auth'])
->name('master_wilayah.destroy');


Route::get('/master_pegawai', [App\Http\Controllers\MasterPegawaiController::class, 'index'])
->middleware(['auth'])
->name('master_pegawai');
Route::get('/master_pegawai/tambah_pegawai', [App\Http\Controllers\MasterPegawaiController::class, 'create'])
->middleware(['auth'])
->name('master_pegawai.create');
Route::get('/master_pegawai/edit_pegawai/{id}', [App\Http\Controllers\MasterPegawaiController::class, 'edit'])
->middleware(['auth'])
->name('master_pegawai.edit');
Route::put('/master_pegawai/update_pegawai/{id}', [App\Http\Controllers\MasterPegawaiController::class, 'update'])
->middleware(['auth'])
->name('master_pegawai.update');
Route::delete('/master_pegawai/hapus_pegawai/{id}', [App\Http\Controllers\MasterPegawaiController::class, 'destroy'])
->middleware(['auth'])
->name('master_pegawai.destroy');

Route::get('/master_tindakan', [App\Http\Controllers\MasterTindakanController::class, 'index'])
->middleware(['auth'])
->name('master_tindakan');
Route::get('/master_tindakan/tambah_tindakan', [App\Http\Controllers\MasterTindakanController::class, 'create'])
->middleware(['auth'])
->name('master_tindakan.create');
Route::post('/master_tindakan/tambah_tindakan/store', [App\Http\Controllers\MasterTindakanController::class, 'store'])
->middleware(['auth'])
->name('master_tindakan.store');
Route::get('/master_tindakan/tambah_tindakan/edit/{tindakan_id}', [App\Http\Controllers\MasterTindakanController::class, 'edit'])
->middleware(['auth'])
->name('master_tindakan.edit');
Route::put('/master_tindakan/tambah_tindakan/update/{tindakan_id}', [App\Http\Controllers\MasterTindakanController::class, 'update'])
->middleware(['auth'])
->name('master_tindakan.update');
Route::delete('/master_tindakan/tambah_tindakan/delete/{tindakan_id}', [App\Http\Controllers\MasterTindakanController::class, 'destroy'])
->middleware(['auth'])
->name('master_tindakan.destroy');


Route::get('/master_obat', [App\Http\Controllers\MasterObatController::class, 'index'])
->middleware(['auth'])
->name('master_obat');
Route::get('/master_obat/tambah_obat', [App\Http\Controllers\MasterObatController::class, 'create'])
->middleware(['auth'])
->name('master_obat.create');
Route::post('/master_obat/tambah_obat/store', [App\Http\Controllers\MasterObatController::class, 'store'])
->middleware(['auth'])
->name('master_obat.store');
Route::get('/master_obat/tambah_obat/edit/{obat_id}', [App\Http\Controllers\MasterObatController::class, 'edit'])
->middleware(['auth'])
->name('master_obat.edit');
Route::put('/master_obat/tambah_obat/update/{obat_id}', [App\Http\Controllers\MasterObatController::class, 'update'])
->middleware(['auth'])
->name('master_obat.update');
Route::delete('/master_obat/tambah_obat/delete/{obat_id}', [App\Http\Controllers\MasterObatController::class, 'destroy'])
->middleware(['auth'])
->name('master_obat.destroy');

Route::get('/menu_pasien', [App\Http\Controllers\MenuPasienController::class, 'index'])
->middleware(['auth'])
->name('menu_pasien');
Route::get('/menupasien/tambah_pasien', [App\Http\Controllers\MenuPasienController::class, 'create'])
->middleware(['auth'])
->name('menu_pasien.create');
Route::post('/menupasien/tambah_pasien/store', [App\Http\Controllers\MenuPasienController::class, 'store'])
->middleware(['auth'])
->name('menu_pasien.store');
Route::get('/menupasien/edit_pasien/{id}', [App\Http\Controllers\MenuPasienController::class, 'edit'])
->middleware(['auth'])
->name('menu_pasien.edit');
Route::put('/menupasien/edit_pasien/update/{id}', [App\Http\Controllers\MenuPasienController::class, 'update'])
->middleware(['auth'])
->name('menu_pasien.update');
Route::delete('/menupasien/hapus_pasien/{id}', [App\Http\Controllers\MenuPasienController::class, 'destroy'])
->middleware(['auth'])
->name('menu_pasien.destroy');


Route::get('/tindakan_dan_obat', [App\Http\Controllers\TindakanDanObatController::class, 'index'])
->middleware(['auth'])
->name('menu_tindakan_dan_obat');
Route::get('/tindakan_dan_obat/edit/{id}', [App\Http\Controllers\TindakanDanObatController::class, 'edit'])
->middleware(['auth'])
->name('menu_tindakan_dan_obat.edit');
Route::put('/tindakan_dan_obat/update/{id}', [App\Http\Controllers\TindakanDanObatController::class, 'update'])
->middleware(['auth'])
->name('menu_tindakan_dan_obat.update');
Route::put('/tindakan_dan_obat/pembayaran/{id}', [App\Http\Controllers\TindakanDanObatController::class, 'pembayaran'])
->middleware(['auth'])
->name('menu_tindakan_dan_obat.pembayaran');
Route::delete('/tindakan_dan_obat/hapus/{id}', [App\Http\Controllers\TindakanDanObatController::class, 'destroy'])
->middleware(['auth'])
->name('menu_tindakan_dan_obat.destroy');

Route::get('/tagihan', [App\Http\Controllers\TagihanController::class, 'index'])
->middleware(['auth'])
->name('tagihan');
Route::get('/tagihan/show/{id}', [App\Http\Controllers\TagihanController::class, 'show'])
->middleware(['auth'])
->name('tagihan.show');
Route::put('/tagihan/update/{id}', [App\Http\Controllers\TagihanController::class, 'update'])
->middleware(['auth'])
->name('tagihan.update');


