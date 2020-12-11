@extends('layouts.app')

@section('content')
    <div class="container">
            <form action="">
                <div class="form-group">
                    <label for="kodepegawai">Kode Karyawan</label>
                    <input type="text" name="kodepegawai" class="form-control">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="tgllahir">Tanggal Lahir</label>
                    <input type="date" name="tgllahir" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="jeniskelamin">Jenis Kelamin</label>
                    <input type="text" name="jeniskelamin" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="nohp">No. HP</label>
                    <input type="text" name="nohp" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="bagian">Bagian</label>
                    <input type="text" name="bagian" class="form-control" id="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i> Simpan</button>
                    <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-undo"></i> Batal</a>
                </div>
            </form>
    </div>
@endsection
