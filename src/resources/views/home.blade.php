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
          <a class="nav-link" href="#">BERANDA <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">PEMESANAN</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">JADWAL</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">TENTANG KAMI</a>
        </li>
      </ul>
    </div>
</nav>
</div>
    <div class="container">
        <a href="" class="btn btn-success float-right mb-4"><i class="fas fa-plus"></i> Tambah Kamar</a>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-header bg-danger text-white">
                        <h5>HOTEL OYO</h5>
                        <p>KAMAR HOTEL</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>Jenis Kamar</th>
                                    <td>Mawar</td>
                                </tr>
                                <tr>
                                    <th>Tipe</th>
                                    <td>Eksklusif</td>
                                </tr>
                                <tr>
                                    <th>Fasilitas</th>
                                    <td>Double Bed, AC & TV</td>
                                </tr>
                                <tr>
                                    <th>Tarif Kamar</th>
                                    <td>Rp.200.000</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-header bg-danger text-white">
                        <h5>HOTEL OYO</h5>
                        <p>KAMAR HOTEL</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>Jenis Kamar</th>
                                    <td>Mawar</td>
                                </tr>
                                <tr>
                                    <th>Tipe</th>
                                    <td>Eksklusif</td>
                                </tr>
                                <tr>
                                    <th>Fasilitas</th>
                                    <td>Double Bed, AC & TV</td>
                                </tr>
                                <tr>
                                    <th>Tarif Kamar</th>
                                    <td>Rp.200.000</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="" class="card-img-top" alt="">
                    <div class="card-header bg-danger text-white">
                        <h5>HOTEL OYO</h5>
                        <p>KAMAR HOTEL</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th>Jenis Kamar</th>
                                    <td>Mawar</td>
                                </tr>
                                <tr>
                                    <th>Tipe</th>
                                    <td>Eksklusif</td>
                                </tr>
                                <tr>
                                    <th>Fasilitas</th>
                                    <td>Double Bed, AC & TV</td>
                                </tr>
                                <tr>
                                    <th>Tarif Kamar</th>
                                    <td>Rp.200.000</td>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-danger float-right"><i class="fas fa-trash"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
