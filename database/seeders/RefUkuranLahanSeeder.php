<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefUkuranLahan;

class RefUkuranLahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_ukuran_lahan')->delete();
        $ref_ukuran_lahan = [
            [
                'nama' => 'Tidak Ada',
                'bobot' => 5,
                'ref_kriteria_id' => 4
            ],
            [
                'nama' => '1 - 50 Are',
                'bobot' => 4,
                'ref_kriteria_id' => 4
            ],
            [
                'nama' => '50 - 100 Are',
                'bobot' => 3,
                'ref_kriteria_id' => 4
            ],
            [
                'nama' => '1 - 5 Ha',
                'bobot' => 2,
                'ref_kriteria_id' => 4
            ],
            [
                'nama' => '> 5 Ha',
                'bobot' => 1,
                'ref_kriteria_id' => 4
            ],
        ];
        RefUkuranLahan::insert($ref_ukuran_lahan);
    }
}
