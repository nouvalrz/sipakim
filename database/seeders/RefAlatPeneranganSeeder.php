<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefAlatPenerangan;

class RefAlatPeneranganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_alat_penerangan')->delete();
        $ref_alat_penerangan = [
            [
                'nama' => 'Lampu Minyak',
                'bobot' => 3,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Listrik Nyambung',
                'bobot' => 2,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Listrik Sendiri',
                'bobot' => 1,
                'ref_kriteria_id' => 2
            ],
        ];
        RefAlatPenerangan::insert($ref_alat_penerangan);
    }
}
