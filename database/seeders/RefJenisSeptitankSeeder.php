<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefJenisSeptitank;

class RefJenisSeptitankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_jenis_septitank')->delete();
        $ref_jenis_septitank = [
            [
                'nama' => 'Tidak Ada',
                'bobot' => 3,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Komunal',
                'bobot' => 2,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Individu',
                'bobot' => 1,
                'ref_kriteria_id' => 2
            ],
        ];
        RefJenisSeptitank::insert($ref_jenis_septitank);
    }
}
