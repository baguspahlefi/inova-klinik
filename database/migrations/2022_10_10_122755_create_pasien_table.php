<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('NIK')->unique;
            $table->string('nama_pasien');
            $table->string('no_phone')->unique;
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('keluhan');
            $table->foreignId('pegawai_id');
            $table->foreignId('wilayah_id');
            $table->string('tindakan_id')->nullable();
            $table->string('obat_id')->nullable();
            $table->string('status_tindakan')->nullable()->default('belum');
            $table->bigInteger('total_tagihan')->nullable();
            $table->string('status_pembayaran')->nullable()->default('belum');
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
        Schema::dropIfExists('pasien');
    }
}
