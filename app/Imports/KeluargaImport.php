<?php

namespace App\Imports;

use App\Models\Keluarga;
use App\Models\PotensiKeluarga;
use App\Models\AnalisaKeluarga;
use App\Models\RefClusterWilayah;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KeluargaImport implements ToCollection, WithHeadingRow
{
    /**
    * @param array $rows
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            try {
                $cluster_wilayah = RefClusterWilayah::where('kecamatan', '=', $row['kecamatan'])
                    ->where('kelurahan', '=', $row['kelurahan'])
                    ->where('lingkungan', '=', $row['lingkungan'])
                    ->where('rw', '=', $row['rw'])
                    ->where('rt', '=', $row['rt'])
                    ->first();
                if (is_null($cluster_wilayah)) {
                    $id_cluster_wilayah = 0;
                } else {
                    $id_cluster_wilayah = $cluster_wilayah->id;
                }
            } catch (Throwable $e) {
                $cluster_wilayah = 0;
            }
    
            try {
                $keluarga = new Keluarga([
                    'no_kk' => $row['no_kk'], 
                    'nik' => $row['nik'],
                    'nama_kepala' => $row['nama_kepala'],
                    'tempat_lahir' => $row['tempat_lahir'],
                    'tanggal_lahir' => $row['tanggal_lahir'],
                    'cluster_wilayah_id' => $id_cluster_wilayah, 
                    'jumlah_anggota' => $row['jumlah_anggota']
                ]);
                $keluarga->save();
            } catch (Throwable $e) {
                return false;
            }
    
            try {
                $potensi_keluarga = new PotensiKeluarga([
                    'keluarga_id' => $keluarga->id,
                    'ref_pendapatan_suami_id' => $row['ref_pendapatan_suami_id'],
                    'ref_pendapatan_istri_id' => $row['ref_pendapatan_istri_id'],
                    'ref_pendapatan_anak_id' => $row['ref_pendapatan_anak_id'],
                    'ref_pendapatan_orangtua_id' => $row['ref_pendapatan_orangtua_id'],
                    'ref_alat_transportasi_id' => $row['ref_alat_transportasi_id'],
                    'ref_alat_penerangan_id' => $row['ref_alat_penerangan_id'],
                    'ref_daya_listrik_id' => $row['ref_daya_listrik_id'],
                    'ref_sarana_air_bersih_id' => $row['ref_sarana_air_bersih_id'],
                    'ref_kemampuan_berobat_id' => $row['ref_kemampuan_berobat_id'],
                    'ref_jenis_jamban_id' => $row['ref_jenis_jamban_id'],
                    'ref_jenis_septitank_id' => $row['ref_jenis_septitank_id'],
                    'ref_bahan_bakar_id' => $row['ref_bahan_bakar_id'],
                    'ref_jenis_pembuangan_id' => $row['ref_jenis_pembuangan_id'],
                    'ref_jenis_pemilahan_id' => $row['ref_jenis_pemilahan_id'],
                    'ref_kepemilikan_tabungan_id' => $row['ref_kepemilikan_tabungan_id'],
                    'ref_kepemilikan_emas_id' => $row['ref_kepemilikan_emas_id'],
                    'ref_sarana_prasarana_id' => $row['ref_sarana_prasarana_id'],
                    'ref_kemampuan_beli_pakaian_id' => $row['ref_kemampuan_beli_pakaian_id'],
                    'ref_dinding_id' => $row['ref_dinding_id'],
                    'ref_atap_id' => $row['ref_atap_id'],
                    'ref_lantai_id' => $row['ref_lantai_id'],
                    'ref_surat_tanah_id' => $row['ref_surat_tanah_id'],
                    'ref_status_kepemilikan_rumah_id' => $row['ref_status_kepemilikan_rumah_id'],
                    'ref_ukuran_rumah_id' => $row['ref_ukuran_rumah_id'],
                    'ref_luas_pekarangan_id' => $row['ref_luas_pekarangan_id'],
                    'ref_ukuran_lahan_sawah_id' => $row['ref_ukuran_lahan_sawah_id'],
                    'ref_status_kepemilikan_sawah_id' => $row['ref_status_kepemilikan_sawah_id'],
                    'ref_ukuran_lahan_kebun_id' => $row['ref_ukuran_lahan_kebun_id'],
                    'ref_status_kepemilikan_kebun_id' => $row['ref_status_kepemilikan_kebun_id'],
                    'ref_kepemilikan_ternak_besar_id' => $row['ref_kepemilikan_ternak_besar_id'],
                    'ref_status_kepemilikan_ternak_besar_id' => $row['ref_status_kepemilikan_ternak_besar_id'],
                    'ref_kepemilikan_ternak_kecil_id' => $row['ref_kepemilikan_ternak_kecil_id'],
                    'ref_status_kepemilikan_ternak_kecil_id' => $row['ref_status_kepemilikan_ternak_kecil_id']
                ]);
                $potensi_keluarga->save();
                $analisa_keluarga = AnalisaKeluarga::calculate_data($potensi_keluarga);
                if ($analisa_keluarga === false) return false;
            } catch (Throwable $e) {
                $temp = Keluarga::find($keluarga->id);
                $temp->delete();
                return false;
            }
        }
    }
}
