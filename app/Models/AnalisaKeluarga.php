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

    protected function potensi_keluarga()
    {
        return $this->belongsTo('App\Models\PotensiKeluarga', 'potensi_keluarga_id');
    }

    protected function ref_klasifikasi()
    {
        return $this->belongsTo('App\Models\RefKlasifikasi', 'ref_klasifikasi_id');
    }
}
