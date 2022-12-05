<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefPendapatan;

class RefPendapatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_pendapatan')->delete();
        $ref_pendapatan = [
            [
                'nama' => 'Rp0 - Rp500.000',
                'bobot' => 5,
                'ref_kriteria_id' => 1
            ],
            [
                'nama' => 'Rp500.000 - Rp2.500.000',
                'bobot' => 4,
                'ref_kriteria_id' => 1
            ],
            [
                'nama' => 'Rp2.500.000 - Rp.5.000.000',
                'bobot' => 3,
                'ref_kriteria_id' => 1
            ],
            [
                'nama' => 'Rp5.000.000 - Rp10.000.000',
                'bobot' => 2,
                'ref_kriteria_id' => 1
            ],
            [
                'nama' => '> Rp10.000.000',
                'bobot' => 1,
                'ref_kriteria_id' => 1
            ],
        ];
        RefPendapatan::insert($ref_pendapatan);
    }
}
