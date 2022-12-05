<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefAtap;

class RefAtapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_atap')->delete();
        $ref_atap = [
            [
                'nama' => 'Alang-alang / Rumbia',
                'bobot' => 5,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => 'Seng / Asbes',
                'bobot' => 4,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => 'Genteng',
                'bobot' => 3,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => 'Beton Cor',
                'bobot' => 2,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => 'Multiroof',
                'bobot' => 1,
                'ref_kriteria_id' => 3
            ],
        ];
        RefAtap::insert($ref_atap);
    }
}
