<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefLantai;

class RefLantaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_lantai')->delete();
        $ref_lantai = [
            [
                'nama' => 'Tanah',
                'bobot' => 5,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => 'Papan',
                'bobot' => 4,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => 'Semen',
                'bobot' => 3,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => 'Keramik',
                'bobot' => 2,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => 'Marmer / Granit',
                'bobot' => 1,
                'ref_kriteria_id' => 3
            ],
        ];
        RefLantai::insert($ref_lantai);
    }
}
