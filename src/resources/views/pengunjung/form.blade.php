@extends('layouts.app')

@section('content')
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-danger mb-4 text-white">
           <h1>Form Input Pengunjung</h1>
        </nav>
        </div>
    <div class="container">
            <form action="{{ route("pengunjung.simpan") }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="kodepengunjung">Kode Pengunjung</label>
                    <input type="text" name="kodepengunjung" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tgllahir">Tanggal Lahir</label>
                    <input type="date" name="tgllahir" class="form-control">
                </div>
                <div class="form-group">
                    <label for="jeniskelamin">Jenis Kelamin</label>
                    <select name="jeniskelamin" class="form-control">
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                      </select>
                <div class="form-group">
                    <label for="nohp">No. HP</label>
                    <input type="text" name="nohp" class="form-control">
                </div>
                <div class="form-group">
                    <label for="noktp">No. KTP</label>
                    <input type="text" name="noktp" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i> Simpan</button>
                    <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-undo"></i> Batal</a>
                </div>
            </form>
    </div>
@endsection
