<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefKlasifikasi extends Model
{
    use HasFactory;
    protected $table = 'ref_klasifikasi';

    protected $fillable = [
        'nama', 'ranking', 'created_at', 'updated_at', 'deleted_at',
    ];
}
