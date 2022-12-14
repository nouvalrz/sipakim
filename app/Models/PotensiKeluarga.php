<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class PotensiKeluarga extends Model
{
    use HasFactory;
    protected $table = 'potensi_keluarga';

    protected $fillable = [
        'keluarga_id', 'ref_pendapatan_suami_id', 'ref_pendapatan_istri_id', 'ref_pendapatan_anak_id', 'ref_pendapatan_orangtua_id', 'ref_alat_transportasi_id', 'ref_alat_penerangan_id', 'ref_daya_listrik_id', 'ref_sarana_air_bersih_id', 'ref_kemampuan_berobat_id', 'ref_jenis_jamban_id', 'ref_jenis_septitank_id', 'ref_bahan_bakar_id', 'ref_jenis_pembuangan_id', 'ref_jenis_pemilahan_id', 'ref_kepemilikan_tabungan_id', 'ref_kepemilikan_emas_id', 'ref_sarana_prasarana_id', 'ref_kemampuan_beli_pakaian_id', 'ref_dinding_id', 'ref_atap_id', 'ref_lantai_id', 'ref_surat_tanah_id', 'ref_status_kepemilikan_rumah_id', 'ref_ukuran_rumah_id', 'ref_luas_pekarangan_id', 'ref_ukuran_lahan_sawah_id', 'ref_status_kepemilikan_sawah_id', 'ref_ukuran_lahan_kebun_id', 'ref_status_kepemilikan_kebun_id', 'ref_kepemilikan_ternak_besar_id', 'ref_status_kepemilikan_ternak_besar_id', 'ref_kepemilikan_ternak_kecil_id', 'ref_status_kepemilikan_ternak_kecil_id', 'created_at', 'updated_at', 'deleted_at',
    ];

    protected function add_data($request, $ref_keluarga)
    {
        $validator = Validator::make($request->all(), [
            'ref_pendapatan_suami_id' => 'required',
            'ref_pendapatan_istri_id' => 'required',
            'ref_pendapatan_anak_id' => 'required',
            'ref_pendapatan_orangtua_id' => 'required',
            'ref_alat_transportasi_id' => 'required',
            'ref_alat_penerangan_id' => 'required',
            'ref_daya_listrik_id' => 'required',
            'ref_sarana_air_bersih_id' => 'required',
            'ref_kemampuan_berobat_id' => 'required',
            'ref_jenis_jamban_id' => 'required',
            'ref_jenis_septitank_id' => 'required',
            'ref_bahan_bakar_id' => 'required',
            'ref_jenis_pembuangan_id' => 'required',
            'ref_jenis_pemilahan_id' => 'required',
            'ref_kepemilikan_tabungan_id' => 'required',
            'ref_kepemilikan_emas_id' => 'required',
            'ref_sarana_prasarana_id' => 'required',
            'ref_kemampuan_beli_pakaian_id' => 'required',
            'ref_dinding_id' => 'required',
            'ref_atap_id' => 'required',
            'ref_lantai_id' => 'required',
            'ref_surat_tanah_id' => 'required',
            'ref_status_kepemilikan_rumah_id' => 'required',
            'ref_ukuran_rumah_id' => 'required',
            'ref_luas_pekarangan_id' => 'required',
            'ref_ukuran_lahan_sawah_id' => 'required',
            'ref_status_kepemilikan_sawah_id' => 'required',
            'ref_ukuran_lahan_kebun_id' => 'required',
            'ref_status_kepemilikan_kebun_id' => 'required',
            'ref_kepemilikan_ternak_besar_id' => 'required',
            'ref_status_kepemilikan_ternak_besar_id' => 'required',
            'ref_kepemilikan_ternak_kecil_id' => 'required',
            'ref_status_kepemilikan_ternak_kecil_id' => 'required'
        ]);

        if ($validator->fails()) {
            $keluarga = Keluarga::find($ref_keluarga->id);
            $keluarga->delete();
            return [false, $validator];
        }

        try {
            $potensi_keluarga = $this::create([
                'keluarga_id' => $ref_keluarga->id,
                'ref_pendapatan_suami_id' => $request->ref_pendapatan_suami_id,
                'ref_pendapatan_istri_id' => $request->ref_pendapatan_istri_id,
                'ref_pendapatan_anak_id' => $request->ref_pendapatan_anak_id,
                'ref_pendapatan_orangtua_id' => $request->ref_pendapatan_orangtua_id,
                'ref_alat_transportasi_id' => $request->ref_alat_transportasi_id,
                'ref_alat_penerangan_id' => $request->ref_alat_penerangan_id,
                'ref_daya_listrik_id' => $request->ref_daya_listrik_id,
                'ref_sarana_air_bersih_id' => $request->ref_sarana_air_bersih_id,
                'ref_kemampuan_berobat_id' => $request->ref_kemampuan_berobat_id,
                'ref_jenis_jamban_id' => $request->ref_jenis_jamban_id,
                'ref_jenis_septitank_id' => $request->ref_jenis_septitank_id,
                'ref_bahan_bakar_id' => $request->ref_bahan_bakar_id,
                'ref_jenis_pembuangan_id' => $request->ref_jenis_pembuangan_id,
                'ref_jenis_pemilahan_id' => $request->ref_jenis_pemilahan_id,
                'ref_kepemilikan_tabungan_id' => $request->ref_kepemilikan_tabungan_id,
                'ref_kepemilikan_emas_id' => $request->ref_kepemilikan_emas_id,
                'ref_sarana_prasarana_id' => $request->ref_sarana_prasarana_id,
                'ref_kemampuan_beli_pakaian_id' => $request->ref_kemampuan_beli_pakaian_id,
                'ref_dinding_id' => $request->ref_dinding_id,
                'ref_atap_id' => $request->ref_atap_id,
                'ref_lantai_id' => $request->ref_lantai_id,
                'ref_surat_tanah_id' => $request->ref_surat_tanah_id,
                'ref_status_kepemilikan_rumah_id' => $request->ref_status_kepemilikan_rumah_id,
                'ref_ukuran_rumah_id' => $request->ref_ukuran_rumah_id,
                'ref_luas_pekarangan_id' => $request->ref_luas_pekarangan_id,
                'ref_ukuran_lahan_sawah_id' => $request->ref_ukuran_lahan_sawah_id,
                'ref_status_kepemilikan_sawah_id' => $request->ref_status_kepemilikan_sawah_id,
                'ref_ukuran_lahan_kebun_id' => $request->ref_ukuran_lahan_kebun_id,
                'ref_status_kepemilikan_kebun_id' => $request->ref_status_kepemilikan_kebun_id,
                'ref_kepemilikan_ternak_besar_id' => $request->ref_kepemilikan_ternak_besar_id,
                'ref_status_kepemilikan_ternak_besar_id' => $request->ref_status_kepemilikan_ternak_besar_id,
                'ref_kepemilikan_ternak_kecil_id' => $request->ref_kepemilikan_ternak_kecil_id,
                'ref_status_kepemilikan_ternak_kecil_id' => $request->ref_status_kepemilikan_ternak_kecil_id
            ]);
            $analisa_keluarga = AnalisaKeluarga::calculate_data($potensi_keluarga);
            if ($analisa_keluarga === false) return [false, null];
        } catch (Throwable $e) {
            $keluarga = Keluarga::find($ref_keluarga->id);
            $keluarga->delete();
            return [false, null];
        }
        return [true, null];
    }


    protected function update_data($request, $ref_keluarga)
    {
        $potensi_keluarga = PotensiKeluarga::where('keluarga_id', $ref_keluarga->id)->get()->first();

        $validator = Validator::make($request->all(), [
            'ref_pendapatan_suami_id' => 'required',
            'ref_pendapatan_istri_id' => 'required',
            'ref_pendapatan_anak_id' => 'required',
            'ref_pendapatan_orangtua_id' => 'required',
            'ref_alat_transportasi_id' => 'required',
            'ref_alat_penerangan_id' => 'required',
            'ref_daya_listrik_id' => 'required',
            'ref_sarana_air_bersih_id' => 'required',
            'ref_kemampuan_berobat_id' => 'required',
            'ref_jenis_jamban_id' => 'required',
            'ref_jenis_septitank_id' => 'required',
            'ref_bahan_bakar_id' => 'required',
            'ref_jenis_pembuangan_id' => 'required',
            'ref_jenis_pemilahan_id' => 'required',
            'ref_kepemilikan_tabungan_id' => 'required',
            'ref_kepemilikan_emas_id' => 'required',
            'ref_sarana_prasarana_id' => 'required',
            'ref_kemampuan_beli_pakaian_id' => 'required',
            'ref_dinding_id' => 'required',
            'ref_atap_id' => 'required',
            'ref_lantai_id' => 'required',
            'ref_surat_tanah_id' => 'required',
            'ref_status_kepemilikan_rumah_id' => 'required',
            'ref_ukuran_rumah_id' => 'required',
            'ref_luas_pekarangan_id' => 'required',
            'ref_ukuran_lahan_sawah_id' => 'required',
            'ref_status_kepemilikan_sawah_id' => 'required',
            'ref_ukuran_lahan_kebun_id' => 'required',
            'ref_status_kepemilikan_kebun_id' => 'required',
            'ref_kepemilikan_ternak_besar_id' => 'required',
            'ref_status_kepemilikan_ternak_besar_id' => 'required',
            'ref_kepemilikan_ternak_kecil_id' => 'required',
            'ref_status_kepemilikan_ternak_kecil_id' => 'required'
        ]);

        if ($validator->fails()) {
            return [false, $validator];
        }

        try {
            $potensi_keluarga->update([
                'keluarga_id' => $ref_keluarga->id,
                'ref_pendapatan_suami_id' => $request->ref_pendapatan_suami_id,
                'ref_pendapatan_istri_id' => $request->ref_pendapatan_istri_id,
                'ref_pendapatan_anak_id' => $request->ref_pendapatan_anak_id,
                'ref_pendapatan_orangtua_id' => $request->ref_pendapatan_orangtua_id,
                'ref_alat_transportasi_id' => $request->ref_alat_transportasi_id,
                'ref_alat_penerangan_id' => $request->ref_alat_penerangan_id,
                'ref_daya_listrik_id' => $request->ref_daya_listrik_id,
                'ref_sarana_air_bersih_id' => $request->ref_sarana_air_bersih_id,
                'ref_kemampuan_berobat_id' => $request->ref_kemampuan_berobat_id,
                'ref_jenis_jamban_id' => $request->ref_jenis_jamban_id,
                'ref_jenis_septitank_id' => $request->ref_jenis_septitank_id,
                'ref_bahan_bakar_id' => $request->ref_bahan_bakar_id,
                'ref_jenis_pembuangan_id' => $request->ref_jenis_pembuangan_id,
                'ref_jenis_pemilahan_id' => $request->ref_jenis_pemilahan_id,
                'ref_kepemilikan_tabungan_id' => $request->ref_kepemilikan_tabungan_id,
                'ref_kepemilikan_emas_id' => $request->ref_kepemilikan_emas_id,
                'ref_sarana_prasarana_id' => $request->ref_sarana_prasarana_id,
                'ref_kemampuan_beli_pakaian_id' => $request->ref_kemampuan_beli_pakaian_id,
                'ref_dinding_id' => $request->ref_dinding_id,
                'ref_atap_id' => $request->ref_atap_id,
                'ref_lantai_id' => $request->ref_lantai_id,
                'ref_surat_tanah_id' => $request->ref_surat_tanah_id,
                'ref_status_kepemilikan_rumah_id' => $request->ref_status_kepemilikan_rumah_id,
                'ref_ukuran_rumah_id' => $request->ref_ukuran_rumah_id,
                'ref_luas_pekarangan_id' => $request->ref_luas_pekarangan_id,
                'ref_ukuran_lahan_sawah_id' => $request->ref_ukuran_lahan_sawah_id,
                'ref_status_kepemilikan_sawah_id' => $request->ref_status_kepemilikan_sawah_id,
                'ref_ukuran_lahan_kebun_id' => $request->ref_ukuran_lahan_kebun_id,
                'ref_status_kepemilikan_kebun_id' => $request->ref_status_kepemilikan_kebun_id,
                'ref_kepemilikan_ternak_besar_id' => $request->ref_kepemilikan_ternak_besar_id,
                'ref_status_kepemilikan_ternak_besar_id' => $request->ref_status_kepemilikan_ternak_besar_id,
                'ref_kepemilikan_ternak_kecil_id' => $request->ref_kepemilikan_ternak_kecil_id,
                'ref_status_kepemilikan_ternak_kecil_id' => $request->ref_status_kepemilikan_ternak_kecil_id
            ]);
            $analisa_keluarga = AnalisaKeluarga::edit_calculate_data($potensi_keluarga);
            if ($analisa_keluarga === false) return [false, null];
        } catch (Throwable $e) {
            return [false, null];
        }
        return [true, null];
    }

    protected function keluarga()
    {
        return $this->belongsTo('App\Models\Keluarga', 'keluarga_id');
    }

    protected function ref_pendapatan_suami()
    {
        return $this->belongsTo('App\Models\RefPendapatan', 'ref_pendapatan_suami_id');
    }

    protected function ref_pendapatan_istri()
    {
        return $this->belongsTo('App\Models\RefPendapatan', 'ref_pendapatan_istri_id');
    }

    protected function ref_pendapatan_anak()
    {
        return $this->belongsTo('App\Models\RefPendapatan', 'ref_pendapatan_anak_id');
    }

    protected function ref_pendapatan_orangtua()
    {
        return $this->belongsTo('App\Models\RefPendapatan', 'ref_pendapatan_orangtua_id');
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

    protected function ref_ukuran_lahan_sawah()
    {
        return $this->belongsTo('App\Models\RefUkuranLahan', 'ref_ukuran_lahan_sawah_id');
    }

    protected function ref_status_kepemilikan_sawah()
    {
        return $this->belongsTo('App\Models\RefStatusKepemilikanLahan', 'ref_status_kepemilikan_sawah_id');
    }

    protected function ref_ukuran_lahan_kebun()
    {
        return $this->belongsTo('App\Models\RefUkuranLahan', 'ref_ukuran_lahan_kebun_id');
    }

    protected function ref_status_kepemilikan_kebun()
    {
        return $this->belongsTo('App\Models\RefStatusKepemilikanLahan', 'ref_status_kepemilikan_kebun_id');
    }

    protected function ref_kepemilikan_ternak_besar()
    {
        return $this->belongsTo('App\Models\RefKepemilikanTernak', 'ref_kepemilikan_ternak_besar_id');
    }

    protected function ref_status_kepemilikan_ternak_besar()
    {
        return $this->belongsTo('App\Models\RefStatusKepemilikanTernak', 'ref_status_kepemilikan_ternak_besar_id');
    }

    protected function ref_kepemilikan_ternak_kecil()
    {
        return $this->belongsTo('App\Models\RefKepemilikanTernak', 'ref_kepemilikan_ternak_kecil_id');
    }

    protected function ref_status_kepemilikan_ternak_kecil()
    {
        return $this->belongsTo('App\Models\RefStatusKepemilikanTernak', 'ref_status_kepemilikan_ternak_kecil_id');
    }

    protected function analisa_keluarga()
    {
        return $this->hasOne('App\Models\AnalisaKeluarga');
    }
}
