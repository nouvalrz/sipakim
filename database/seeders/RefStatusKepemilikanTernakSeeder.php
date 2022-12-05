<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefStatusKepemilikanTernak;

class RefStatusKepemilikanTernakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_status_kepemilikan_ternak')->delete();
        $ref_status_kepemilikan_ternak = [
            [
                'nama' => 'Tidak Ada',
                'bobot' => 5,
                'ref_kriteria_id' => 5
            ],
            [
                'nama' => 'Bagi Hasil',
                'bobot' => 4,
                'ref_kriteria_id' => 5
            ],
            [
                'nama' => 'Bantuan Pemerintah',
                'bobot' => 3,
                'ref_kriteria_id' => 5
            ],
            [
                'nama' => 'Warisan',
                'bobot' => 2,
                'ref_kriteria_id' => 5
            ],
            [
                'nama' => 'Milik Sendiri',
                'bobot' => 1,
                'ref_kriteria_id' => 5
            ],
        ];
        RefStatusKepemilikanTernak::insert($ref_status_kepemilikan_ternak);
    }
}
