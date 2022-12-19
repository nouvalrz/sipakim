@extends('adminlte::page')

@section('title', 'Input Data Keluarga')

@section('content_header')
    <h1 class="m-0 text-dark">Edit Data Keluarga</h1>
@stop

@section('content')
    {{--    <form action="{{ route('input.import') }}" method="post" enctype="multipart/form-data"> --}}
    {{--        @csrf --}}
    {{--        <div class="row"> --}}
    {{--            <div class="col-12"> --}}
    {{--                <div class="card card-secondary card-primary"> --}}
    {{--                    <div class="card-header"> --}}
    {{--                        <h3 class="card-title">Import Data Keluarga</h3> --}}
    {{--                        <div class="card-tools"> --}}
    {{--                            <button type="button" class="btn btn-tool" data-card-widget="collapse"> --}}
    {{--                                <i class="fas fa-minus"></i> --}}
    {{--                            </button> --}}
    {{--                        </div> --}}
    {{--                    </div> --}}
    {{--                    <div class="card-body"> --}}
    {{--                        <div class="row"> --}}
    {{--                            <div class="input-group"> --}}
    {{--                                <div class="custom-file"> --}}
    {{--                                    <input type="file" class="custom-file-input @error('file_import') is-invalid @enderror" id="inputFile" name="file_import" aria-describedby="inputGroupFileAddon04"> --}}
    {{--                                    <label class="custom-file-label" for="inputGroupFile04">Choose file</label> --}}
    {{--                                </div> --}}
    {{--                                <div class="input-group-append"> --}}
    {{--                                    <button class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04">Import</button> --}}
    {{--                                </div> --}}
    {{--                            </div> --}}
    {{--                            @error('file_import') <span class="text-danger">{{$message}}</span> @enderror --}}
    {{--                        </div> --}}
    {{--                    </div> --}}
    {{--                </div> --}}
    {{--            </div> --}}
    {{--        </div> --}}
    {{--    </form> --}}

    <form action="{{ route('data.update', ['id' => $keluarga->id]) }}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="row">
            <div class="col-12">
                <div class="card collapsed-card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Informasi Dasar Kepala Keluarga</h3>
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
                                    <input type="number" class="form-control @error('no_kk') is-invalid @enderror"
                                        id="inputNoKartuKeluarga" name="no_kk" placeholder="Nomer Kartu Keluarga (KK)"
                                        value="{{ $keluarga->no_kk }}">
                                    @error('no_kk')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror"
                                        id="inputTempatLahir" name="tempat_lahir" placeholder="Tempat Lahir"
                                        value="{{ $keluarga->tempat_lahir }}">
                                    @error('tempat_lahir')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputEmail3" class="col-sm-4 col-form-label">Tanggal Lahir</label>
                                    <div class="col-sm-7">
                                        <input type="date" max="{{ date('Y-m-d') }}"
                                            class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                            id="inputTanggalLahir" name="tanggal_lahir" placeholder="Tanggal Lahir"
                                            value="{{ $keluarga->tanggal_lahir }}">
                                        @error('tanggal_lahir')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <div class="form-group">
                                    <input type="number" class="form-control @error('nik') is-invalid @enderror"
                                        id="inputNIK" name="nik" placeholder="Nomor Induk Kependudukan (NIK)"
                                        value="{{ $keluarga->nik }}">
                                    @error('nik')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <select class="form-control @error('cluster_wilayah_id') is-invalid @enderror"
                                        id="inputClusterWilayah" name="cluster_wilayah_id">
                                        <option value="">Pilih Cluster Wilayah</option>
                                        @foreach ($cluster_wilayah as $ref_cluster_wilayah)
                                            <option value="{{ $ref_cluster_wilayah->id }}"
                                                @if ($keluarga->cluster_wilayah_id == $ref_cluster_wilayah->id) selected @endif>
                                                {{ 'RT ' . $ref_cluster_wilayah->rt . ' - RW ' . $ref_cluster_wilayah->rw . ' - Lingk. ' . $ref_cluster_wilayah->lingkungan . ' - Kel. ' . $ref_cluster_wilayah->kelurahan . ' - Kec. ' . $ref_cluster_wilayah->kecamatan }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('cluster_wilayah_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-5">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('nama_kepala') is-invalid @enderror"
                                        name="nama_kepala" id="inputNamaKepalaKeluarga" placeholder="Nama Kepala Keluarga"
                                        value="{{ $keluarga->nama_kepala }}">
                                    @error('nama_kepala')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" class="form-control @error('jumlah_anggota') is-invalid @enderror"
                                        id="inputJumlahAnggotaKeluarga" name="jumlah_anggota"
                                        placeholder="Jumlah Anggota Keluarga" value="{{ $keluarga->jumlah_anggota }}">
                                    @error('jumlah_anggota')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
                        <h3 class="card-title">Edit Informasi Pendapatan Keluarga</h3>
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
                                    <label for="inputPendapatan-Suami" class="col-sm-3 col-form-label">Pendapatan
                                        Suami</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_pendapatan_suami_id') is-invalid @enderror"
                                            id="inputPendapatan-Suami" name="ref_pendapatan_suami_id">
                                            <option value="">Pilih Pendapatan Suami</option>
                                            @foreach ($pendapatan as $ref_pendapatan)
                                                <option value="{{ $ref_pendapatan->id }}"
                                                    @if ($potensi_keluarga->ref_pendapatan_suami_id == $ref_pendapatan->id) selected @endif>
                                                    {{ $ref_pendapatan->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_pendapatan_suami_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputPendapatan-Istri" class="col-sm-3 col-form-label">Pendapatan
                                        Istri</label>
                                    <div class="col-sm-8">
                                        <select
                                            class="form-control @error('ref_pendapatan_istri_id') is-invalid @enderror"
                                            id="inputPendapatan-Istri" name="ref_pendapatan_istri_id">
                                            <option value="">Pilih Pendapatan Istri</option>
                                            @foreach ($pendapatan as $ref_pendapatan)
                                                <option value="{{ $ref_pendapatan->id }}"
                                                    @if ($potensi_keluarga->ref_pendapatan_istri_id == $ref_pendapatan->id) selected @endif>
                                                    {{ $ref_pendapatan->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_pendapatan_istri_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputPendapatan-Anak" class="col-sm-3 col-form-label">Pendapatan
                                        Anak</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_pendapatan_anak_id') is-invalid @enderror"
                                            id="inputPendapatan-Anak" name="ref_pendapatan_anak_id">
                                            <option value="">Pilih Pendapatan Anak</option>
                                            @foreach ($pendapatan as $ref_pendapatan)
                                                <option value="{{ $ref_pendapatan->id }}"
                                                    @if ($potensi_keluarga->ref_pendapatan_anak_id == $ref_pendapatan->id) selected @endif>
                                                    {{ $ref_pendapatan->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_pendapatan_anak_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputPendapatan-OrangTua" class="col-sm-3 col-form-label">Pendapatan Orang
                                        Tua</label>
                                    <div class="col-sm-8">
                                        <select
                                            class="form-control @error('ref_pendapatan_orangtua_id') is-invalid @enderror"
                                            id="inputPendapatan-OrangTua" name="ref_pendapatan_orangtua_id">
                                            <option value="">Pilih Pendapatan Orang Tua</option>
                                            @foreach ($pendapatan as $ref_pendapatan)
                                                <option value="{{ $ref_pendapatan->id }}"
                                                    @if ($potensi_keluarga->ref_pendapatan_orangtua_id == $ref_pendapatan->id) selected @endif>
                                                    {{ $ref_pendapatan->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_pendapatan_orangtua_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                        <h3 class="card-title">Edit Informasi Pendukung Rumah Tangga</h3>
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
                                    <label for="inputRumahTangga-Transportasi" class="col-sm-3 col-form-label">Alat
                                        Transportasi</label>
                                    <div class="col-sm-8">
                                        <select
                                            class="form-control @error('ref_alat_transportasi_id') is-invalid @enderror"
                                            id="inputRumahTangga-Transportasi" name="ref_alat_transportasi_id">
                                            <option value="">Pilih Alat Transportasi</option>
                                            @foreach ($alat_transportasi as $ref_alat_transportasi)
                                                <option value="{{ $ref_alat_transportasi->id }}"
                                                    @if ($potensi_keluarga->ref_alat_transportasi_id == $ref_alat_transportasi->id) selected @endif>
                                                    {{ $ref_alat_transportasi->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_alat_transportasi_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputRumahTangga-Penerangan" class="col-sm-3 col-form-label">Alat
                                        Penerangan</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_alat_penerangan_id') is-invalid @enderror"
                                            id="inputRumahTangga-Penerangan" name="ref_alat_penerangan_id">
                                            <option value="">Pilih Alat Penerangan</option>
                                            @foreach ($alat_penerangan as $ref_alat_penerangan)
                                                <option value="{{ $ref_alat_penerangan->id }}"
                                                    @if ($potensi_keluarga->ref_alat_penerangan_id == $ref_alat_penerangan->id) selected @endif>
                                                    {{ $ref_alat_penerangan->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_alat_penerangan_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputRumahTangga-DayaListrik" class="col-sm-3 col-form-label">Daya
                                        Listrik</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_daya_listrik_id') is-invalid @enderror"
                                            id="inputRumahTangga-DayaListrik" name="ref_daya_listrik_id">
                                            <option value="">Pilih Daya Listrik</option>
                                            @foreach ($daya_listrik as $ref_daya_listrik)
                                                <option value="{{ $ref_daya_listrik->id }}"
                                                    @if ($potensi_keluarga->ref_daya_listrik_id == $ref_daya_listrik->id) selected @endif>
                                                    {{ $ref_daya_listrik->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_daya_listrik_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumahTangga-SaranaAirBersih" class="col-sm-3 col-form-label">Sarana
                                        Air Bersih</label>
                                    <div class="col-sm-8">
                                        <select
                                            class="form-control @error('ref_sarana_air_bersih_id') is-invalid @enderror"
                                            id="inputRumahTangga-SaranaAirBersih" name="ref_sarana_air_bersih_id">
                                            <option value="">Pilih Sarana Air Bersih</option>
                                            @foreach ($sarana_air_bersih as $ref_sarana_air_bersih)
                                                <option value="{{ $ref_sarana_air_bersih->id }}"
                                                    @if ($potensi_keluarga->ref_sarana_air_bersih_id == $ref_sarana_air_bersih->id) selected @endif>
                                                    {{ $ref_sarana_air_bersih->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_sarana_air_bersih_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputRumahTangga-KemampuanBerobat"
                                        class="col-sm-3 col-form-label">Kemampuan Berobat</label>
                                    <div class="col-sm-8">
                                        <select
                                            class="form-control @error('ref_kemampuan_berobat_id') is-invalid @enderror"
                                            id="inputRumahTangga-KemampuanBerobat" name="ref_kemampuan_berobat_id">
                                            <option value="">Pilih Kemampuan Berobat</option>
                                            @foreach ($kemampuan_berobat as $ref_kemampuan_berobat)
                                                <option value="{{ $ref_kemampuan_berobat->id }}"
                                                    @if ($potensi_keluarga->ref_kemampuan_berobat_id == $ref_kemampuan_berobat->id) selected @endif>
                                                    {{ $ref_kemampuan_berobat->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_kemampuan_berobat_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputRumahTangga-JenisJamban" class="col-sm-3 col-form-label">Jenis
                                        Jamban</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_jenis_jamban_id') is-invalid @enderror"
                                            id="inputRumahTangga-JenisJamban" name="ref_jenis_jamban_id">
                                            <option value="">Pilih Jenis Jamban</option>
                                            @foreach ($jenis_jamban as $ref_jenis_jamban)
                                                <option value="{{ $ref_jenis_jamban->id }}"
                                                    @if ($potensi_keluarga->ref_jenis_jamban_id == $ref_jenis_jamban->id) selected @endif>
                                                    {{ $ref_jenis_jamban->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_jenis_jamban_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumahTangga-Septitank" class="col-sm-3 col-form-label">Jenis
                                        Septitank</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_jenis_septitank_id') is-invalid @enderror"
                                            id="inputRumahTangga-Septitank" name="ref_jenis_septitank_id">
                                            <option value="">Pilih Jenis Septitank</option>
                                            @foreach ($jenis_septitank as $ref_jenis_septitank)
                                                <option value="{{ $ref_jenis_septitank->id }}"
                                                    @if ($potensi_keluarga->ref_jenis_septitank_id == $ref_jenis_septitank->id) selected @endif>
                                                    {{ $ref_jenis_septitank->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_jenis_septitank_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputRumahTangga-BahanBakar" class="col-sm-3 col-form-label">Bahan
                                        Bakar</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_bahan_bakar_id') is-invalid @enderror"
                                            id="inputRumahTangga-BahanBakar" name="ref_bahan_bakar_id">
                                            <option value="">Pilih Bahan Bakar</option>
                                            @foreach ($bahan_bakar as $ref_bahan_bakar)
                                                <option value="{{ $ref_bahan_bakar->id }}"
                                                    @if ($potensi_keluarga->ref_bahan_bakar_id == $ref_bahan_bakar->id) selected @endif>
                                                    {{ $ref_bahan_bakar->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_bahan_bakar_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputRumahTangga-JenisPembuangan" class="col-sm-3 col-form-label">Jenis
                                        Pembuangan</label>
                                    <div class="col-sm-8">
                                        <select
                                            class="form-control @error('ref_jenis_pembuangan_id') is-invalid @enderror"
                                            id="inputRumahTangga-JenisPembuangan" name="ref_jenis_pembuangan_id">
                                            <option value="">Pilih Jenis Pembuangan</option>
                                            @foreach ($jenis_pembuangan as $ref_jenis_pembuangan)
                                                <option value="{{ $ref_jenis_pembuangan->id }}"
                                                    @if ($potensi_keluarga->ref_jenis_pembuangan_id == $ref_jenis_pembuangan->id) selected @endif>
                                                    {{ $ref_jenis_pembuangan->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_jenis_pembuangan_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumahTangga-Pemilahan" class="col-sm-3 col-form-label">Jenis
                                        Pemilahan</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_jenis_pemilahan_id') is-invalid @enderror"
                                            id="inputRumahTangga-Pemilahan" name="ref_jenis_pemilahan_id">
                                            <option value="">Pilih Jenis Pemilahan</option>
                                            @foreach ($jenis_pemilahan as $ref_jenis_pemilahan)
                                                <option value="{{ $ref_jenis_pemilahan->id }}"
                                                    @if ($potensi_keluarga->ref_jenis_pemilahan_id == $ref_jenis_pemilahan->id) selected @endif>
                                                    {{ $ref_jenis_pemilahan->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_jenis_pemilahan_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputRumahTangga-KepemilikanTabungan"
                                        class="col-sm-3 col-form-label">Kepemilikan Tabungan</label>
                                    <div class="col-sm-8">
                                        <select
                                            class="form-control @error('ref_kepemilikan_tabungan_id') is-invalid @enderror"
                                            id="inputRumahTangga-KepemilikanTabungan" name="ref_kepemilikan_tabungan_id">
                                            <option value="">Pilih Kepemilikan Tabungan</option>
                                            @foreach ($kepemilikan_tabungan as $ref_kepemilikan_tabungan)
                                                <option value="{{ $ref_kepemilikan_tabungan->id }}"
                                                    @if ($potensi_keluarga->ref_kepemilikan_tabungan_id == $ref_kepemilikan_tabungan->id) selected @endif>
                                                    {{ $ref_kepemilikan_tabungan->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_kepemilikan_tabungan_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputRumahTangga-KepemilikanEmas"
                                        class="col-sm-3 col-form-label">Kepemilikan Emas</label>
                                    <div class="col-sm-8">
                                        <select
                                            class="form-control @error('ref_kepemilikan_emas_id') is-invalid @enderror"
                                            id="inputRumahTangga-KepemilikanEmas" name="ref_kepemilikan_emas_id">
                                            <option value="">Pilih Kepemilikan Emas</option>
                                            @foreach ($kepemilikan_emas as $ref_kepemilikan_emas)
                                                <option value="{{ $ref_kepemilikan_emas->id }}"
                                                    @if ($potensi_keluarga->ref_kepemilikan_emas_id == $ref_kepemilikan_emas->id) selected @endif>
                                                    {{ $ref_kepemilikan_emas->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_kepemilikan_emas_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumahTangga-SarprasKeluarga"
                                        class="col-sm-3 col-form-label">Sarana/Prasarana Keluarga</label>
                                    <div class="col-sm-8">
                                        <select
                                            class="form-control @error('ref_sarana_prasarana_id') is-invalid @enderror"
                                            id="inputRumahTangga-SarprasKeluarga" name="ref_sarana_prasarana_id">
                                            <option value="">Pilih Sarpras</option>
                                            @foreach ($sarana_prasarana as $ref_sarana_prasarana)
                                                <option value="{{ $ref_sarana_prasarana->id }}"
                                                    @if ($potensi_keluarga->ref_sarana_prasarana_id == $ref_sarana_prasarana->id) selected @endif>
                                                    {{ $ref_sarana_prasarana->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_sarana_prasarana_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputRumahTangga-BeliPakaian" class="col-sm-3 col-form-label">Kemampuan
                                        Beli Pakaian per Tahun</label>
                                    <div class="col-sm-8">
                                        <select
                                            class="form-control @error('ref_kemampuan_beli_pakaian_id') is-invalid @enderror"
                                            id="inputRumahTangga-BeliPakaian" name="ref_kemampuan_beli_pakaian_id">
                                            <option value="">Pilih Kemampuan Beli Pakaian</option>
                                            @foreach ($kemampuan_beli_pakaian as $ref_kemampuan_beli_pakaian)
                                                <option value="{{ $ref_kemampuan_beli_pakaian->id }}"
                                                    @if ($potensi_keluarga->ref_kemampuan_beli_pakaian_id == $ref_kemampuan_beli_pakaian->id) selected @endif>
                                                    {{ $ref_kemampuan_beli_pakaian->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_kemampuan_beli_pakaian_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                        <h3 class="card-title">Edit Informasi Kondisi Rumah</h3>
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
                                        <select class="form-control @error('ref_dinding_id') is-invalid @enderror"
                                            id="inputRumah-Dinding" name="ref_dinding_id">
                                            <option value="">Pilih Dinding</option>
                                            @foreach ($dinding as $ref_dinding)
                                                <option value="{{ $ref_dinding->id }}"
                                                    @if ($potensi_keluarga->ref_dinding_id == $ref_dinding->id) selected @endif>
                                                    {{ $ref_dinding->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_dinding_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-Atap" class="col-sm-3 col-form-label">Atap</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_atap_id') is-invalid @enderror"
                                            id="inputRumah-Atap" name="ref_atap_id">
                                            <option value="">Pilih Atap</option>
                                            @foreach ($atap as $ref_atap)
                                                <option value="{{ $ref_atap->id }}"
                                                    @if ($potensi_keluarga->ref_atap_id == $ref_atap->id) selected @endif>
                                                    {{ $ref_atap->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_atap_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-Lantai" class="col-sm-3 col-form-label">Lantai</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_lantai_id') is-invalid @enderror"
                                            id="inputRumah-Lantai" name="ref_lantai_id">
                                            <option value="">Pilih Lantai</option>
                                            @foreach ($lantai as $ref_lantai)
                                                <option value="{{ $ref_lantai->id }}"
                                                    @if ($potensi_keluarga->ref_lantai_id == $ref_lantai->id) selected @endif>
                                                    {{ $ref_lantai->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_lantai_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-SuratTanah" class="col-sm-3 col-form-label">Surat Tanah</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_surat_tanah_id') is-invalid @enderror"
                                            id="inputRumah-SuratTanah" name="ref_surat_tanah_id">
                                            <option value="">Pilih Surat Tanah</option>
                                            @foreach ($surat_tanah as $ref_surat_tanah)
                                                <option value="{{ $ref_surat_tanah->id }}"
                                                    @if ($potensi_keluarga->ref_surat_tanah_id == $ref_surat_tanah->id) selected @endif>
                                                    {{ $ref_surat_tanah->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_surat_tanah_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-StatusKepemilikan"
                                        class="col-sm-3 col-form-label">Sts.Kepemilikan</label>
                                    <div class="col-sm-8">
                                        <select
                                            class="form-control @error('ref_status_kepemilikan_rumah_id') is-invalid @enderror"
                                            id="inputRumah-StatusKepemilikan" name="ref_status_kepemilikan_rumah_id">
                                            <option value="">Pilih Status Kepemilikan</option>
                                            @foreach ($status_milik_rumah as $ref_status_kepemilikan_rumah)
                                                <option value="{{ $ref_status_kepemilikan_rumah->id }}"
                                                    @if ($potensi_keluarga->ref_status_kepemilikan_rumah_id == $ref_status_kepemilikan_rumah->id) selected @endif>
                                                    {{ $ref_status_kepemilikan_rumah->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_status_kepemilikan_rumah_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-UkuranTanah" class="col-sm-3 col-form-label">Ukuran
                                        Tanah</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_ukuran_rumah_id') is-invalid @enderror"
                                            id="inputRumah-UkuranTanah" name="ref_ukuran_rumah_id">
                                            <option value="">Pilih Ukuran Tanah</option>
                                            @foreach ($ukuran_rumah as $ref_ukuran_rumah)
                                                <option value="{{ $ref_ukuran_rumah->id }}"
                                                    @if ($potensi_keluarga->ref_ukuran_rumah_id == $ref_ukuran_rumah->id) selected @endif>
                                                    {{ $ref_ukuran_rumah->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_ukuran_rumah_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputRumah-LuasTanahPekarangan" class="col-sm-3 col-form-label">Luas Tanah
                                        Pekarangan</label>
                                    <div class="col-sm-8">
                                        <select class="form-control @error('ref_luas_pekarangan_id') is-invalid @enderror"
                                            id="inputRumah-LuasTanahPekarangan" name="ref_luas_pekarangan_id">
                                            <option value="">Pilih Luas Tanah Pekarangan</option>
                                            @foreach ($luas_pekarangan as $ref_luas_pekarangan)
                                                <option value="{{ $ref_luas_pekarangan->id }}"
                                                    @if ($potensi_keluarga->ref_luas_pekarangan_id == $ref_luas_pekarangan->id) selected @endif>
                                                    {{ $ref_luas_pekarangan->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_luas_pekarangan_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                        <h3 class="card-title">Edit Informasi Kepemilikan Lahan Sawah</h3>
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
                                        <select
                                            class="form-control @error('ref_ukuran_lahan_sawah_id') is-invalid @enderror"
                                            id="inputSawah-Ukuran" name="ref_ukuran_lahan_sawah_id">
                                            <option value="">Pilih Ukuran Sawah</option>
                                            @foreach ($ukuran_lahan as $ref_ukuran_lahan_sawah)
                                                <option value="{{ $ref_ukuran_lahan_sawah->id }}"
                                                    @if ($potensi_keluarga->ref_ukuran_lahan_sawah_id == $ref_ukuran_lahan_sawah->id) selected @endif>
                                                    {{ $ref_ukuran_lahan_sawah->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_ukuran_lahan_sawah_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputSawah-StatusKepemilikan" class="col-sm-3 col-form-label">Status
                                        Kepemilikan</label>
                                    <div class="col-sm-8">
                                        <select
                                            class="form-control @error('ref_status_kepemilikan_sawah_id') is-invalid @enderror"
                                            id="inputSawah-StatusKepemilikan" name="ref_status_kepemilikan_sawah_id">
                                            <option value="">Pilih Status Kepemilikan</option>
                                            @foreach ($status_milik_lahan as $ref_status_kepemilikan_sawah)
                                                <option value="{{ $ref_status_kepemilikan_sawah->id }}"
                                                    @if ($potensi_keluarga->ref_status_kepemilikan_sawah_id == $ref_status_kepemilikan_sawah->id) selected @endif>
                                                    {{ $ref_status_kepemilikan_sawah->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_status_kepemilikan_sawah_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                        <h3 class="card-title">Edit Informasi Kepemilikan Lahan Kebun</h3>
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
                                        <select
                                            class="form-control @error('ref_ukuran_lahan_kebun_id') is-invalid @enderror"
                                            id="inputKebun-Ukuran" name="ref_ukuran_lahan_kebun_id">
                                            <option value="">Pilih Ukuran Kebun</option>
                                            @foreach ($ukuran_lahan as $ref_ukuran_lahan_kebun)
                                                <option value="{{ $ref_ukuran_lahan_kebun->id }}"
                                                    @if ($potensi_keluarga->ref_ukuran_lahan_kebun_id == $ref_ukuran_lahan_kebun->id) selected @endif>
                                                    {{ $ref_ukuran_lahan_kebun->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_ukuran_lahan_kebun_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="InputKebun-StatusKepemilikan" class="col-sm-3 col-form-label">Status
                                        Kepemilikan</label>
                                    <div class="col-sm-8">
                                        <select
                                            class="form-control @error('ref_status_kepemilikan_kebun_id') is-invalid @enderror"
                                            id="inputKebun-StatusKepemilikan" name="ref_status_kepemilikan_kebun_id">
                                            <option value="">Pilih Status Kepemilikan</option>
                                            @foreach ($status_milik_lahan as $ref_status_kepemilikan_kebun)
                                                <option value="{{ $ref_status_kepemilikan_kebun->id }}"
                                                    @if ($potensi_keluarga->ref_status_kepemilikan_kebun_id == $ref_status_kepemilikan_kebun->id) selected @endif>
                                                    {{ $ref_status_kepemilikan_kebun->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_status_kepemilikan_kebun_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                        <h3 class="card-title">Edit Informasi Kepemilikan Ternak Besar</h3>
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
                                    <label for="inputTernakBesar-Kepemilikan" class="col-sm-3 col-form-label">Kepemilikan
                                        Ternak Besar</label>
                                    <div class="col-sm-8">
                                        <select
                                            class="form-control @error('ref_kepemilikan_ternak_besar_id') is-invalid @enderror"
                                            id="inputTernakBesar-Kepemilikan" name="ref_kepemilikan_ternak_besar_id">
                                            <option value="">Pilih Kepemilikan Ternak Besar</option>
                                            @foreach ($kepemilikan_ternak as $ref_kepemilikan_ternak_besar)
                                                <option value="{{ $ref_kepemilikan_ternak_besar->id }}"
                                                    @if ($potensi_keluarga->ref_status_kepemilikan_ternak_besar_id == $ref_kepemilikan_ternak_besar->id) selected @endif>
                                                    {{ $ref_kepemilikan_ternak_besar->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_kepemilikan_ternak_besar_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputTernakBesar-StatusKepemilikan" class="col-sm-3 col-form-label">Status
                                        Kepemilikan</label>
                                    <div class="col-sm-8">
                                        <select
                                            class="form-control @error('ref_status_kepemilikan_ternak_besar_id') is-invalid @enderror"
                                            id="inputTernakBesar-StatusKepemilikan"
                                            name="ref_status_kepemilikan_ternak_besar_id">
                                            <option value="">Pilih Status Kepemilikan</option>
                                            @foreach ($status_milik_ternak as $ref_status_kepemilikan_ternak_besar)
                                                <option value="{{ $ref_status_kepemilikan_ternak_besar->id }}"
                                                    @if ($potensi_keluarga->ref_status_kepemilikan_ternak_besar_id == $ref_status_kepemilikan_ternak_besar->id) selected @endif>
                                                    {{ $ref_status_kepemilikan_ternak_besar->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_status_kepemilikan_ternak_besar_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                        <h3 class="card-title">Edit Informasi Kepemilikan Ternak Kecil</h3>
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
                                    <label for="inputTernakKecil-Kepemilikan" class="col-sm-3 col-form-label">Kepemilikan
                                        Ternak Kecil</label>
                                    <div class="col-sm-8">
                                        <select
                                            class="form-control @error('ref_kepemilikan_ternak_kecil_id') is-invalid @enderror"
                                            id="inputTernakKecil-Kepemilikan" name="ref_kepemilikan_ternak_kecil_id">
                                            <option value="">Pilih Kepemilikan Ternak Kecil</option>
                                            @foreach ($kepemilikan_ternak as $ref_kepemilikan_ternak_kecil)
                                                <option value="{{ $ref_kepemilikan_ternak_kecil->id }}"
                                                    @if ($potensi_keluarga->ref_kepemilikan_ternak_kecil_id == $ref_kepemilikan_ternak_kecil->id) selected @endif>
                                                    {{ $ref_kepemilikan_ternak_kecil->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_kepemilikan_ternak_kecil_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group row">
                                    <label for="inputTernakKecil-StatusKepemilikan" class="col-sm-3 col-form-label">Status
                                        Kepemilikan</label>
                                    <div class="col-sm-8">
                                        <select
                                            class="form-control @error('ref_status_kepemilikan_ternak_kecil_id') is-invalid @enderror"
                                            id="inputTernakKecil-StatusKepemilikan"
                                            name="ref_status_kepemilikan_ternak_kecil_id">
                                            <option value="">Pilih Status Kepemilikan</option>
                                            @foreach ($status_milik_ternak as $ref_status_kepemilikan_ternak_kecil)
                                                <option value="{{ $ref_status_kepemilikan_ternak_kecil->id }}"
                                                    @if ($potensi_keluarga->ref_status_kepemilikan_ternak_kecil_id == $ref_status_kepemilikan_ternak_kecil->id) selected @endif>
                                                    {{ $ref_status_kepemilikan_ternak_kecil->nama }}</option>
                                            @endforeach
                                        </select>
                                        @error('ref_status_kepemilikan_ternak_kecil_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Edit</button>
        <a href="" class="btn btn-default">
            Batal
        </a>
    </form>
@stop