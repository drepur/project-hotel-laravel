@extends('layouts.app')

@section('content')
    <div class="container">
            <form action="">
                <div class="form-group">
                    <label for="kodepesan">Kode Pesan</label>
                    <input type="text" name="kodepesan" class="form-control">
                </div>
                <div class="form-group">
                    <label for="kodekamar">Kode Kamar</label>
                    <input type="text" name="kodekamar" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="tglmasuk">Tanggal Masuk</label>
                    <input type="date" name="tglmasuk" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="tglkeluar">Tanggal Keluar</label>
                    <input type="date" name="tglkeluar" class="form-control" id="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i> Simpan</button>
                    <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-undo"></i> Batal</a>
                </div>
            </form>
    </div>
@endsection
