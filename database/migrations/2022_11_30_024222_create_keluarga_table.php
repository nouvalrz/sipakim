<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluarga', function (Blueprint $table) {
            $table->id();
            $table->string('no_kk')->length(16);
            $table->string('nik')->length(16);
            $table->string('nama_kepala')->length(50);
            $table->string('tempat_lahir')->length(20);
            $table->date('tanggal_lahir');
            $table->bigInteger('cluster_wilayah_id');
            $table->string('jumlah_anggota')->length(16);;
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
        Schema::dropIfExists('keluarga');
    }
}
