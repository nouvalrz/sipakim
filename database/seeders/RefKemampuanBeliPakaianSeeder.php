<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefKemampuanBeliPakaian;

class RefKemampuanBeliPakaianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_kemampuan_beli_pakaian')->delete();
        $ref_kemampuan_beli_pakaian = [
            [
                'nama' => 'Tidak Membeli/ Tahun',
                'bobot' => 5,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => '1 - 4 Kali/ Tahun',
                'bobot' => 3,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => '5 - 9/ Tahun',
                'bobot' => 2,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => '≥ 10 Kali/ Tahun',
                'bobot' => 1,
                'ref_kriteria_id' => 2
            ],
        ];
        RefKemampuanBeliPakaian::insert($ref_kemampuan_beli_pakaian);
    }
}
