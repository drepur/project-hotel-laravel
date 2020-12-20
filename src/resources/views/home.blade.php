@extends('layouts.app')

@section('content')

<div class="container">

<nav class="navbar navbar-expand-lg navbar-light bg-danger mb-4">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-white" href="home">BERANDA <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              PEMESANAN
            </a>
            <div class="dropdown-menu bg-danger" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item bg-danger text-white" href="pemesanan">PEMESANAN</a>
                <a class="dropdown-item bg-danger text-white" href="pengunjung">PENGUNJUNG</a>
              </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              JADWAL
            </a>
            <div class="dropdown-menu bg-danger text-white" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item bg-danger text-white" href="cekin">CEK IN</a>
              <a class="dropdown-item bg-danger text-white" href="cekout">CEK OUT</a>
              <a class="dropdown-item bg-danger text-white" href="karyawan">KARYAWAN</a>
            </div>
        <li class="nav-item">
          <a class="nav-link text-white" href="tentang">TENTANG KAMI</a>
        </li>
      </ul>
    </div>
</nav>
</div>
    <div class="container">
        <a href="{{ route("kamar.form") }}" class="btn btn-success float-right mb-4">
            <i class="fas fa-plus"></i> Tambah Kamar</a>
        <div class="clearfix"></div>

        <div class="row">
            @foreach ($kamar as $item)
                
            <div class="col-md-4">
                <div class="card mt-2" style="width: 18rem;">
                    <div class="card-header bg-danger text-white">
                        <h5>HOTEL OYO</h5>
                        <p>KAMAR HOTEL</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>Jenis Kamar</th>
                                    <td>{{ $item->jeniskamar }}</td>
                                </tr>
                                <tr>
                                    <th>Tipe</th>
                                    <td>{{ $item->tipe }}</td>
                                </tr>
                                <tr>
                                    <th>Fasilitas</th>
                                    <td>{{ $item->fasilitas }}</td>
                                </tr>
                                <tr>
                                    <th>Tarif Kamar</th>
                                    <td>{{ $item->tarifkamar }}</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route("kamar.hapus",["id" => $item->id]) }}" class="btn btn-danger float-right"
                                    onclick="return confirm('Anda Yakin Hapus?')"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection
