<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RefClusterWilayah;
use App\Models\RefPendapatan;
use App\Models\RefDinding;
use App\Models\RefAtap;
use App\Models\RefLantai;
use App\Models\RefSuratTanah;
use App\Models\RefStatusKepemilikanRumah;
use App\Models\RefUkuranRumah;
use App\Models\RefLuasPekarangan;
use App\Models\RefUkuranLahan;
use App\Models\RefStatusKepemilikanLahan;
use App\Models\RefKepemilikanTernak;
use App\Models\RefStatusKepemilikanTernak;


class InputDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kecamatan = RefClusterWilayah::get_kecamatan();
        // Input Pendapatan
        $pendapatan = RefPendapatan::get_all();
        // Input Pendukung Rumah Tangga

        // Input Rumah
        $dinding = RefDinding::get_all();
        $atap = RefAtap::get_all();
        $lantai = RefLantai::get_all();
        $surat_tanah = RefSuratTanah::get_all();
        $status_milik_rumah = RefStatusKepemilikanRumah::get_all();
        $ukuran_rumah = RefUkuranRumah::get_all();
        $luas_pekarangan = RefLuasPekarangan::get_all();
        // Input Lahan
        $ukuran_lahan = RefUkuranLahan::get_all();
        $status_milik_lahan = RefStatusKepemilikanLahan::get_all();
        // Input Ternak
        $kepemilikan_ternak = RefKepemilikanTernak::get_all();
        $status_milik_ternak = RefStatusKepemilikanTernak::get_all();

        return view('input-data-keluarga', [
            'kecamatan' => $kecamatan,
            'pendapatan' => $pendapatan,
            'dinding' => $dinding,
            'atap' => $atap,
            'lantai' => $lantai,
            'surat_tanah' => $surat_tanah,
            'status_milik_rumah' => $status_milik_rumah,
            'ukuran_rumah' => $ukuran_rumah,
            'luas_pekarangan' => $luas_pekarangan,
            'ukuran_lahan' => $ukuran_lahan,
            'status_milik_lahan' => $status_milik_lahan,
            'kepemilikan_ternak' => $kepemilikan_ternak,
            'status_milik_ternak' => $status_milik_ternak,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
