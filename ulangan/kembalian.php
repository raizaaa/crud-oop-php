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
<body>
    <!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="halawal.php">Raizaaa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
        <a href="home.php" class="btn btn-outline my-2 my-sm-0">Home</a>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <a href="logout.php" name="logout" class="btn btn-outline-success my-2 my-sm-0">Logout</a>
        </form>
    </div>
    </nav>
    <!-- End Header -->
    

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                    <form action="kembalian.php" method="post">
                    <?php
                        if (isset($_POST['proses'])) {
                            $duit = $_POST['uang'];
                            $tal = $_POST['total'];
                        } ?>
                        <h1>Data Berhasil Diinput</h1>
                        <?php
                            $kembalian = $duit-$tal; 
                        ?>
                        <p>Uang Pembayaran : Rp. <?php echo $duit;?></p>
                        <p>Total : Rp. <?php echo $tal;?></p>
                        <p>Kembalian : Rp. <?php echo $kembalian;?></p>
                        </form>
                            <h2>Apakah Anda Ingin Memasukkan Data Lagi?</h2>
                                <form class="form-inline my-2 my-lg-0">
                                <a href="datadiri.php" name="y" class="btn btn-outline-success my-2 my-sm-0">Iya</a> &nbsp&nbsp&nbsp&nbsp
                                <div class="form-group">
                                <button type="submit" name="tidak" class="btn btn-outline-danger my-2 my-sm-0" value="tidak">Tidak</button><br><br>
                                </div>
                                </form>
                                <?php
                                if (isset($_GET['tidak'])) {
                                    echo "<h2>TERIMAKASIIII^-^</h2>";
                                }
                                ?>    
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
    
