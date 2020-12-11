@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detail Karyawan</h1>
        <hr>
        <div class="form-group">
            <label for="kodepengunjung">Kode Karyawan</label>
            <input type="text" name="kodepengunjung" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="tgllahir">Tanggal Lahir</label>
            <input type="date" name="tgllahir" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="jeniskelamin">Jenis Kelamin</label>
            <input type="text" name="jeniskelamin" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="nohp">No. HP</label>
            <input type="text" name="nohp" id="" class="form-control">
        </div>
        <div class="form-group">
            <label for="bagian">Bagian</label>
            <input type="text" name="bagian" id="" class="form-control">
        </div>
        <a href="{{ url()->previous() }}" class="btn btn-danger">
            <i class="fas fa-arrow-left"></i> Kembali</a>
    </div>

@endsection
