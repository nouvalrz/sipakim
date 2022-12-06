@extends('adminlte::page')

@section('title', 'Data Keluarga Miskin')

@section('content_header')
    <h1 class="m-0 text-dark">Data Keluarga Miskin</h1>
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
                                <th>Nomor KK</th>
                                <th>NIK</th>
                                <th>Nama Kepala</th>
                                <th>Alamat</th>
                                <th style="text-align: center;">Klasifikasi</th>
                                <th style="text-align: center;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_keluarga as $key => $keluarga )
                                <tr>
                                    <td style="text-align: center;">
                                        <a href="" style="text-decoration:none; color: black;">
                                            {{ $key + 1 }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="" style="text-decoration:none; color: black;">
                                            {{ $keluarga->no_kk }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="" style="text-decoration:none; color: black;">
                                            {{ $keluarga->nik }}
                                        </a>
                                    </td>
                                    <td>
                                        <a href="" style="text-decoration:none; color: black;">
                                            {{ $keluarga->nama_kepala }}
                                        </a>
                                    </td>
                                    <td>
                                        {{ 'RT '.$keluarga->cluster_wilayah->rt.' - RW '.$keluarga->cluster_wilayah->rw.' - Lingk. '.$keluarga->cluster_wilayah->lingkungan.' - Kel. '.$keluarga->cluster_wilayah->kelurahan.' - Kec. '.$keluarga->cluster_wilayah->kecamatan }}
                                    </td>
                                    <td style="text-align: center;">
                                        Keluarga {{ $keluarga->potensi_keluarga->analisa_keluarga->ref_klasifikasi->nama }}
                                    </td>
                                    <td style="text-align: center;">
                                        <a href="" class="btn btn-secondary btn-xs">
                                            Show
                                        </a>
                                        <a href="{{ route('data.edit', $keluarga->id) }}" class="btn btn-info btn-xs">
                                            Edit
                                        </a>
                                        <a href="{{ route('data.delete', $keluarga->id) }}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                            Delete
                                        </a>
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
@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });
        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            Swal.fire({
                title: 'Yakin hapus data?',
                text: 'Data request surat akan dihapus',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                confirmButtonText: 'Hapus',
            }).then((result) => {
                if (result.value) {
                    $("#delete-form").attr('action', $(el).attr('href'));
                    $("#delete-form").submit();
                }
            })
        }
    </script>
@endpush
