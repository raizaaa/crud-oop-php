<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- End CSS -->
    <title>Keiza Store</title>
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
    <center>
        <h2>Keiza Store</h2>
    </center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary">
                    <div class="card-header">Invoice Pembayaran</div>
                    <div class="card-body">
                    <form action="kembalian.php" method="post">
                        <?php
                        if (isset($_POST['simpan'])) {
                            $nama = $_POST['nama'];
                            $alamat = $_POST['alamat'];
                            $jenkel = $_POST['jenkel'];
                            $tape = $_POST['tape'];
                            $jupro = $_POST['jupro'];
                            $naba = $_POST['naba'];
                            $koba = $_POST['koba'];
                            $jebar = $_POST['jebar'];
                            $habar = $_POST['habar'];
                            $jubar = $_POST['jubar'];
                        } ?>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Jenis Kelamin</th>
                                    <th colspan="2">Tanggal Pembelian</th>
                                    <th>Jumlah</th>
                                </tr>
                                <tr>
                                    <td><?php echo $nama ?></td>
                                    <td><?php echo $alamat ?></td>
                                    <td><?php echo $jenkel ?></td>
                                    <td colspan="2"><?php echo $tape ?></td>
                                    <td><?php echo $jupro; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="6" align="center"><b>Daftar Buku Yang dibeli</b></td>
                                </tr>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Barang</th>
                                    <th>Kode Barang </th>
                                    <th>Jenis Barang</th>
                                    <th>Harga Satuan (Rp)</th>
                                    <th>Jumlah Barang</th>
                                </tr>
                                <?php
                                $no = 1;
                                foreach ($koba as $a => $b) { ?>
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $naba[$a]; ?></td>
                                        <td><?php echo $koba[$a]; ?></td>
                                        <td><?php echo $jebar[$a]; ?></td>
                                        <td><?php echo $habar[$a]; ?></td>
                                        <td><?php echo $jubar[$a]; ?></td>
                                        <?php $subtotal = $subtotal+($jubar[$a]*$habar[$a]);
                                        ?>
                                    </tr>
                                <?php
                                }
                                if ($subtotal >= 500000) {
                                    $diskon = ($subtotal * 20)/100;
                                    $ket = "20%";
                                } else if ($subtotal >= 250000) {
                                    $diskon = ($subtotal * 10)/100;
                                    $ket = "10%";
                                }  else if ($subtotal >= 150000) {
                                    $diskon = ($subtotal * 5)/100;
                                    $ket = "5%";
                                } else {
                                    $diskon = 0;
                                    $ket = "0%";
                                }
                                $total = $subtotal - $diskon;
                                ?>
                                <tr>
                                    <td colspan="6" align="center"><b>Total Pembayaran</b></td>
                                </tr>
                                <tr>
                                    <th>Sub Total</th>
                                    <td colspan="6" align="right">Rp. <?php echo $subtotal; ?></td>
                                </tr>
                                <tr>
                                    <th>Diskon (<?php echo $ket; ?>)</th>
                                    <td colspan="6" align="right">Rp. <?php echo $diskon; ?></td>
                                </tr>
                                <tr>
                                    <th>Total Pembayaran</th>
                                    <td colspan="6" align="right">Rp. <?php echo $total; ?></td>
                                </tr>
                            </table>
                                    <div class="form-group">
                                        <label for="">Masukkan Jumlah Uang</label>
                                        <input type="number" class="form-control" min="<?php echo $total?>" name="uang" required>
                                    </div>
                                <div class="form-group">
                                    <button type="submit" name="proses" class="btn btn-outline-primary">Proses</button>
                                </div>
                                <input type="hidden" name="total" value="<?php echo $total; ?>">
                            </form>
                        </div>
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