<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefClusterWilayahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_cluster_wilayah', function (Blueprint $table) {
            $table->id();
            $table->string('rt');
            $table->string('rw');
            $table->string('lingkungan');
            $table->string('kelurahan');
            $table->string('kecamatan');
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
        Schema::dropIfExists('ref_cluster_wilayah');
    }
}
