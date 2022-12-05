<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefBahanBakar;

class RefBahanBakarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_bahan_bakar')->delete();
        $ref_bahan_bakar = [
            [
                'nama' => 'Kayu Bakar/ Arang',
                'bobot' => 3,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Minyak Tanah',
                'bobot' => 2,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'LPG',
                'bobot' => 1,
                'ref_kriteria_id' => 2
            ],
        ];
        RefBahanBakar::insert($ref_bahan_bakar);
    }
}
