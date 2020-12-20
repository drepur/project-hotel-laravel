<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokter</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
     integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" 
     crossorigin="anonymous">
</head>
<body>

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
            <h1>List Pengunjung Hotel
              <a href="{{ route("pengunjung.form") }}" class="btn btn-success float-right mb-4">
                <i class="fas fa-plus"></i> Tambah Pengunjung</a>
            </h1>
            <hr>
            <table class = "table table-borderless">
                <thead>
                    <tr>
                      <th>Kode Pengunjung</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>Tanggal Lahir</th>
                      <th>Jenis Kelamin</th>
                      <th>No HP</th>
                      <th>No KTP</th>
                      <th>Hapus</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($pengunjung as $item)
                    <tr>
                        <td>{{ $item->kodepengunjung }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->tgllahir }}</td>
                        <td>{{ $item->jeniskelamin }}</td>
                        <td>{{ $item->nohp }}</td>
                        <td>{{ $item->noktp }}</td>
                        <td><a href="{{ route("pengunjung.hapus",["id" => $item->id]) }}" class="btn btn-danger float-right"
                          onclick="return confirm('Anda Yakin Hapus?')"><i class="fas fa-trash"></i>Hapus</a></td>
                    </tr>
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
