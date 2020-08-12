@extends('layouts.app')
@section('title', '[UAS]Mata Kuliah')
@section('bread1', 'Mata Kuliah')
@section('bread2', 'Daftar Mata Kuliah')
@section('content')
    <h3>Master Data Mata Kuliah</h3>
    <p><a href="/mk/create" class="btn btn-success btn-sm">Tambah</a></p>
    @include('layouts.alert')
    <table class="table table-stripped" id="mk-table">
        <thead>
            <tr>
                <td>No.</td>
                <td>Kode Mata Kuliah</td>
                <td>Nama Mata Kuliah</td>
                <td>SKS</td>
                <td>Semester</td>
                <td>Pilihan</td>
            </tr>
        </thead>
    </table>
    <script>
        $(function() {
            $('#mk-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('mk.list') }}',
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex' },
                    { data: 'kode_matakuliah', name: 'kode_matakuliah' },
                    { data: 'nama_matakuliah', name: 'nama_matakuliah' },
                    { data: 'sks', name: 'sks' },
                    { data: 'semester', name: 'semester' },
                    { data: 'action', name: 'action' , orderable: false, searchable: false }
                ]
            });
        });
    </script>
@endsection