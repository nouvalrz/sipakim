<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluarga;
use App\Models\RefClusterWilayah;
use App\Models\RefPendapatan;
use App\Models\RefAlatTransportasi;
use App\Models\RefAlatPenerangan;
use App\Models\RefDayaListrik;
use App\Models\RefSaranaAirBersih;
use App\Models\RefKemampuanBerobat;
use App\Models\RefJenisJamban;
use App\Models\RefJenisSeptitank;
use App\Models\RefBahanBakar;
use App\Models\RefJenisPembuangan;
use App\Models\RefJenisPemilahan;
use App\Models\RefKepemilikanTabungan;
use App\Models\RefKepemilikanEmas;
use App\Models\RefSaranaPrasarana;
use App\Models\RefKemampuanBeliPakaian;
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
        $cluster_wilayah = RefClusterWilayah::get_all();
        // Input Pendapatan
        $pendapatan = RefPendapatan::get_all();
        // Input Pendukung Rumah Tangga
        $alat_transportasi = RefAlatTransportasi::get_all();
        $alat_penerangan = RefAlatPenerangan::get_all();
        $daya_listrik = RefDayaListrik::get_all();
        $sarana_air_bersih = RefSaranaAirBersih::get_all();
        $kemampuan_berobat = RefKemampuanBerobat::get_all();
        $jenis_jamban = RefJenisJamban::get_all();
        $jenis_septitank = RefJenisSeptitank::get_all();
        $bahan_bakar = RefBahanBakar::get_all();
        $jenis_pembuangan = RefJenisPembuangan::get_all();
        $jenis_pemilahan = RefJenisPemilahan::get_all();
        $kepemilikan_tabungan = RefKepemilikanTabungan::get_all();
        $kepemilikan_emas = RefKepemilikanEmas::get_all();
        $sarana_prasarana = RefSaranaPrasarana::get_all();
        $kemampuan_beli_pakaian = RefKemampuanBeliPakaian::get_all();
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
            'cluster_wilayah' => $cluster_wilayah,
            'pendapatan' => $pendapatan,
            'alat_transportasi' => $alat_transportasi,
            'alat_penerangan' => $alat_penerangan,
            'daya_listrik' => $daya_listrik,
            'sarana_air_bersih' => $sarana_air_bersih,
            'kemampuan_berobat' => $kemampuan_berobat,
            'jenis_jamban' => $jenis_jamban,
            'jenis_septitank' => $jenis_septitank,
            'bahan_bakar' => $bahan_bakar,
            'jenis_pembuangan' => $jenis_pembuangan,
            'jenis_pemilahan' => $jenis_pemilahan,
            'kepemilikan_tabungan' => $kepemilikan_tabungan,
            'kepemilikan_emas' => $kepemilikan_emas,
            'sarana_prasarana' => $sarana_prasarana,
            'kemampuan_beli_pakaian' => $kemampuan_beli_pakaian,
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
        $input_data_keluarga = Keluarga::add_data($request);
        if ($input_data_keluarga === true) {
            return redirect()->route('data.index')
                ->with('success_message', 'Berhasil tambah data');
        }

        return redirect()->back()
            ->withInput()
            ->with('error_message', 'Gagal tambah data');
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
