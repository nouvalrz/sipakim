<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PotensiKeluarga extends Model
{
    use HasFactory;
    protected $table = 'potensi_keluarga';

    protected $fillable = [
        'keluarga_id', 'ref_dinding_id', 'ref_atap_id', 'ref_lantai_id', 'ref_surat_tanah_id', 'ref_status_kepemilikan_rumah_id', 'ref_ukuran_rumah_id', 'ref_luas_pekarangan_id', 'ref_jumlah_ternak_kerbau_id', 'ref_jumlah_ternak_sapi_id', 'ref_jumlah_ternak_kuda_id', 'ref_jumlah_ternak_kambing_id', 'ref_jumlah_ternak_domba_id', 'ref_jumlah_ternak_besar_lain_id', 'ref_status_kepemilikan_ternak_besar_id', 'ref_jumlah_ternak_ayam_id', 'ref_jumlah_ternak_bebek_id', 'ref_jumlah_ternak_itik_id', 'ref_jumlah_ternak_angsa_id', 'ref_jumlah_ternak_kecil_lain_id', 'ref_status_kepemilikan_ternak_kecil_id', 'ref_ukuran_lahan_sawah_id', 'ref_status_kepemilikan_sawah_id', 'ref_status_pengelolaan_sawah_id', 'ref_ukuran_lahan_kebun_id', 'ref_status_kepemilikan_kebun_id', 'ref_status_pengelolaan_kebun_id', 'ref_ukuran_lahan_tegalan_id', 'ref_status_kepemilikan_tegalan_id', 'ref_status_pengelolaan_tegalan_id', 'ref_ukuran_lahan_tambak_id', 'ref_status_kepemilikan_tambak_id', 'ref_status_pengelolaan_tambak_id', 'ref_alat_transportasi_id', 'ref_alat_penerangan_id', 'ref_daya_listrik_id', 'ref_sarana_air_bersih_id', 'ref_kemampuan_berobat_id', 'ref_jenis_jamban_id', 'ref_jenis_septitank_id', 'ref_bahan_bakar_id', 'ref_jenis_pembuangan_id', 'ref_jenis_pemilahan_id', 'ref_kepemilikan_tabungan_id', 'ref_kepemilikan_emas_id', 'ref_sarana_prasarana_id', 'ref_kemampuan_beli_pakaian_id', 'ref_pendapatan_suami_id', 'ref_pendapatan_istri_id', 'ref_pendapatan_anak_id', 'ref_pendapatan_orangtua_id', 'created_at', 'updated_at', 'deleted_at',
    ];
}
