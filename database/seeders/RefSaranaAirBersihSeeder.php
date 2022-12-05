<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefSaranaAirBersih;

class RefSaranaAirBersihSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_sarana_air_bersih')->delete();
        $ref_sarana_air_bersih = [
            [
                'nama' => 'Tidak Ada',
                'bobot' => 5,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Sungai',
                'bobot' => 4,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Sumur Umum',
                'bobot' => 3,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Sumur Bor / Gali  / Mata Air',
                'bobot' => 2,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'PDAM',
                'bobot' => 1,
                'ref_kriteria_id' => 2
            ],
        ];
        RefSaranaAirBersih::insert($ref_sarana_air_bersih);
    }
}
