@extends('adminlte::page')

@section('title', 'Input Data Keluarga')

@section('content_header')
    <h1 class="m-0 text-dark">Input Data Keluarga</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card card-secondary card-primary">
                <div class="card-header">
                    <h3 class="card-title">Input Informasi Dasar Kepala Keluarga</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>

                </div>
                    <div class="card-body">
                        <form>

                        <div class="row">
                            <div class="col-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="inputNoKartuKeluarga" placeholder="Nomer Kartu Keluarga (KK)">
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="inputTempatLahir" placeholder="Tempat Lahir">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-7">
                                        <input type="date" class="form-control" id="inputTanggalLahir" placeholder="Tanggal Lahir">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="inputNIK" placeholder="Nomor Induk Kependudukan (NIK)">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="inputKecamatan" placeholder="Kecamatan">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="inputKelurahan" placeholder="Kelurahan">
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="inputRW" placeholder="RW">
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="inputRT" placeholder="RT">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="inputNamaKepalaKeluarga" placeholder="Nama Kepala Keluarga">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="inputJumlahAnggotaKeluarga" placeholder="Jumlah Anggota Keluarga">
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Input Informasi Kondisi Rumah</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>

                </div>
                    <div class="card-body" style="display: none;">
                        <form>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-Dinding" class="col-sm-3 col-form-label">Dinding</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputRumah-Dinding" placeholder="Pilih Dinding">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-Atap" class="col-sm-3 col-form-label">Atap</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputRumah-Atap" placeholder="Pilih Atap">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-Lantai" class="col-sm-3 col-form-label">Lantai</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputRumah-Lantai" placeholder="Pilih Lantai">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-SuratTanah" class="col-sm-3 col-form-label">Surat Tanah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputRumah-SuratTanah" placeholder="Masukkan Surat Tanah">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-StatusKepemilikan" class="col-sm-3 col-form-label">Sts.Kepemilikan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputRumah-StatusKepemilikan" placeholder="Pilih Status Kepemilikan">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-UkuranTanah" class="col-sm-3 col-form-label">Ukuran Tanah</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputRumah-UkuranTanah" placeholder="Masukkan Ukuran Tanah">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-LuasTanahPekarangan" class="col-sm-3 col-form-label">Luas Tanah Pekarangan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputRumah-LuasTanahPekarangan" placeholder="Masukkan Luas Tanah Pekarangan">
                                    </div>
                                </div>
                            </div>

                        </div>
                        </form>

                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Input Informasi Kepemilikan Ternak Besar</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>

                </div>
                <div class="card-body" style="display: none;">
                    <form>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputTernak-TernakKerbau" class="col-sm-3 col-form-label">Ternak Kerbau</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTernak-TernakKerbau" placeholder="Jumlah Ternak Kerbau">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputTernak-TernakSapi" class="col-sm-3 col-form-label">Ternak Sapi</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTernak-TernakSapi" placeholder="Jumlah Ternak Sapi">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputTernak-Kuda" class="col-sm-3 col-form-label">Ternak Kuda</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTernak-Kuda" placeholder="Jumlah Ternak Kuda">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputTernak-Kambing" class="col-sm-3 col-form-label">Ternak Kambing</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTernak-Kambing" placeholder="Jumlah Ternak Kambing">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputTernak-Domba" class="col-sm-3 col-form-label">Ternak Domba</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTernak-Domba" placeholder="Jumlah Ternak Domba">
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputTernak-TernakBesarLain" class="col-sm-3 col-form-label">Ternak Besar Lain</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTernak-TernakBesarLain" placeholder="Jumlah Ternak Besar Lain">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputTernak-StatusKepemilikan" class="col-sm-3 col-form-label">Status Kepemilikan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" id="inputTernak-StatusKepemilikan" placeholder="Pilih Status Kepemilikan">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@stop
