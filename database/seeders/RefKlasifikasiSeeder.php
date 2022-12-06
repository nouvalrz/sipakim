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
                'range_bottom' => 20.00,
                'range_top' => 30.75
            ],
            [
                'nama' => 'Tidak Miskin',
                'range_bottom' => 7.10,
                'range_top' => 19.99
            ],
        ];
        RefKlasifikasi::insert($ref_klasifikasi);
    }
}
