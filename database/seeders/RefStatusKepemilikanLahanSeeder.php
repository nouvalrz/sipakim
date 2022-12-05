<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefStatusKepemilikanLahan;

class RefStatusKepemilikanLahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_status_kepemilikan_lahan')->delete();
        $ref_status_kepemilikan_lahan = [
            [
                'nama' => 'Tidak Ada',
                'bobot' => 5,
                'ref_kriteria_id' => 4
            ],
            [
                'nama' => 'Numpang',
                'bobot' => 4,
                'ref_kriteria_id' => 4
            ],
            [
                'nama' => 'Sewa',
                'bobot' => 3,
                'ref_kriteria_id' => 4
            ],
            [
                'nama' => 'Warisan / Bantuan Pemerintah',
                'bobot' => 2,
                'ref_kriteria_id' => 4
            ],
            [
                'nama' => 'Milik Sendiri',
                'bobot' => 1,
                'ref_kriteria_id' => 4
            ],
        ];
        RefStatusKepemilikanLahan::insert($ref_status_kepemilikan_lahan);
    }
}
