<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefKriteria;

class RefKriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_kriteria')->delete();
        $ref_kriteria = [
            [
                'nama' => 'Pendapatan Keluarga',
                'bobot' => 0.30
            ],
            [
                'nama' => 'Informasi Pendukung',
                'bobot' => 0.25
            ],
            [
                'nama' => 'Kondisi Rumah',
                'bobot' => 0.20,
            ],
            [
                'nama' => 'Kepemilikan Lahan',
                'bobot' => 0.15
            ],
            [
                'nama' => 'Kepemilikan Ternak',
                'bobot' => 0.10
            ],
        ];
        RefKriteria::insert($ref_kriteria);
    }
}
