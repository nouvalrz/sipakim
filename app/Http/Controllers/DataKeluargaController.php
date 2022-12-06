<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluarga;

class DataKeluargaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_keluarga = Keluarga::get_all();
        return view('data-keluarga-miskin', [
            'data_keluarga' => $data_keluarga
        ]);
    }

    public function statistik()
    {
        $data_statistik = Keluarga::get_statistik();
        $total_statistik = Keluarga::get_total_statistik();
        return view('informasi-statistik', [
            'data_statistik' => $data_statistik,
            'total_statistik' => $total_statistik
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
        $data_keluarga = Keluarga::delete_data($id);
        
        if ($data_keluarga === true) {
            return redirect()->route('data.index')
                ->with('success_message', 'Berhasil hapus data');
        }

        return redirect()->route('data.index')
            ->with('error_message', 'Gagal hapus data');
    }    
}
