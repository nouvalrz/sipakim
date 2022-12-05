<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\RefClusterWilayah;

class RefClusterWilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_cluster_wilayah')->delete();
        $ref_cluster_wilayah = [
            [
                'rt' => '001',
                'rw' => '001',
                'lingkungan' => 'Ranggo',
                'kelurahan' => 'Nae',
                'kecamatan' => 'Rasanae Barat'
            ],
            [
                'rt' => '002',
                'rw' => '001',
                'lingkungan' => 'Ranggo',
                'kelurahan' => 'Nae',
                'kecamatan' => 'Rasanae Barat'
            ],
            [
                'rt' => '003',
                'rw' => '001',
                'lingkungan' => 'Ranggo',
                'kelurahan' => 'Nae',
                'kecamatan' => 'Rasanae Barat'
            ],
            [
                'rt' => '004',
                'rw' => '001',
                'lingkungan' => 'Tolomundu',
                'kelurahan' => 'Nae',
                'kecamatan' => 'Rasanae Barat'
            ],
            [
                'rt' => '005',
                'rw' => '002',
                'lingkungan' => 'Nae',
                'kelurahan' => 'Nae',
                'kecamatan' => 'Rasanae Barat'
            ],
            [
                'rt' => '006',
                'rw' => '002',
                'lingkungan' => 'Nae',
                'kelurahan' => 'Nae',
                'kecamatan' => 'Rasanae Barat'
            ],
            [
                'rt' => '007',
                'rw' => '002',
                'lingkungan' => 'Nae',
                'kelurahan' => 'Nae',
                'kecamatan' => 'Rasanae Barat'
            ],
            [
                'rt' => '008',
                'rw' => '003',
                'lingkungan' => 'Salama',
                'kelurahan' => 'Nae',
                'kecamatan' => 'Rasanae Barat'
            ],
            [
                'rt' => '009',
                'rw' => '003',
                'lingkungan' => 'Salama',
                'kelurahan' => 'Nae',
                'kecamatan' => 'Rasanae Barat'
            ],
            [
                'rt' => '010',
                'rw' => '003',
                'lingkungan' => 'Salama',
                'kelurahan' => 'Nae',
                'kecamatan' => 'Rasanae Barat'
            ],
            [
                'rt' => '011',
                'rw' => '004',
                'lingkungan' => 'Salama',
                'kelurahan' => 'Nae',
                'kecamatan' => 'Rasanae Barat'
            ],
            [
                'rt' => '012',
                'rw' => '004',
                'lingkungan' => 'Salama',
                'kelurahan' => 'Nae',
                'kecamatan' => 'Rasanae Barat'
            ],
            [
                'rt' => '013',
                'rw' => '004',
                'lingkungan' => 'Salama',
                'kelurahan' => 'Nae',
                'kecamatan' => 'Rasanae Barat'
            ],
        ];
        RefClusterWilayah::insert($ref_cluster_wilayah);
    }
}
