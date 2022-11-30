<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRefStatusKepemilikanTernakBesarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ref_status_kepemilikan_ternak_besar', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->float('bobot');
            $table->bigInteger('ref_kriteria_id');
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
        Schema::dropIfExists('ref_status_kepemilikan_ternak_besar');
    }
}
