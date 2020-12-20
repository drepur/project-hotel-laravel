@extends('layouts.app')

@section('content')
    <div class="container">
            <form action="{{ route("pemesanan.simpan") }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="kodepengunjung">Kode Pengunjung</label>
                    <input type="text" name="kodepengunjung" class="form-control">
                </div>
                <div class="form-group">
                    <label for="kodekamar">Kode Kamar</label>
                    <input type="text" name="kodekamar" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="tglpesan">Tanggal Pesan</label>
                    <input type="date" name="tglpesan" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="lamanginap">Lama Menginap</label>
                    <input type="text" name="lamanginap" class="form-control" id="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i> Simpan</button>
                    <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-undo"></i> Batal</a>
                </div>
            </form>
    </div>
@endsection
