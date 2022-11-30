<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnalisaKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('analisa_keluarga', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('potensi_keluarga_id');
            $table->bigInteger('hasil_perhitungan');
            $table->bigInteger('ref_klasifikasi_id');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('analisa_keluarga');
    }
}
