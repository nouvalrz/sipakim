<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Imports\KeluargaImport;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use DB;

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

    protected function get_statistik()
    {
        $statistik = DB::select('SELECT a.kecamatan AS kecamatan, a.kelurahan AS kelurahan, a.lingkungan AS lingkungan, a.rw AS rw, a.rt AS rt,
        (SELECT COUNT(k1.id) FROM keluarga k1 
        JOIN potensi_keluarga pk1 ON k1.id=pk1.keluarga_id 
        JOIN analisa_keluarga ak1 ON pk1.id=ak1.potensi_keluarga_id 
        WHERE k1.cluster_wilayah_id = a.id AND ak1.ref_klasifikasi_id = 1) AS miskin,
        
        (SELECT COUNT(k2.id) FROM keluarga k2 
        JOIN potensi_keluarga pk2 ON k2.id=pk2.keluarga_id 
        JOIN analisa_keluarga ak2 ON pk2.id=ak2.potensi_keluarga_id 
        WHERE k2.cluster_wilayah_id = a.id AND ak2.ref_klasifikasi_id = 2) AS tidak_miskin
        FROM ref_cluster_wilayah a;');
        return $statistik;
    }

    protected function get_total_statistik()
    {
        $total_statistik = DB::select('SELECT (SELECT COUNT(keluarga.id) FROM keluarga 
        JOIN potensi_keluarga ON keluarga.id=potensi_keluarga.keluarga_id 
        JOIN analisa_keluarga ON potensi_keluarga.id=analisa_keluarga.potensi_keluarga_id
        WHERE analisa_keluarga.ref_klasifikasi_id = 1) AS miskin,
        (SELECT COUNT(keluarga.id) FROM keluarga 
        JOIN potensi_keluarga ON keluarga.id=potensi_keluarga.keluarga_id 
        JOIN analisa_keluarga ON potensi_keluarga.id=analisa_keluarga.potensi_keluarga_id
        WHERE analisa_keluarga.ref_klasifikasi_id = 2) AS tidak_miskin');
        return $total_statistik;
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
