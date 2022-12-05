@extends('adminlte::page')

@section('title', 'Dashbaord')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="small-box bg-info">
        <div class="inner" style="  text-align: center;">
            <p>Jumlah Data Keluarga</p>
            <h1><b>150</b></h1>
        </div>
        {{-- <div class="icon">
            <i class="fas fa-shopping-cart"></i>
        </div> --}}

    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box bg-success">
                <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Jumlah Keluarga Miskin</span>
                    <span class="info-box-number" style="font-size: 30px"><b>41</b></span>
              
                    <span >
                        Keluarga yang tidak memenuhi salah satu dari 6 (enam) indikator Keluarga Sejahtera I (KS I) atau indikator "kebutuhan dasar keluarga" (basic needs) sehingga di kategorikan pada klasifikasi keluarga Keluarga Miskin.
                    </span>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-bookmark"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Keluarga Sejahtera I</span>
                    <span class="info-box-number">41,410</span>
            
                    <span >
                        Keluarga Sejahtera I yaitu keluarga mampu memenuhi 6 (enam) indikator tahapan KS I, tetapi tidak memenuhi salah satu dari 8 (delapan) indikator Keluarga Sejahtera II atau indikator ”kebutuhan psikologis” (psychological needs) keluarga.
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-bookmark"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Keluarga Sejahtera II</span>
                    <span class="info-box-number">41,410</span>
            
                    <span >
                        Keluarga Sejahtera II yaitu keluarga yang mampu memenuhi 6 (enam) indikator tahapan KS I dan 8 (delapan) indikator KS II, tetapi tidak memenuhi salah satu dari 5 (lima) indikator Keluarga Sejahtera III (KS III), atau indikator ”kebutuhan pengembangan” (develomental needs) dari keluarga.
                    </span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-12">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-bookmark"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Keluarga Sejahtera III</span>
                    <span class="info-box-number">41,410</span>
            
                    <span >
                        Keluarga Sejahtera III yaitu keluarga yang mampu memenuhi 6 (enam) indikator tahapan KS I, 8 (delapan) indikator KS II, dan 5 (lima) indikator KS III, tetapi tidak memenuhi salah satu dari 2 (dua) indikator Keluarga Sejahtera III Plus (KS III Plus) atau indikator ”aktualisasi diri” (self esteem) keluarga.
                    </span>
                </div>
            </div>
        </div>


    </div>
@stop
