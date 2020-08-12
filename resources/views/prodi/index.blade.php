@extends('layouts.app')
@section('title', 'Prodi Page')
@section('bread1', 'Program Studi')
@section('bread2', 'Data')
@section('content')
    <h3>Master Data Program Studi</h3>
    <table class="table table-stripped" id="mhs-table">
        <thead>
            <tr>
                <td>No</td>
                <td>Kode Prodi</td>
                <td>Nama Prodi</td>
                <td>Kepala Prodi</td>
            </tr>
        </thead>
        <tbody>
            @foreach($list_prodi as $key => $item)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $item->kode_prodi }}</td>
                    <td>{{ $item->nama_prodi }}</td>
                    <td>{{ $item->kaprodi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection