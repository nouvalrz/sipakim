<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnalisaKeluarga extends Model
{
    use HasFactory;
    protected $table = 'analisa_keluarga';

    protected $fillable = [
        'potensi_keluarga_id', 'hasil_perhitungan', 'ref_klasifikasi_id', 'created_at', 'updated_at', 'deleted_at',
    ];
}
