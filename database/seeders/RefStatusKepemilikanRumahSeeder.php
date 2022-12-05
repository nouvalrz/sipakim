<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefStatusKepemilikanRumah;

class RefStatusKepemilikanRumahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_status_kepemilikan_rumah')->delete();
        $ref_status_kepemilikan_rumah = [
            [
                'nama' => 'Numpang',
                'bobot' => 5,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => 'Bantuan Pemerintah',
                'bobot' => 4,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => 'Sewa',
                'bobot' => 3,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => 'Warisan',
                'bobot' => 2,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => 'Milik Sendiri',
                'bobot' => 1,
                'ref_kriteria_id' => 3
            ],
        ];
        RefStatusKepemilikanRumah::insert($ref_status_kepemilikan_rumah);
    }
}
