@extends('layouts.app')
@section('title', 'Halaman Mahasiswa')
@section('bread1', 'Mahasiswa')
@section('bread2', 'Daftar Mahasiswa')
@section('content')
    <h1>Master Data Mahasiswa</h1>
    <p><a href="/mhs/create" class="btn btn-success btn-sm">Tambah</a></p>

    @include('layouts.alert')

        <table class="table table-stripped" id="mhs-table">
            <thead>
                <tr>
                    <td>No.</td>
                    <td>NIM</td>
                    <td>Nama Lengkap</td>
                    <td>Program Studi</td>
                    <td>Alamat</td>
                    <td>Pilihan</td>
                </tr>
            </thead>
        </table>
        <script>
            $(function() {
                $('#mhs-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route('mhs.list') }}',
                    columns: [
                        { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                        { data: 'nim', name: 'nim' },
                        { data: 'nama_lengkap', name: 'nama_lengkap' },
                        { data: 'mprodi.nama_prodi', name: 'nama_prodi' },
                        { data: 'alamat', name: 'alamat' },
                        { data: 'action', name: 'action' , orderable: false, searchable: false }
                    ]
                });
            });
        </script>

@endsection