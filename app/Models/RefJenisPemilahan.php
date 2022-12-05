<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefJenisPemilahan extends Model
{
    use HasFactory;
    protected $table = 'ref_jenis_pemilahan';

    protected $fillable = [
        'nama', 'bobot', 'ref_kriteria_id', 'created_at', 'updated_at', 'deleted_at',
    ];
    
    protected function ref_kriteria()
    {
        return $this->belongsTo('App\Models\RefKriteria', 'ref_kriteria_id');
    }

    protected function get_all()
    {
        return $this::get();
    }

    protected function get_by_id($id)
    {
        return $this::Find($id);
    }
}
