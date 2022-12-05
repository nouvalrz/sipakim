<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefAlatTransportasi;

class RefAlatTransportasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_alat_transportasi')->delete();
        $ref_alat_transportasi = [
            [
                'nama' => 'Tidak Ada',
                'bobot' => 5,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Gerobak',
                'bobot' => 4,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Sepeda',
                'bobot' => 3,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Motor',
                'bobot' => 2,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Mobil Roda 4',
                'bobot' => 1,
                'ref_kriteria_id' => 2
            ],
        ];
        RefAlatTransportasi::insert($ref_alat_transportasi);
    }
}
