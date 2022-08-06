<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    // public function up()
    // {
    //     Schema::create('surat', function (Blueprint $table) {
    //         $table->id();
    //         $table->foreignId('id_surat');
    //         $table->string('nama_surat');
    //         $table->timestamps();
    //     });
    // }

    public function up(){
        Schema::create('surat', function(Blueprint $table){
            $table->bigIncrements('id_surat');
            $table->ForeignId('id_user')->nullable();
            $table->string('nama_surat');
            $table->text('keterangan');
            $table->string('file_surat')->nullable();
            $table->enum('status', [
                'BelumVerifikasi',
                'Diverifikasi',
                'Ditolak'
            ])->default('BelumVerifikasi');
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
        Schema::dropIfExists('surat');
    }
}
