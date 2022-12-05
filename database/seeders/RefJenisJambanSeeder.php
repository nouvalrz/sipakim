<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefJenisJamban;

class RefJenisJambanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_jenis_jamban')->delete();
        $ref_jenis_jamban = [
            [
                'nama' => 'Tidak Ada',
                'bobot' => 4,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Jamban Umum',
                'bobot' => 3,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Jamban Cemplung',
                'bobot' => 2,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Jamban Permanen',
                'bobot' => 1,
                'ref_kriteria_id' => 2
            ],
        ];
        RefJenisJamban::insert($ref_jenis_jamban);
    }
}
