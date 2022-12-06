<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AnalisaKeluarga extends Model
{
    use HasFactory;
    protected $table = 'analisa_keluarga';

    protected $fillable = [
        'potensi_keluarga_id', 'hasil_perhitungan', 'ref_klasifikasi_id', 'created_at', 'updated_at', 'deleted_at',
    ];

    protected function calculate_data($potensi_keluarga)
    {
        $cal_pendapatan = ($potensi_keluarga->ref_pendapatan_suami->bobot + $potensi_keluarga->ref_pendapatan_istri->bobot + $potensi_keluarga->ref_pendapatan_anak->bobot + $potensi_keluarga->ref_pendapatan_orangtua->bobot) * RefKriteria::find(1)->bobot;

        $cal_pendukung_rumah_tangga = ($potensi_keluarga->ref_alat_transportasi->bobot + $potensi_keluarga->ref_alat_penerangan->bobot + $potensi_keluarga->ref_daya_listrik->bobot + $potensi_keluarga->ref_sarana_air_bersih->bobot + $potensi_keluarga->ref_kemampuan_berobat->bobot + $potensi_keluarga->ref_jenis_jamban->bobot +  $potensi_keluarga->ref_jenis_septitank->bobot + $potensi_keluarga->ref_bahan_bakar->bobot + $potensi_keluarga->ref_jenis_pembuangan->bobot + $potensi_keluarga->ref_jenis_pemilahan->bobot + $potensi_keluarga->ref_kepemilikan_tabungan->bobot + $potensi_keluarga->ref_kepemilikan_emas->bobot + $potensi_keluarga->ref_sarana_prasarana->bobot + $potensi_keluarga->ref_kemampuan_beli_pakaian->bobot) * RefKriteria::find(2)->bobot;

        $cal_kondisi_rumah = ($potensi_keluarga->ref_dinding->bobot + $potensi_keluarga->ref_atap->bobot + $potensi_keluarga->ref_lantai->bobot + $potensi_keluarga->ref_surat_tanah->bobot + $potensi_keluarga->ref_status_kepemilikan_rumah->bobot + $potensi_keluarga->ref_ukuran_rumah->bobot + $potensi_keluarga->ref_luas_pekarangan->bobot) * RefKriteria::find(3)->bobot;

        $cal_kepemilikan_lahan = ($potensi_keluarga->ref_ukuran_lahan_sawah->bobot + $potensi_keluarga->ref_status_kepemilikan_sawah->bobot + $potensi_keluarga->ref_ukuran_lahan_kebun->bobot + $potensi_keluarga->ref_status_kepemilikan_kebun->bobot) * RefKriteria::find(4)->bobot;

        $cal_kepemilikan_ternak = ($potensi_keluarga->ref_kepemilikan_ternak_besar->bobot + $potensi_keluarga->ref_status_kepemilikan_ternak_besar->bobot + $potensi_keluarga->ref_kepemilikan_ternak_kecil->bobot + $potensi_keluarga->ref_status_kepemilikan_ternak_kecil->bobot) * RefKriteria::find(5)->bobot;

        $result = $cal_pendapatan + $cal_pendukung_rumah_tangga + $cal_kondisi_rumah + $cal_kepemilikan_lahan + $cal_kepemilikan_ternak;
        $klasifikasi = RefKlasifikasi::get_klasifikasi($result);

        try {
            $analisa_keluarga = $this::create([
                'potensi_keluarga_id' => $potensi_keluarga->id,
                'hasil_perhitungan' => $result,
                'ref_klasifikasi_id' => $klasifikasi->id
            ]);
        } catch (Throwable $e) {
            $potensi_keluarga = PotensiKeluarga::find($potensi_keluarga->id);
            $potensi_keluarga->delete();
            return false;
        }
        return true;
    }

    protected function edit_calculate_data($potensi_keluarga)
    {
        try {
            DB::transaction(function() use ($potensi_keluarga) {

                $analisa_keluarga = AnalisaKeluarga::where('potensi_keluarga_id', $potensi_keluarga->id)->get()->first();

                $cal_pendapatan = ($potensi_keluarga->ref_pendapatan_suami->bobot + $potensi_keluarga->ref_pendapatan_istri->bobot + $potensi_keluarga->ref_pendapatan_anak->bobot + $potensi_keluarga->ref_pendapatan_orangtua->bobot) * RefKriteria::find(1)->bobot;

                $cal_pendukung_rumah_tangga = ($potensi_keluarga->ref_alat_transportasi->bobot + $potensi_keluarga->ref_alat_penerangan->bobot + $potensi_keluarga->ref_daya_listrik->bobot + $potensi_keluarga->ref_sarana_air_bersih->bobot + $potensi_keluarga->ref_kemampuan_berobat->bobot + $potensi_keluarga->ref_jenis_jamban->bobot +  $potensi_keluarga->ref_jenis_septitank->bobot + $potensi_keluarga->ref_bahan_bakar->bobot + $potensi_keluarga->ref_jenis_pembuangan->bobot + $potensi_keluarga->ref_jenis_pemilahan->bobot + $potensi_keluarga->ref_kepemilikan_tabungan->bobot + $potensi_keluarga->ref_kepemilikan_emas->bobot + $potensi_keluarga->ref_sarana_prasarana->bobot + $potensi_keluarga->ref_kemampuan_beli_pakaian->bobot) * RefKriteria::find(2)->bobot;

                $cal_kondisi_rumah = ($potensi_keluarga->ref_dinding->bobot + $potensi_keluarga->ref_atap->bobot + $potensi_keluarga->ref_lantai->bobot + $potensi_keluarga->ref_surat_tanah->bobot + $potensi_keluarga->ref_status_kepemilikan_rumah->bobot + $potensi_keluarga->ref_ukuran_rumah->bobot + $potensi_keluarga->ref_luas_pekarangan->bobot) * RefKriteria::find(3)->bobot;

                $cal_kepemilikan_lahan = ($potensi_keluarga->ref_ukuran_lahan_sawah->bobot + $potensi_keluarga->ref_status_kepemilikan_sawah->bobot + $potensi_keluarga->ref_ukuran_lahan_kebun->bobot + $potensi_keluarga->ref_status_kepemilikan_kebun->bobot) * RefKriteria::find(4)->bobot;

                $cal_kepemilikan_ternak = ($potensi_keluarga->ref_kepemilikan_ternak_besar->bobot + $potensi_keluarga->ref_status_kepemilikan_ternak_besar->bobot + $potensi_keluarga->ref_kepemilikan_ternak_kecil->bobot + $potensi_keluarga->ref_status_kepemilikan_ternak_kecil->bobot) * RefKriteria::find(5)->bobot;

                $result = $cal_pendapatan + $cal_pendukung_rumah_tangga + $cal_kondisi_rumah + $cal_kepemilikan_lahan + $cal_kepemilikan_ternak;
                $klasifikasi = RefKlasifikasi::get_klasifikasi($result);

                $analisa_keluarga->update([
                    'hasil_perhitungan' => $result,
                    'ref_klasifikasi_id' => $klasifikasi->id
                ]);
            });
        } catch (Throwable $e) {
            DB::rollback();
            return false;
        }
        return true;
    }

    protected function potensi_keluarga()
    {
        return $this->belongsTo('App\Models\PotensiKeluarga', 'potensi_keluarga_id');
    }

    protected function ref_klasifikasi()
    {
        return $this->belongsTo('App\Models\RefKlasifikasi', 'ref_klasifikasi_id');
    }
}
