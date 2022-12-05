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
            RefClusterWilayahSeeder::class,
            RefKriteriaSeeder::class,
            RefPendapatanSeeder::class,
            RefUkuranLahanSeeder::class,
            RefStatusKepemilikanLahanSeeder::class,
            RefKepemilikanTernakSeeder::class,
            RefStatusKepemilikanTernakSeeder::class
        ]);
    }
}
