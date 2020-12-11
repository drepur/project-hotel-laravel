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
    <div class ="container">
        <div class="">
        <h1>Tentang Hotel OYO</h1>
        <hr>
        <p>OYO Rooms, umumnya dikenal sebagai OYO, adalah jaringan layanan perhotelan dan hotel hemat di India.
            Didirikan pada 2013 oleh Ritesh Agarwal dan sejak itu berkembang menjadi lebih dari 8.500 hotel
            di 230 kota di India, Malaysia, Nepal, Cina, dan Indonesia.
            <p>OYO Rooms, OYO Hotels & Homes saat ini memiliki pendekatan multi-merek dengan penawaran yang disesuaikan untuk perubahan kebutuhan pelancong saat ini. Ini termasuk,

            <p> Townhouse yang dipromosikan karena hotel lingkungan berada di segmen menengah yang ditargetkan untuk
            para wisatawan milenial yang menginginkan akomodasi ekonomi premium.
            <p>OYO Home, yang diklaim OYO adalah Sistem Manajemen Rumah perdesaan India yang menawarkan rumah-rumah
            pribadi di berbagai lokasi dan sepenuhnya dikelola oleh OYO.
            <p>OYO Vacation Homes yang mengidentifikasi dirinya sebagai merek rumah liburan terbesar ke-3 di dunia
            dengan merek manajemen persewaan liburan Belvilla[10], Danland, dan DanCenter bersama dengan
            Traum-Ferienwohnungen yang berbasis di Jerman.
            SilverKey diluncurkan pada bulan April 2018, melayani kebutuhan para pelancong bisnis yang melakukan
            perjalanan bisnis untuk jangka waktu pendek atau panjang.
            <p>Palette menawarkan staycation yang dikuratori dengan sempurna bagi mereka yang mencari pengalaman
            intuitif dengan harga kompetitif, kategori resor liburan kelas atas.
            <p> Collection O adalah kategori terbaru di bawah portofolio hotel OYO yang memenuhi persyaratan untuk
            pelancong bisnis yang cerdas.
            <p>OYO LIFE, ditargetkan untuk kalangan milenial dan profesional muda yang mencari rumah yang dikelola
            penuh dengan persewaan jangka panjang, dengan harga terjangkau.
    </div>

@endsection
