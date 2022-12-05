<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefDayaListrik;

class RefDayaListrikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_daya_listrik')->delete();
        $ref_daya_listrik = [
            [
                'nama' => '450 VA',
                'bobot' => 5,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => '900 VA',
                'bobot' => 4,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => '1300 VA',
                'bobot' => 3,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => '2200 VA',
                'bobot' => 2,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => '3500 VA',
                'bobot' => 1,
                'ref_kriteria_id' => 2
            ],
        ];
        RefDayaListrik::insert($ref_daya_listrik);
    }
}
