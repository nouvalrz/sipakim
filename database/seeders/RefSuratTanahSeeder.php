<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefSuratTanah;

class RefSuratTanahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_surat_tanah')->delete();
        $ref_surat_tanah = [
            [
                'nama' => 'Hibah',
                'bobot' => 5,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => 'Surat Keterangan',
                'bobot' => 4,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => 'Kuitansi Pembelian',
                'bobot' => 3,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => 'Akta Jual Beli',
                'bobot' => 2,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => 'Bersertifikat',
                'bobot' => 1,
                'ref_kriteria_id' => 3
            ],
        ];
        RefSuratTanah::insert($ref_surat_tanah);
    }
}
