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
            RefAlatPeneranganSeeder::class,
            RefAlatTransportasiSeeder::class,
            RefAtapSeeder::class,
            RefBahanBakarSeeder::class,
            RefClusterWilayahSeeder::class,
            RefDayaListrikSeeder::class,
            RefDindingSeeder::class,
            RefJenisJambanSeeder::class,
            RefJenisPembuanganSeeder::class,
            RefJenisPemilahanSeeder::class,
            RefJenisSeptitankSeeder::class,
            RefKemampuanBeliPakaianSeeder::class,
            RefKemampuanBerobatSeeder::class,
            RefKepemilikanEmasSeeder::class,
            RefKepemilikanTabunganSeeder::class,
            RefKepemilikanTernakSeeder::class,
            RefKriteriaSeeder::class,
            RefLantaiSeeder::class,
            RefLuasPekaranganSeeder::class,
            RefPendapatanSeeder::class,
            RefSaranaAirBersihSeeder::class,
            RefSaranaPrasaranaSeeder::class,
            RefStatusKepemilikanLahanSeeder::class,
            RefStatusKepemilikanRumahSeeder::class,
            RefStatusKepemilikanTernakSeeder::class,
            RefSuratTanahSeeder::class,
            RefUkuranLahanSeeder::class,
            RefUkuranRumahSeeder::class
        ]);
    }
}
