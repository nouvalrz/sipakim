<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefSaranaPrasarana;

class RefSaranaPrasaranaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_sarana_prasarana')->delete();
        $ref_sarana_prasarana = [
            [
                'nama' => 'Tidak Ada',
                'bobot' => 2,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Ada',
                'bobot' => 1,
                'ref_kriteria_id' => 2
            ],
        ];
        RefSaranaPrasarana::insert($ref_sarana_prasarana);
    }
}
