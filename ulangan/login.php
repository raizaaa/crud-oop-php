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
    <?php
session_start();
if (isset($_POST['login'])) {
    $a = $_POST['user'];
    $b = $_POST['pass'];
    //periksa login
    if ($a == "keiza" && $b == "1803") {
        //menciptakan session
        $_SESSION['login'] = $a;
        //menuju ke halaman pemeriksaan session
        header("location: datadiri.php");
    } else {
        die("username atau password anda salah 
        silahkan kembali login <a href=login.php> Login </a>");
    }
} else {
    ?>
    <html>

    <head>
        <title>Login here...</title>
    </head>

    <body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="halawal.php">Raizaaa</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        </ul>
    </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding:25px;">
                <div class="card">
                    <div class="card-header"><center><h3>Login Here...</h3></center></div>
                    <div class="card-body">
                    <!-- Isi Disini -->
                    <form action="" method="POST">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="user" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="pass" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="login" class="btn btn-outline-success my-2 my-sm-0">Login</button>
                    </div>
                    </form>
                    <!-- End Isi -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

    </html>
<?php
}
?>

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