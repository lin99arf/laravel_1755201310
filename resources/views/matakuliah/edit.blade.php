@extends('layouts.app')
@section('title','Halaman Mata Kuliah')
@section('bread1','Mata Kuliah')
@section('bread2','Data')
@section('content')
    <h3>Form Mata Kuliah</h3><hr>
    @include('layouts.alert')
    <form action="{{ route('mk.update', $matkul->kode_matakuliah) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <label for="kode" class="col-sm-12">Kode</label>
            <div class="col-sm-3">
                <input type="text" name="kode_matakuliah" class="form-control" id="kode_matakuliah" placeholder="Kode Mata Kuliah" value="{{ $matkul->kode_matakuliah }}" readonly>
                @error('kode_matakuliah')
                    <small id="kode_matakuliah" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-12">Nama</label>
            <div class="col-sm-5">
                <input type="text" name="nama_matakuliah" class="form-control" id="nama_matakuliah" placeholder="Masukan Nama Mata Kuliah" value="{{ $matkul->nama_matakuliah }}">
                @error('nama_matakuliah')
                    <small id="nama_matakuliah" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="sks" class="col-sm-12">SKS</label>
            <div class="col-sm-3">
                <input type="text" name="sks" class="form-control" id="sks" placeholder="Masukan Jumlah SKS" value="{{ $matkul->sks }}">
                @error('sks')
                    <small id="sks" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="semester" class="col-sm-12">Semester</label>
            <div class="col-sm-1">
                <input type="text" name="semester" class="form-control" id="semester" placeholder="Semester" value="{{ $matkul->semester }}">
                <small id="semester" class="form-text text-muted"></small>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Simpan</button>
        <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
    </form>
@endsection