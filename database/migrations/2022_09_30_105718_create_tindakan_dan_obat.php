<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTindakanDanObat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tindakan_dan_obat', function (Blueprint $table) {
            $table->id('tdo_id');
            $table->string('NIK')->unique;
            $table->string('nama_pasien');
            $table->string('no_phone')->unique;
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('keluhan');
            $table->foreignId('pegawai_id');
            $table->foreignId('wilayah_id');
            $table->string('tindakan_id');
            $table->string('obat_id');
            $table->string('status_tindakan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tindakan_dan_obat');
    }
}
