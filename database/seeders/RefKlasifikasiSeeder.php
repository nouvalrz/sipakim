<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefKlasifikasi;

class RefKlasifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_klasifikasi')->delete();
        $ref_klasifikasi = [
            [
                'nama' => 'Miskin',
                'range_bottom' => 22.00,
                'range_top' => 30.75
            ],
            [
                'nama' => 'Menengah',
                'range_bottom' => 7.11,
                'range_top' => 21.99
            ],
            [
                'nama' => 'Kaya',
                'range_bottom' => 0,
                'range_top' => 7.10
            ],
        ];
        RefKlasifikasi::insert($ref_klasifikasi);
    }
}
