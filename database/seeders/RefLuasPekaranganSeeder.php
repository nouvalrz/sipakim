<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefLuasPekarangan;

class RefLuasPekaranganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_luas_pekarangan')->delete();
        $ref_luas_pekarangan = [
            [
                'nama' => '< 100 m2',
                'bobot' => 5,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => '100 - 250 m2',
                'bobot' => 4,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => '250 - 500 m2',
                'bobot' => 3,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => '500 - 1000 m2',
                'bobot' => 2,
                'ref_kriteria_id' => 3
            ],
            [
                'nama' => '> 1000 m2',
                'bobot' => 1,
                'ref_kriteria_id' => 3
            ],
        ];
        RefLuasPekarangan::insert($ref_luas_pekarangan);
    }
}
