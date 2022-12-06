<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Imports\KeluargaImport;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class Keluarga extends Model
{
    use HasFactory;
    protected $table = 'keluarga';

    protected $fillable = [
        'no_kk', 'nik', 'nama_kepala', 'tempat_lahir', 'tanggal_lahir', 'cluster_wilayah_id', 'jumlah_anggota', 'created_at', 'updated_at', 'deleted_at',
    ];

    protected function get_all()
    {
        return $this::get();
    }

    protected function add_data($request)
    {
        $request->validate([
            'no_kk' => 'required',
            'nik' => 'required',
            'nama_kepala' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'cluster_wilayah_id' => 'required',
            'jumlah_anggota' => 'required'
        ]);

        try {
            $data = $this::create([
                'no_kk' => $request->no_kk,
                'nik' => $request->nik,
                'nama_kepala' => $request->nama_kepala,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'cluster_wilayah_id' => $request->cluster_wilayah_id,
                'jumlah_anggota' => $request->jumlah_anggota
            ]);
        } catch (Throwable $e) {
            return false;
        }
        return $data;
    }

    protected function edit_data($request, $keluarga)
    {
        $request->validate([
            'no_kk' => 'required',
            'nik' => 'required',
            'nama_kepala' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'cluster_wilayah_id' => 'required',
            'jumlah_anggota' => 'required'
        ]);

        try {
            $keluarga->update([
                'no_kk' => $request->no_kk,
                'nik' => $request->nik,
                'nama_kepala' => $request->nama_kepala,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'cluster_wilayah_id' => $request->cluster_wilayah_id,
                'jumlah_anggota' => $request->jumlah_anggota
            ]);
        } catch (Throwable $e) {
            return false;
        }
        return $keluarga;
    }

    protected function import_data($request)
    {
        $request->validate([
            'file_import' => 'required|mimes:csv,xls,xlsx'
        ]);

        try {
            $file = $request->file('file_import');
            $filename = $file->hashName();
            $path = $file->storeAs('public/excel/', $filename);
            $import = Excel::import(new KeluargaImport(), storage_path('app/public/excel/'.$filename));
            Storage::delete($path);
        } catch (Throwable $e) {
            return false;
        }
        return true;
    }

    protected function delete_data($id)
    {
        $keluarga = $this::Find($id);
        $potensi_keluarga = PotensiKeluarga::where('keluarga_id', $keluarga->id)->first();
        $analisa_keluarga = AnalisaKeluarga::where('potensi_keluarga_id', $potensi_keluarga->id)->first();

        if ($analisa_keluarga->delete() && $potensi_keluarga->delete() && $keluarga->delete()) {
            return true;
        }
        return false;
    }

    protected function cluster_wilayah()
    {
        return $this->belongsTo('App\Models\RefClusterWilayah', 'cluster_wilayah_id');
    }

    protected function jumlah_anggota()
    {
        return $this->belongsTo('App\Models\RefJumlahAnggota', 'jumlah_anggota_id');
    }

    protected function potensi_keluarga()
    {
        return $this->hasOne('App\Models\PotensiKeluarga');
    }
}
