@extends('adminlte::page')

@section('title', 'Input Data Keluarga')

@section('content_header')
    <h1 class="m-0 text-dark">Input Data Keluarga</h1>
@stop

@section('content')
<form>
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
                        <div class="row">
                            <div class="col-5">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('no_kk') is-invalid @enderror" id="inputNoKartuKeluarga" name="no_kk" placeholder="Nomer Kartu Keluarga (KK)">
                                    @error('no_kk') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" id="inputTempatLahir" name="tempat_lahir" placeholder="Tempat Lahir">
                                    @error('tempat_lahir') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-7">
                                        <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" id="inputTanggalLahir" name="tanggal_lahir" placeholder="Tanggal Lahir">
                                        @error('tanggal_lahir') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nik') is-invalid @enderror" id="inputNIK" name="nik" placeholder="Nomor Induk Kependudukan (NIK)">
                                    @error('nik') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan" id="inputKecamatan" placeholder="Kecamatan">
                                    @error('kecamatan') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" name="kelurahan" id="inputKelurahan" placeholder="Kelurahan">
                                    @error('kelurahan') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('lingkungan') is-invalid @enderror" name="lingkungan" id="inputLingkungan" placeholder="Lingkungan">
                                    @error('lingkungan') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('rw') is-invalid @enderror" name="rw" id="inputRW" placeholder="RW">
                                    @error('rw') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('rt') is-invalid @enderror" name="rt" id="inputRT" placeholder="RT">
                                    @error('rt') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nama_kepala') is-invalid @enderror" name="nama_kepala" id="inputNamaKepalaKeluarga" placeholder="Nama Kepala Keluarga">
                                    @error('nama_kepala') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('jumlah_anggota') is-invalid @enderror" id="inputJumlahAnggotaKeluarga" name="jumlah_anggota" placeholder="Jumlah Anggota Keluarga">
                                    @error('jumlah_anggota') <span class="text-danger">{{$message}}</span> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Input Informasi Pendapatan Keluarga</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>

                </div>
                <div class="card-body" style="display: none;">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputPendapatan-Suami" class="col-sm-3 col-form-label">Pendapatan Suami</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_pendapatan_suami_id') is-invalid @enderror" id="inputPendapatan-Suami" name="ref_pendapatan_suami_id">
                                            <option value="">Pilih Pendapatan Suami</option>
                                        </select>
                                        @error('ref_pendapatan_suami_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputPendapatan-Istri" class="col-sm-3 col-form-label">Pendapatan Istri</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_pendapatan_istri_id') is-invalid @enderror" id="inputPendapatan-Istri" name="ref_pendapatan_istri_id">
                                            <option value="">Pilih Pendapatan Istri</option>
                                        </select>
                                        @error('ref_pendapatan_istri_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputPendapatan-Anak" class="col-sm-3 col-form-label">Pendapatan Anak</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_pendapatan_anak_id') is-invalid @enderror" id="inputPendapatan-Anak" name="ref_pendapatan_anak_id">
                                            <option value="">Pilih Pendapatan Anak</option>
                                        </select>
                                        @error('ref_pendapatan_anak_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputPendapatan-OrangTua" class="col-sm-3 col-form-label">Pendapatan Orang Tua</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_pendapatan_orangtua_id') is-invalid @enderror" id="inputPendapatan-OrangTua" name="ref_pendapatan_orangtua_id">
                                            <option value="">Pilih Pendapatan Orang Tua</option>
                                        </select>
                                        @error('ref_pendapatan_orangtua_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Input Informasi Pendukung Rumah Tangga</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>

                </div>
                <div class="card-body" style="display: none;">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumahTangga-Transportasi" class="col-sm-3 col-form-label">Alat Transportasi</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_alat_transportasi_id') is-invalid @enderror" id="inputRumahTangga-Transportasi" name="ref_alat_transportasi_id">
                                            <option value="">Pilih Alat Transportasi</option>
                                        </select>
                                        @error('ref_alat_transportasi_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputRumahTangga-Penerangan" class="col-sm-3 col-form-label">Alat Penerangan</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_alat_penerangan_id') is-invalid @enderror" id="inputRumahTangga-Penerangan" name="ref_alat_penerangan_id">
                                            <option value="">Pilih Alat Penerangan</option>
                                        </select>
                                        @error('ref_alat_penerangan_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputRumahTangga-DayaListrik" class="col-sm-3 col-form-label">Daya Listrik</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_daya_listrik_id') is-invalid @enderror" id="inputRumahTangga-DayaListrik" name="ref_daya_listrik_id">
                                            <option value="">Pilih Daya Listrik</option>
                                        </select>
                                        @error('ref_daya_listrik_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumahTangga-SaranaAirBersih" class="col-sm-3 col-form-label">Sarana Air Bersih</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_sarana_air_bersih_id') is-invalid @enderror" id="inputRumahTangga-SaranaAirBersih" name="ref_sarana_air_bersih_id">
                                            <option value="">Pilih Sarana Air Bersih</option>
                                        </select>
                                        @error('ref_sarana_air_bersih_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputRumahTangga-KemampuanBerobat" class="col-sm-3 col-form-label">Kemampuan Berobat</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_kemampuan_berobat_id') is-invalid @enderror" id="inputRumahTangga-KemampuanBerobat" name="ref_kemampuan_berobat_id">
                                            <option value="">Pilih Kemampuan Berobat</option>
                                        </select>
                                        @error('ref_kemampuan_berobat_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputRumahTangga-JenisJamban" class="col-sm-3 col-form-label">Jenis Jamban</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_jenis_jamban_id') is-invalid @enderror" id="inputRumahTangga-JenisJamban" name="ref_jenis_jamban_id">
                                            <option value="">Pilih Jenis Jamban</option>
                                        </select>
                                        @error('ref_jenis_jamban_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumahTangga-Septitank" class="col-sm-3 col-form-label">Jenis Septitank</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_jenis_septitank_id') is-invalid @enderror" id="inputRumahTangga-Septitank" name="ref_jenis_septitank_id">
                                            <option value="">Pilih Jenis Septitank</option>
                                        </select>
                                        @error('ref_jenis_septitank_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputRumahTangga-BahanBakar" class="col-sm-3 col-form-label">Bahan Bakar</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_bahan_bakar_id') is-invalid @enderror" id="inputRumahTangga-BahanBakar" name="ref_bahan_bakar_id">
                                            <option value="">Pilih Bahan Bakar</option>
                                        </select>
                                        @error('ref_bahan_bakar_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputRumahTangga-JenisPembuangan" class="col-sm-3 col-form-label">Jenis Pembuangan</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_jenis_pembuangan_id') is-invalid @enderror" id="inputRumahTangga-JenisPembuangan" name="ref_jenis_pembuangan_id">
                                            <option value="">Pilih Jenis Pembuangan</option>
                                        </select>
                                        @error('ref_jenis_pembuangan_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumahTangga-Pemilahan" class="col-sm-3 col-form-label">Jenis Pemilahan</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_jenis_pemilahan_id') is-invalid @enderror" id="inputRumahTangga-Pemilahan" name="ref_jenis_pemilahan_id">
                                            <option value="">Pilih Jenis Pemilahan</option>
                                        </select>
                                        @error('ref_jenis_pemilahan_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputRumahTangga-KepemilikanTabungan" class="col-sm-3 col-form-label">Kepemilikan Tabungan</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_kepemilikan_tabungan_id') is-invalid @enderror" id="inputRumahTangga-KepemilikanTabungan" name="ref_kepemilikan_tabungan_id">
                                            <option value="">Pilih Kepemilikan Tabungan</option>
                                        </select>
                                        @error('ref_kepemilikan_tabungan_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputRumahTangga-KepemilikanEmas" class="col-sm-3 col-form-label">Kepemilikan Emas</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_kepemilikan_emas_id') is-invalid @enderror" id="inputRumahTangga-KepemilikanEmas" name="ref_kepemilikan_emas_id">
                                            <option value="">Pilih Kepemilikan Emas</option>
                                        </select>
                                        @error('ref_kepemilikan_emas_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumahTangga-SarprasKeluarga" class="col-sm-3 col-form-label">Sarana/Prasarana Keluarga</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_sarana_prasarana_id') is-invalid @enderror" id="inputRumahTangga-SarprasKeluarga" name="ref_sarana_prasarana_id">
                                            <option value="">Pilih Sarpras</option>
                                        </select>
                                        @error('ref_sarana_prasarana_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputRumahTangga-BeliPakaian" class="col-sm-3 col-form-label">Kemampuan Beli Pakaian per Tahun</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_kemampuan_beli_pakaian_id') is-invalid @enderror" id="inputRumahTangga-BeliPakaian" name="ref_kemampuan_beli_pakaian_id">
                                            <option value="">Pilih Kemampuan Beli Pakaian</option>
                                        </select>
                                        @error('ref_kemampuan_beli_pakaian_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-Dinding" class="col-sm-3 col-form-label">Dinding</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_dinding_id') is-invalid @enderror" id="inputRumah-Dinding" name="ref_dinding_id">
                                            <option value="">Pilih Dinding</option>
                                        </select>
                                        @error('ref_dinding_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-Atap" class="col-sm-3 col-form-label">Atap</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_atap_id') is-invalid @enderror" id="inputRumah-Atap" name="ref_atap_id">
                                            <option value="">Pilih Atap</option>
                                        </select>
                                        @error('ref_atap_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-Lantai" class="col-sm-3 col-form-label">Lantai</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_lantai_id') is-invalid @enderror" id="inputRumah-Lantai" name="ref_lantai_id">
                                            <option value="">Pilih Lantai</option>
                                        </select>
                                        @error('ref_lantai_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-SuratTanah" class="col-sm-3 col-form-label">Surat Tanah</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_surat_tanah_id') is-invalid @enderror" id="inputRumah-SuratTanah" name="ref_surat_tanah_id">
                                            <option value="">Pilih Surat Tanah</option>
                                        </select>
                                        @error('ref_surat_tanah_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-StatusKepemilikan" class="col-sm-3 col-form-label">Sts.Kepemilikan</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_status_kepemilikan_rumah_id') is-invalid @enderror" id="inputRumah-StatusKepemilikan" name="ref_status_kepemilikan_rumah_id">
                                            <option value="">Pilih Status Kepemilikan</option>
                                        </select>
                                        @error('ref_status_kepemilikan_rumah_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-UkuranTanah" class="col-sm-3 col-form-label">Ukuran Tanah</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_ukuran_rumah_id') is-invalid @enderror" id="inputRumah-UkuranTanah" name="ref_ukuran_rumah_id">
                                            <option value="">Pilih Ukuran Tanah</option>
                                        </select>
                                        @error('ref_ukuran_rumah_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-LuasTanahPekarangan" class="col-sm-3 col-form-label">Luas Tanah Pekarangan</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_luas_pekarangan_id') is-invalid @enderror" id="inputRumah-LuasTanahPekarangan" name="ref_luas_pekarangan_id">
                                            <option value="">Pilih Luas Tanah Pekarangan</option>
                                        </select>
                                        @error('ref_luas_pekarangan_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Input Informasi Kepemilikan Lahan Sawah</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>

                </div>
                <div class="card-body" style="display: none;">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputSawah-Ukuran" class="col-sm-3 col-form-label">Ukuran Sawah</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_ukuran_lahan_sawah_id') is-invalid @enderror" id="inputSawah-Ukuran" name="ref_ukuran_lahan_sawah_id">
                                            <option value="">Pilih Ukuran Sawah</option>
                                        </select>
                                        @error('ref_ukuran_lahan_sawah_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputSawah-StatusKepemilikan" class="col-sm-3 col-form-label">Status Kepemilikan</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_status_kepemilikan_sawah_id') is-invalid @enderror" id="inputSawah-StatusKepemilikan" name="ref_status_kepemilikan_sawah_id">
                                            <option value="">Pilih Status Kepemilikan</option>
                                        </select>
                                        @error('ref_status_kepemilikan_sawah_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputSawah-StatusPengelolaan" class="col-sm-3 col-form-label">Status Pengelolaan</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_status_pengelolaan_sawah_id') is-invalid @enderror" id="inputSawah-StatusPengelolaan" name="ref_status_pengelolaan_sawah_id">
                                            <option value="">Pilih Status Pengelolaan</option>
                                        </select>
                                        @error('ref_status_pengelolaan_sawah_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Input Informasi Kepemilikan Lahan Kebun</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>

                </div>
                <div class="card-body" style="display: none;">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputKebun-Ukuran" class="col-sm-3 col-form-label">Ukuran Kebun</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_ukuran_lahan_kebun_id') is-invalid @enderror" id="inputKebun-Ukuran" name="ref_ukuran_lahan_kebun_id">
                                            <option value="">Pilih Ukuran Kebun</option>
                                        </select>
                                        @error('ref_ukuran_lahan_kebun_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputKebun-StatusKepemilikan" class="col-sm-3 col-form-label">Status Kepemilikan</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_status_kepemilikan_kebun_id') is-invalid @enderror" id="inputKebun-StatusKepemilikan" name="ref_status_kepemilikan_kebun_id">
                                            <option value="">Pilih Status Kepemilikan</option>
                                        </select>
                                        @error('ref_status_kepemilikan_kebun_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputKebun-StatusPengelolaan" class="col-sm-3 col-form-label">Status Pengelolaan</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_status_pengelolaan_kebun_id') is-invalid @enderror" id="inputKebun-StatusPengelolaan" name="ref_status_pengelolaan_kebun_id">
                                            <option value="">Pilih Status Pengelolaan</option>
                                        </select>
                                        @error('ref_status_pengelolaan_kebun_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputTernakBesar-Kepemilikan" class="col-sm-3 col-form-label">Kepemilikan Ternak Besar</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_kepemilikan_ternak_besar_id') is-invalid @enderror" id="inputTernakBesar-Kepemilikan" name="ref_kepemilikan_ternak_besar_id">
                                            <option value="">Pilih Kepemilikan Ternak Besar</option>
                                        </select>
                                        @error('ref_kepemilikan_ternak_besar_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputTernakBesar-StatusKepemilikan" class="col-sm-3 col-form-label">Status Kepemilikan</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_status_kepemilikan_ternak_besar_id') is-invalid @enderror" id="inputTernakBesar-StatusKepemilikan" name="ref_status_kepemilikan_ternak_besar_id">
                                            <option value="">Pilih Status Kepemilikan</option>
                                        </select>
                                        @error('ref_status_kepemilikan_ternak_besar_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card collapsed-card">
                <div class="card-header">
                    <h3 class="card-title">Input Informasi Kepemilikan Ternak Kecil</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>

                </div>
                <div class="card-body" style="display: none;">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputTernakKecil-Kepemilikan" class="col-sm-3 col-form-label">Kepemilikan Ternak Kecil</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_kepemilikan_ternak_kecil_id') is-invalid @enderror" id="inputTernakKecil-Kepemilikan" name="ref_kepemilikan_ternak_kecil_id">
                                            <option value="">Pilih Kepemilikan Ternak Kecil</option>
                                        </select>
                                        @error('ref_kepemilikan_ternak_kecil_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputTernakKecil-StatusKepemilikan" class="col-sm-3 col-form-label">Status Kepemilikan</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_status_kepemilikan_ternak_kecil_id') is-invalid @enderror" id="inputTernakKecil-StatusKepemilikan" name="ref_status_kepemilikan_ternak_kecil_id">
                                            <option value="">Pilih Status Kepemilikan</option>
                                        </select>
                                        @error('ref_status_kepemilikan_ternak_kecil_id') <span class="text-danger">{{$message}}</span> @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</form>
@stop
