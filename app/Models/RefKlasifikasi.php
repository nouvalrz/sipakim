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

    protected function get_all()
    {
        return $this::get();
    }

    protected function get_by_id($id)
    {
        return $this::Find($id);
    }
}
