<?php
session_start();
if (isset($_SESSION['login'])) {
    ?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Raiza Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- End CSS -->
    <script src="main.js"></script>
</head>
<body style="padding:15px;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="halawal.php">Raizaaa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a href="home.php" class="btn btn-outline my-2 my-sm-0">Home</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <a href="logout.php" name="logout" class="btn btn-outline-success my-2 my-sm-0">Logout</a>
        </form>
    </div>
    </nav>
    <center><h2>Keiza Store</h2></center>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Masukkan Data Pembeli</div>
                    <div class="card-body">
                    <!-- Isi Disini -->
                    <form action="dataproduk.php" method="POST">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label><br>
                        <input type="radio" name="jenkel"  value="Perempuan" checked>Perempuan
                        <input type="radio" name="jenkel"  value="Laki-laki">Laki-laki
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Pembelian</label>
                        <input type="date" name="tape" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jumlah Produk</label>
                        <input type="number" min="1" name="jupro" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="pros" class="byn btn-info">Proses</button>
                        <button type="reset" class="byn btn-danger">Reset</button>
                    </div>
                    </form>
                    <!-- End Isi -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JS -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- JQuery Pertama, Selanjutnya bebas.js-->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- End Js -->
</body>
</html>
<?php
} else {
    // Redirect(pindah halaman)
    // ke login.php
    header("location: login.php");
    // die("Silahkan Login Terlebih dahuli");
} ?>




