<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefDayaListrik extends Model
{
    use HasFactory;
    protected $table = 'ref_daya_listrik';

    protected $fillable = [
        'nama', 'bobot', 'ref_kriteria_id', 'created_at', 'updated_at', 'deleted_at',
    ];
}
