<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefKepemilikanTernak;

class RefKepemilikanTernakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_kepemilikan_ternak')->delete();
        $ref_kepemilikan_ternak = [
            [
                'nama' => 'Tidak Ada',
                'bobot' => 5,
                'ref_kriteria_id' => 5
            ],
            [
                'nama' => '1 - 10 Ekor',
                'bobot' => 4,
                'ref_kriteria_id' => 5
            ],
            [
                'nama' => '10 - 20 Ekor',
                'bobot' => 3,
                'ref_kriteria_id' => 5
            ],
            [
                'nama' => '20 - 100 Ekor',
                'bobot' => 2,
                'ref_kriteria_id' => 5
            ],
            [
                'nama' => '> 100 Ekor',
                'bobot' => 1,
                'ref_kriteria_id' => 5
            ],
        ];
        RefKepemilikanTernak::insert($ref_kepemilikan_ternak);
    }
}
