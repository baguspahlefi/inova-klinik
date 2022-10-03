<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagihan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihan', function (Blueprint $table) {
            $table->id('tagihan_id');
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
            $table->string('total_tagihan');
            $table->string('status_pembayaran');

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
        Schema::dropIfExists('tagihan');
    }
}
