<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefJumlahAnggota extends Model
{
    use HasFactory;
    protected $table = 'ref_jumlah_anggota';

    protected $fillable = [
        'nama', 'bobot', 'created_at', 'updated_at', 'deleted_at',
    ];
}
