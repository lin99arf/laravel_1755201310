@extends('layouts.app')
@section('title','[UAS]Halaman Mata Kuliah')
@section('bread1','Mata Kuliah')
@section('bread2','Form')
@section('content')
    <h3>Form Mata Kuliah</h3><hr>
    @include('layouts.alert')
    <form action="/mk/store" method="POST">
        @csrf
        <div class="form-group row">
            <label for="Kodemk" class="col-sm-12">Kode</label>
            <div class="col-sm-3">
                <input type="text" name="kode_matakuliah" class="form-control" id="kode_matakuliah" placeholder="Kode Mata Kuliah">
                @error('kode_matakuliah')
                    <small id="kode_matakuliah" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-sm-12">Nama</label>
            <div class="col-sm-5">
                <input type="text" name="nama_matakuliah" class="form-control" id="nama_matakuliah" placeholder="Nama Mata Kuliah">
                @error('nama_matakuliah')
                    <small id="nama_matakuliah" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="sks" class="col-sm-12">SKS</label>
            <div class="col-sm-3">
                <input type="sks" name="sks" class="form-control" id="sks" placeholder="Jumlah SKS">
                @error('sks')
                    <small id="sks" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="semester" class="col-sm-12">Semester</label>
            <div class="col-sm-2">
            <input type="semester" name="semester" class="form-control" id="semester" placeholder="Semester">
                @error('semester')
                    <small id="semester" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Simpan</button>
        <a href="{{ url()->previous() }}" class="btn btn-danger">Batal</a>
    </form>
@endsection