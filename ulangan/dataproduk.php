<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- End CSS -->
    <script src="main.js"></script>
</head>
<body>
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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary">
                    <div class="card-header">Detail Pembelian Produk</div>
                    <div class="card-body">
                        <form action="output.php" method="POST">
                            <?php
                            if (isset($_POST['pros'])) {
                                $nama = $_POST['nama'];
                                $alamat = $_POST['alamat'];
                                $jenkel = $_POST['jenkel'];
                                $tape = $_POST['tape'];
                                $jupro = $_POST['jupro'];
                                for ($a = 0; $a < $jupro; $a++) { ?>
                                    <div class="form-group">
                                        <label for="">Nama Barang</label>
                                        <input type="text" class="form-control" name="naba[]" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Kode Barang</label>
                                        <input type="text" class="form-control" name="koba[]" required></i>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jenis Barang</label>
                                        <select name="jebar[]" id="" class="form-control" required>
                                            <option value="Bahan Pokok">Bahan Pokok</option>
                                            <option value="Sayuran">Sayuran</option>
                                            <option value="Kosmetik">Kosmetik</option>
                                            <option value="Pakaian">Pakaian</option>
                                            <option value="Barang Lainnya">Mainan</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Harga Barang</label>
                                        <input type="number" class="form-control" name="habar[]" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jumlah Barang</label>
                                        <input type="number" class="form-control" name="jubar[]" required>
                                    </div>
                                    <hr style="color: black;background-color: black;height: 5px;">
                                <?php } ?>
                                <input type="hidden" name="nama" value="<?php echo $nama ?>">
                                <input type="hidden" name="alamat" value="<?php echo $alamat ?>">
                                <input type="hidden" name="jenkel" value="<?php echo $jenkel ?>">
                                <input type="hidden" name="tape" value="<?php echo $tape ?>">
                                <input type="hidden" name="jupro" value="<?php echo $jupro ?>">
                                <div class="form-group">
                                    <button type="submit" name="simpan" class="btn btn-outline-primary">Proses</button>
                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                </div>
                        </form>
                    <?php } ?>
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