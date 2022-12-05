<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefKemampuanBerobat;

class RefKemampuanBerobatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_kemampuan_berobat')->delete();
        $ref_kemampuan_berobat = [
            [
                'nama' => 'Tidak Ada',
                'bobot' => 5,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Pustu',
                'bobot' => 4,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'RSU / Puskesmas',
                'bobot' => 3,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Dokter Umum',
                'bobot' => 2,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Dokter Spesialis',
                'bobot' => 1,
                'ref_kriteria_id' => 2
            ],
        ];
        RefKemampuanBerobat::insert($ref_kemampuan_berobat);
    }
}
