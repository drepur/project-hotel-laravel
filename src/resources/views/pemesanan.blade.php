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
                    <div class="dropdown-menu bg-danger text-white" aria-labelledby="navbarDropdownMenuLink">
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
                </li>
                <li class="nav-item">
                  <a class="nav-link text-white" href="tentang">TENTANG KAMI</a>
                </li>
              </ul>
            </div>
        </nav>
        </div>
        <div class="container">
            <h1>List Pemesanan Hotel
            <a href="{{ route("pemesanan.form") }}" class="btn btn-success float-right mb-4">
                <i class="fas fa-plus"></i> Tambah Pesanan</a>
            </h1>
            <hr>
            <table class = "table table-borderless">
              <thead>
                  <tr>
                    <th>Kode Pengunjung</th>
                    <th>Kode Kamar</th>
                    <th>Tanggal Pesan</th>
                    <th>Lama Menginap</th>
                    <th>Hapus</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($pemesanan as $item)
                  <tr>
                      <td>{{ $item->kodepengunjung }}</td>
                      <td>{{ $item->kodekamar }}</td>
                      <td>{{ $item->tglpesan }}</td>
                      <td>{{ $item->lamanginap }}</td>
                      <td><a href="{{ route("pemesanan.hapus",["id" => $item->id]) }}" class="btn btn-danger float-right"
                        onclick="return confirm('Anda Yakin Hapus?')"><i class="fas fa-trash"></i></a></td>
                  </tr>
                @endforeach
              </tbody>
          </table>
        </div>
    </div>
@endsection
