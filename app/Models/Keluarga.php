<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluarga extends Model
{
    use HasFactory;
    protected $table = 'keluarga';

    protected $fillable = [
        'no_kk', 'nik', 'nama_kepala', 'tempat_lahir', 'tanggal_lahir', 'cluster_wilayah_id', 'jumlah_anggota_id', 'created_at', 'updated_at', 'deleted_at',
    ];

    protected function cluster_wilayah()
    {
        return $this->belongsTo('App\Models\RefClusterWilayah', 'cluster_wilayah_id');
    }

    protected function jumlah_anggota()
    {
        return $this->belongsTo('App\Models\RefJumlahAnggota', 'jumlah_anggota_id');
    }
}