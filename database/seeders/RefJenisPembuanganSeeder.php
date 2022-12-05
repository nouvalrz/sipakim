<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefJenisPembuangan;

class RefJenisPembuanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_jenis_pembuangan')->delete();
        $ref_jenis_pembuangan = [
            [
                'nama' => 'Sungai/Saluran',
                'bobot' => 5,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Bakar',
                'bobot' => 4,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Lobang',
                'bobot' => 3,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Bak',
                'bobot' => 2,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'TPA',
                'bobot' => 1,
                'ref_kriteria_id' => 2
            ],
        ];
        RefJenisPembuangan::insert($ref_jenis_pembuangan);
    }
}
