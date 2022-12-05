<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefKepemilikanEmas;

class RefKepemilikanEmasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_kepemilikan_emas')->delete();
        $ref_kepemilikan_emas = [

            [
                'nama' => 'Ada Emas',
                'bobot' => 2,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Tidak Ada Emas',
                'bobot' => 1,
                'ref_kriteria_id' => 2
            ],
        ];
        RefKepemilikanEmas::insert($ref_kepemilikan_emas);
    }
}
