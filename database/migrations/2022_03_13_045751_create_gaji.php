<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGaji extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji', function (Blueprint $table) {
            $table->bigInteger('id_gaji');
            $table->foreignId('id_user')->nullable();
            $table->date('bulan');
            $table->string('gaji_pkk');
            $table->string('tunjangan_umum');
            $table->string('tmb_tunjangan_umum');
            $table->string('tunjangan_struk');
            $table->string('tunjangan_fungsi');
            $table->string('tunjangan_beras');
            $table->string('tunjangan_pph');
            $table->string('potongan_bpjs');
            $table->string('potongan_pensiun');
            $table->string('potongan_ll');
            $table->string('potongan_beras');
            $table->string('potongan_cp');
            $table->string('potongan_pph');
            $table->string('gaji_diterima');
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
        Schema::dropIfExists('gaji');
    }
}
