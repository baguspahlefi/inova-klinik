<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_pasien', function (Blueprint $table) {
            $table->id('pasien_id');
            $table->string('NIK')->unique;
            $table->string('nama_pasien');
            $table->string('no_phone')->unique;
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('keluhan');
            $table->foreignId('pegawai_id');
            $table->foreignId('wilayah_id');
    
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
        Schema::dropIfExists('menu_pasien');
    }
}
