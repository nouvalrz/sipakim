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

    protected function keluarga()
    {
        return $this->belongsTo('App\Models\Keluarga', 'keluarga_id');
    }

    protected function ref_dinding()
    {
        return $this->belongsTo('App\Models\RefDinding', 'ref_dinding_id');
    }

    protected function ref_atap()
    {
        return $this->belongsTo('App\Models\RefAtap', 'ref_atap_id');
    }

    protected function ref_lantai()
    {
        return $this->belongsTo('App\Models\RefLantai', 'ref_lantai_id');
    }

    protected function ref_surat_tanah()
    {
        return $this->belongsTo('App\Models\RefSuratTanah', 'ref_surat_tanah_id');
    }

    protected function ref_status_kepemilikan_rumah()
    {
        return $this->belongsTo('App\Models\RefStatusKepemilikanRumah', 'ref_status_kepemilikan_rumah_id');
    }

    protected function ref_ukuran_rumah()
    {
        return $this->belongsTo('App\Models\RefUkuranRumah', 'ref_ukuran_rumah_id');
    }

    protected function ref_luas_pekarangan()
    {
        return $this->belongsTo('App\Models\RefLuasPekarangan', 'ref_luas_pekarangan_id');
    }

    protected function ref_jumlah_ternak_kerbau()
    {
        return $this->belongsTo('App\Models\RefJumlahTernak', 'ref_jumlah_ternak_kerbau_id');
    }

    protected function ref_jumlah_ternak_sapi()
    {
        return $this->belongsTo('App\Models\RefJumlahTernak', 'ref_jumlah_ternak_sapi_id');
    }

    protected function ref_jumlah_ternak_kuda()
    {
        return $this->belongsTo('App\Models\RefJumlahTernak', 'ref_jumlah_ternak_kuda_id');
    }

    protected function ref_jumlah_ternak_kambing()
    {
        return $this->belongsTo('App\Models\RefJumlahTernak', 'ref_jumlah_ternak_kambing_id');
    }

    protected function ref_jumlah_ternak_domba()
    {
        return $this->belongsTo('App\Models\RefJumlahTernak', 'ref_jumlah_ternak_domba_id');
    }

    protected function ref_jumlah_ternak_besar_lain()
    {
        return $this->belongsTo('App\Models\RefJumlahTernak', 'ref_jumlah_ternak_besar_lain_id');
    }

    protected function ref_status_kepemilikan_ternak_besar()
    {
        return $this->belongsTo('App\Models\RefStatusKepemilikanTernakBesar', 'ref_status_kepemilikan_ternak_besar_id');
    }

    protected function ref_jumlah_ternak_ayam()
    {
        return $this->belongsTo('App\Models\RefJumlahTernak', 'ref_jumlah_ternak_ayam_id');
    }

    protected function ref_jumlah_ternak_bebek()
    {
        return $this->belongsTo('App\Models\RefJumlahTernak', 'ref_jumlah_ternak_bebek_id');
    }

    protected function ref_jumlah_ternak_itik()
    {
        return $this->belongsTo('App\Models\RefJumlahTernak', 'ref_jumlah_ternak_itik_id');
    }

    protected function ref_jumlah_ternak_angsa()
    {
        return $this->belongsTo('App\Models\RefJumlahTernak', 'ref_jumlah_ternak_angsa_id');
    }
    
    protected function ref_jumlah_ternak_kecil_lain()
    {
        return $this->belongsTo('App\Models\RefJumlahTernak', 'ref_jumlah_ternak_kecil_lain_id');
    }

    protected function ref_status_kepemilikan_ternak_kecil()
    {
        return $this->belongsTo('App\Models\RefStatusKepemilikanTernakKecil', 'ref_status_kepemilikan_ternak_kecil_id');
    }

    protected function ref_ukuran_lahan_sawah()
    {
        return $this->belongsTo('App\Models\RefUkuranLahan', 'ref_ukuran_lahan_sawah_id');
    }

    protected function ref_status_kepemilikan_sawah()
    {
        return $this->belongsTo('App\Models\RefStatusKepemilikanLahanSawah', 'ref_status_kepemilikan_sawah_id');
    }

    protected function ref_status_pengelolaan_sawah()
    {
        return $this->belongsTo('App\Models\RefStatusPengelolaanLahanSawah', 'ref_status_pengelolaan_sawah_id');
    }

    protected function ref_ukuran_lahan_kebun()
    {
        return $this->belongsTo('App\Models\RefUkuranLahan', 'ref_ukuran_lahan_kebun_id');
    }

    protected function ref_status_kepemilikan_kebun()
    {
        return $this->belongsTo('App\Models\RefStatusKepemilikanLahanKebun', 'ref_status_kepemilikan_kebun_id');
    }

    protected function ref_status_pengelolaan_kebun()
    {
        return $this->belongsTo('App\Models\RefStatusPengelolaanLahanKebun', 'ref_status_pengelolaan_kebun_id');
    }

    protected function ref_ukuran_lahan_tegalan()
    {
        return $this->belongsTo('App\Models\RefUkuranLahan', 'ref_ukuran_lahan_tegalan_id');
    }

    protected function ref_status_kepemilikan_tegalan()
    {
        return $this->belongsTo('App\Models\RefStatusKepemilikanLahanTegalan', 'ref_status_kepemilikan_tegalan_id');
    }

    protected function ref_status_pengelolaan_tegalan()
    {
        return $this->belongsTo('App\Models\RefStatusPengelolaanLahanTegalan', 'ref_status_pengelolaan_tegalan_id');
    }

    protected function ref_ukuran_lahan_tambak()
    {
        return $this->belongsTo('App\Models\RefUkuranLahan', 'ref_ukuran_lahan_tambak_id');
    }

    protected function ref_status_kepemilikan_tambak()
    {
        return $this->belongsTo('App\Models\RefStatusKepemilikanLahanTambak', 'ref_status_kepemilikan_tambak_id');
    }

    protected function ref_status_pengelolaan_tambak()
    {
        return $this->belongsTo('App\Models\RefStatusPengelolaanLahanTambak', 'ref_status_pengelolaan_tambak_id');
    }

    protected function ref_alat_transportasi()
    {
        return $this->belongsTo('App\Models\RefAlatTransportasi', 'ref_alat_transportasi_id');
    }

    protected function ref_alat_penerangan()
    {
        return $this->belongsTo('App\Models\RefAlatPenerangan', 'ref_alat_penerangan_id');
    }

    protected function ref_daya_listrik()
    {
        return $this->belongsTo('App\Models\RefDayaListrik', 'ref_daya_listrik_id');
    }

    protected function ref_sarana_air_bersih()
    {
        return $this->belongsTo('App\Models\RefSaranaAirBersih', 'ref_sarana_air_bersih_id');
    }

    protected function ref_kemampuan_berobat()
    {
        return $this->belongsTo('App\Models\RefKemampuanBerobat', 'ref_kemampuan_berobat_id');
    }

    protected function ref_jenis_jamban()
    {
        return $this->belongsTo('App\Models\RefJenisJamban', 'ref_jenis_jamban_id');
    }

    protected function ref_jenis_septitank()
    {
        return $this->belongsTo('App\Models\RefJenisSeptitank', 'ref_jenis_septitank_id');
    }

    protected function ref_bahan_bakar()
    {
        return $this->belongsTo('App\Models\RefBahanBakar', 'ref_bahan_bakar_id');
    }

    protected function ref_jenis_pembuangan()
    {
        return $this->belongsTo('App\Models\RefJenisPembuangan', 'ref_jenis_pembuangan_id');
    }

    protected function ref_jenis_pemilahan()
    {
        return $this->belongsTo('App\Models\RefJenisPemilahan', 'ref_jenis_pemilahan_id');
    }

    protected function ref_kepemilikan_tabungan()
    {
        return $this->belongsTo('App\Models\RefKepemilikanTabungan', 'ref_kepemilikan_tabungan_id');
    }

    protected function ref_kepemilikan_emas()
    {
        return $this->belongsTo('App\Models\RefKepemilikanEmas', 'ref_kepemilikan_emas_id');
    }

    protected function ref_sarana_prasarana()
    {
        return $this->belongsTo('App\Models\RefSaranaPrasarana', 'ref_sarana_prasarana_id');
    }

    protected function ref_kemampuan_beli_pakaian()
    {
        return $this->belongsTo('App\Models\RefKemampuanBeliPakaian', 'ref_kemampuan_beli_pakaian_id');
    }

    protected function ref_pendapatan_suami()
    {
        return $this->belongsTo('App\Models\RefPendapatanSuami', 'ref_pendapatan_suami_id');
    }

    protected function ref_pendapatan_istri()
    {
        return $this->belongsTo('App\Models\RefPendapatanIstri', 'ref_pendapatan_istri_id');
    }

    protected function ref_pendapatan_anak()
    {
        return $this->belongsTo('App\Models\RefPendapatanAnak', 'ref_pendapatan_anak_id');
    }

    protected function ref_pendapatan_orangtua()
    {
        return $this->belongsTo('App\Models\RefPendapatanOrangtua', 'ref_pendapatan_orangtua_id');
    }
}