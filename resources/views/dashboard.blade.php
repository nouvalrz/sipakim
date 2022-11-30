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
                        Keluarga yang tidak memenuhi salah satu dari 6 (enam) indikator Keluarga Sejahtera I (KS I) atau indikator ”kebutuhan dasar keluarga” (basic needs).
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
            
                    <span class="progress-description">
                        70% Increase in 30 Days
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
            
                    <span class="progress-description">
                        70% Increase in 30 Days
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
            
                    <span class="progress-description">
                        70% Increase in 30 Days
                    </span>
                </div>
            </div>
        </div>


    </div>
@stop
