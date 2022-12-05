<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefJenisPemilahan;

class RefJenisPemilahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_jenis_pemilahan')->delete();
        $ref_jenis_pemilahan = [

            [
                'nama' => 'Tidak Dipisah',
                'bobot' => 2,
                'ref_kriteria_id' => 2
            ],
            [
                'nama' => 'Pilah Organik dan Anorganik',
                'bobot' => 1,
                'ref_kriteria_id' => 2
            ],
        ];
        RefJenisPemilahan::insert($ref_jenis_pemilahan);
    }
}
