<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefUkuranRumah extends Model
{
    use HasFactory;
    protected $table = 'ref_ukuran_rumah';

    protected $fillable = [
        'nama', 'bobot', 'ref_kriteria_id', 'created_at', 'updated_at', 'deleted_at',
    ];
    
    protected function ref_kriteria()
    {
        return $this->belongsTo('App\Models\RefKriteria', 'ref_kriteria_id');
    }
}
