@extends('layouts.app')

@section('content')
    <div class="container">
            <form action="{{ route("kamar.create") }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="jeniskamar">Jenis Kamar</label>
                    <input type="text" name="jeniskamar" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="tipe">Tipe</label>
                    <select name="tipe" class="form-control">
                        <option value="eksklusif">Eksklusif</option>
                        <option value="vip">VIP</option>
                        <option value="ekonomi">Ekonomi</option>
                      </select>
                </div>
                <div class="form-group">
                    <label for="fasilitas">Fasilitas</label>
                    <input type="text" name="fasilitas" class="form-control" id="">
                </div>
                <div class="form-group">
                    <label for="tarifkamar">Tarif Kamar</label>
                    <input type="text" name="tarifkamar" class="form-control" id="">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i> Simpan</button>
                    <a href="{{ url()->previous() }}" class="btn btn-danger"><i class="fas fa-undo"></i> Batal</a>
                </div>
            </form>
    </div>
@endsection
