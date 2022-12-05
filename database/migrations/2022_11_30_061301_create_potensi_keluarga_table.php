<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePotensiKeluargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('potensi_keluarga', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('keluarga_id');
            $table->bigInteger('ref_dinding_id');
            $table->bigInteger('ref_atap_id');
            $table->bigInteger('ref_lantai_id');
            $table->bigInteger('ref_surat_tanah_id');
            $table->bigInteger('ref_status_kepemilikan_rumah_id');
            $table->bigInteger('ref_ukuran_rumah_id');
            $table->bigInteger('ref_luas_pekarangan_id');
            $table->bigInteger('ref_kepemilikan_ternak_besar_id');
            $table->bigInteger('ref_status_kepemilikan_ternak_besar_id');
            $table->bigInteger('ref_kepemilikan_ternak_kecil_id');
            $table->bigInteger('ref_status_kepemilikan_ternak_kecil_id');
            $table->bigInteger('ref_ukuran_lahan_sawah_id');
            $table->bigInteger('ref_status_kepemilikan_sawah_id');
            $table->bigInteger('ref_status_pengelolaan_sawah_id');
            $table->bigInteger('ref_ukuran_lahan_kebun_id');
            $table->bigInteger('ref_status_kepemilikan_kebun_id');
            $table->bigInteger('ref_status_pengelolaan_kebun_id');
            $table->bigInteger('ref_alat_transportasi_id');
            $table->bigInteger('ref_alat_penerangan_id');
            $table->bigInteger('ref_daya_listrik_id');
            $table->bigInteger('ref_sarana_air_bersih_id');
            $table->bigInteger('ref_kemampuan_berobat_id');
            $table->bigInteger('ref_jenis_jamban_id');
            $table->bigInteger('ref_jenis_septitank_id');
            $table->bigInteger('ref_bahan_bakar_id');
            $table->bigInteger('ref_jenis_pembuangan_id');
            $table->bigInteger('ref_jenis_pemilahan_id');
            $table->bigInteger('ref_kepemilikan_tabungan_id');
            $table->bigInteger('ref_kepemilikan_emas_id');
            $table->bigInteger('ref_sarana_prasarana_id');
            $table->bigInteger('ref_kemampuan_beli_pakaian_id');
            $table->bigInteger('ref_pendapatan_suami_id');
            $table->bigInteger('ref_pendapatan_istri_id');
            $table->bigInteger('ref_pendapatan_anak_id');
            $table->bigInteger('ref_pendapatan_orangtua_id');
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
        Schema::dropIfExists('potensi_keluarga');
    }
}
