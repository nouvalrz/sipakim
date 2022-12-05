<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefClusterWilayah extends Model
{
    use HasFactory;
    protected $table = 'ref_cluster_wilayah';

    protected $fillable = [
        'rt', 'rw', 'lingkungan', 'kelurahan', 'kecamatan', 'created_at', 'updated_at', 'deleted_at',
    ];

    protected function get_kecamatan()
    {
        return $this::select('kecamatan')
            ->groupBy('kecamatan')
            ->get();
    }

    protected function get_kelurahan($kecamatan)
    {
        return $this::select('kelurahan')
            ->where("kecamatan", $kecamatan)
            ->groupBy('kelurahan')
            ->get();
    }

    protected function get_lingkungan($kecamatan, $kelurahan)
    {
        return $this::select('lingkungan')
            ->where("kecamatan", $kecamatan)
            ->where("kelurahan", $kelurahan)
            ->groupBy('lingkungan')
            ->get();
    }

    protected function get_rw($kecamatan, $kelurahan, $lingkungan)
    {
        return $this::select('rw')
            ->where("kecamatan", $kecamatan)
            ->where("kelurahan", $kelurahan)
            ->where("lingkungan", $lingkungan)
            ->groupBy('rw')
            ->get();
    }

    protected function get_rt($kecamatan, $kelurahan, $lingkungan, $rw)
    {
        return $this::select('rt')
            ->where("kecamatan", $kecamatan)
            ->where("kelurahan", $kelurahan)
            ->where("lingkungan", $lingkungan)
            ->where("rw", $rw)
            ->groupBy('rt')
            ->get();
    }

    protected function get_cluster_id($kecamatan, $kelurahan, $lingkungan, $rw, $rt)
    {
        return $this::select('id')
            ->where("kecamatan", $kecamatan)
            ->where("kelurahan", $kelurahan)
            ->where("lingkungan", $lingkungan)
            ->where("rw", $rw)
            ->where("rt", $rt)
            ->groupBy('id')
            ->first();
    }
}
