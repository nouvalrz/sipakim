<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefDinding;

class RefDindingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_dinding')->delete();
        $ref_dinding = [
            [
                'nama' => 'Bambu / Bedek',
                'bobot' => 5,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => 'Triplek',
                'bobot' => 4,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => 'Papan / Metal / Baja Ringan',
                'bobot' => 3,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => '1/2 Tembok',
                'bobot' => 2,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => 'Tembok',
                'bobot' => 1,
                'ref_kriteria_id' => 3
            ],
        ];
        RefDinding::insert($ref_dinding);
    }
}
