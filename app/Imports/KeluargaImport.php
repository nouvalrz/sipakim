<?php

namespace App\Imports;

use App\Models\Keluarga;
use App\Models\PotensiKeluarga;
use App\Models\AnalisaKeluarga;
use Maatwebsite\Excel\Concerns\ToModel;

class KeluargaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        try {
            $keluarga = new Keluarga([
                'no_kk' => $row[0], 
                'nik' => $row[1],
                'nama_kepala' => $row[2],
                'tempat_lahir' => $row[3],
                'tanggal_lahir' => $row[4],
                'cluster_wilayah_id' => $row[5], 
                'jumlah_anggota' => $row[6]
            ]);
        } catch (Throwable $e) {
            return false;
        }

        try {
            $potensi_keluarga = new PotensiKeluarga([
                'keluarga_id' => $keluarga->id,
                'ref_pendapatan_suami_id' => $row[7],
                'ref_pendapatan_istri_id' => $row[8],
                'ref_pendapatan_anak_id' => $row[9],
                'ref_pendapatan_orangtua_id' => $row[10],
                'ref_alat_transportasi_id' => $row[11],
                'ref_alat_penerangan_id' => $row[12],
                'ref_daya_listrik_id' => $row[13],
                'ref_sarana_air_bersih_id' => $row[14],
                'ref_kemampuan_berobat_id' => $row[15],
                'ref_jenis_jamban_id' => $row[16],
                'ref_jenis_septitank_id' => $row[17],
                'ref_bahan_bakar_id' => $row[18],
                'ref_jenis_pembuangan_id' => $row[19],
                'ref_jenis_pemilahan_id' => $row[20],
                'ref_kepemilikan_tabungan_id' => $row[21],
                'ref_kepemilikan_emas_id' => $row[22],
                'ref_sarana_prasarana_id' => $row[23],
                'ref_kemampuan_beli_pakaian_id' => $row[24],
                'ref_dinding_id' => $row[25],
                'ref_atap_id' => $row[26],
                'ref_lantai_id' => $row[27],
                'ref_surat_tanah_id' => $row[28],
                'ref_status_kepemilikan_rumah_id' => $row[29],
                'ref_ukuran_rumah_id' => $row[30],
                'ref_luas_pekarangan_id' => $row[31],
                'ref_ukuran_lahan_sawah_id' => $row[32],
                'ref_status_kepemilikan_sawah_id' => $row[33],
                'ref_ukuran_lahan_kebun_id' => $row[34],
                'ref_status_kepemilikan_kebun_id' => $row[35],
                'ref_kepemilikan_ternak_besar_id' => $row[36],
                'ref_status_kepemilikan_ternak_besar_id' => $row[37],
                'ref_kepemilikan_ternak_kecil_id' => $row[38],
                'ref_status_kepemilikan_ternak_kecil_id' => $row[39]
            ]);
            $analisa_keluarga = AnalisaKeluarga::calculate_data($potensi_keluarga);
            if ($analisa_keluarga === false) return false;
        } catch (Throwable $e) {
            $temp = Keluarga::find($keluarga->id);
            $temp->delete();
            return false;
        }
        return true;
    }
}
