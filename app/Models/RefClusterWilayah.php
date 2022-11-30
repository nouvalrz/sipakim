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
}
