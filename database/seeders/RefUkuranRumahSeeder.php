<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefUkuranRumah;

class RefUkuranRumahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_ukuran_rumah')->delete();
        $ref_ukuran_rumah = [
            [
                'nama' => '< 50 m2',
                'bobot' => 5,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => '50 - 100 m2',
                'bobot' => 4,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => '100 - 250 m2',
                'bobot' => 3,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => '250 - 500 m2',
                'bobot' => 2,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => '> 500 m2',
                'bobot' => 1,
                'ref_kriteria_id' => 3
            ],
        ];
        RefUkuranRumah::insert($ref_ukuran_rumah);
    }
}
