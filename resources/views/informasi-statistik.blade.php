@extends('adminlte::page')

@section('title', 'Informasi Statistik')

@section('content_header')
    <h1 class="m-0 text-dark">Informasi Statistik</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                            <tr>
                                <th style="text-align: center;">No</th>
                                <th>Kecamatan</th>
                                <th>Kelurahan</th>
                                <th>Lingkungan</th>
                                <th style="text-align: center;">RW</th>
                                <th style="text-align: center;">RT</th>
                                <th style="text-align: center;">Miskin</th>
                                <th style="text-align: center;">Tidak Miskin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_statistik as $key => $statistik )
                                <tr>
                                    <td style="text-align: center;">
                                        {{ $key + 1 }}
                                    </td>
                                    <td>
                                        {{ $statistik->kecamatan }}
                                    </td>
                                    <td>
                                        {{ $statistik->kelurahan }}
                                    </td>
                                    <td>
                                        {{ $statistik->lingkungan }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $statistik->rw }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $statistik->rt }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $statistik->miskin }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $statistik->tidak_miskin }}
                                    </td>    
                                </tr>
                            @endforeach 
                            @foreach ($total_statistik as $total)
                                <tr>
                                    <td colspan="6" style="text-align: right;"><b>Jumlah</b></td>
                                    <td style="text-align: center;">
                                        {{ $total->miskin }}
                                    </td>
                                    <td style="text-align: center;">
                                        {{ $total->tidak_miskin }}
                                    </td>  
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
