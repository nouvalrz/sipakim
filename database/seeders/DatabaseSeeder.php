<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RefAtapSeeder::class,
            RefClusterWilayahSeeder::class,
            RefDindingSeeder::class,
            RefKepemilikanTernakSeeder::class,
            RefKriteriaSeeder::class,
            RefLantaiSeeder::class,
            RefLuasPekaranganSeeder::class,
            RefPendapatanSeeder::class,
            RefStatusKepemilikanLahanSeeder::class,
            RefStatusKepemilikanRumahSeeder::class,
            RefStatusKepemilikanTernakSeeder::class,
            RefSuratTanahSeeder::class,
            RefUkuranLahanSeeder::class,
            RefUkuranRumahSeeder::class
        ]);
    }
}
