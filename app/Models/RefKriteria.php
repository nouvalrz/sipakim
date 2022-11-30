<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefKriteria extends Model
{
    use HasFactory;
    protected $table = 'ref_kriteria';

    protected $fillable = [
        'nama', 'bobot', 'created_at', 'updated_at', 'deleted_at',
    ];
}
