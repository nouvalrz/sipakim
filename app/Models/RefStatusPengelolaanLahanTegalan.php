<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefStatusPengelolaanLahanTegalan extends Model
{
    use HasFactory;
    protected $table = 'ref_status_pengelolaan_lahan_tegalan';

    protected $fillable = [
        'nama', 'bobot', 'ref_kriteria_id', 'created_at', 'updated_at', 'deleted_at',
    ];
}
