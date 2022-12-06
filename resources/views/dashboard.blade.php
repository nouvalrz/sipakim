@extends('adminlte::page')

@section('title', 'Dashbaord')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>1</h3>
                    <p>Input Data Keluarga</p>
                </div>
                <div class="icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <a href="/input-data-keluarga" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3>2</h3>
                    <p>Data Keluarga Miskin</p>
                </div>
                <div class="icon">
                    <i class="fas fa-database"></i>
                </div>
                <a href="/data-keluarga-miskin" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
            <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3>3</h3>
                    <p>Informasi Statistik</p>
                </div>
                <div class="icon">
                    <i class="fas fa-chart-bar"></i>

                </div>
                <a href="/informasi-statistik" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
@stop
