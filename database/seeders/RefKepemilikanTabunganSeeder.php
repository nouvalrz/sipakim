<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefKepemilikanTabungan;

class RefKepemilikanTabunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_kepemilikan_tabungan')->delete();
        $ref_kepemilikan_tabungan = [
            [
                'nama' => 'Tidak Ada Tabungan',
                'bobot' => 2,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Ada Tabungan',
                'bobot' => 1,
                'ref_kriteria_id' => 2
            ],
        ];
        RefKepemilikanTabungan::insert($ref_kepemilikan_tabungan);
    }
}
