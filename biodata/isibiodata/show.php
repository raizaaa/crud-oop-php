<?php
    include '../database.php';
    $biodata = new Biodata();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Biodata</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    
        <?php
        foreach ($biodata->edit($_GET['id']) as $data) {
            $id = $data['id'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $tgl_lahir = $data['tgl_lahir'];
            $jenkel = $data['jenkel'];
            $agama = $data['agama'];
            $umur = date('Y') - $tgl_lahir;
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12" style="padding: 20px">
                <div class="card">
                    <div class="card-header">
                        <center>BIODATA</center>
                    </div>
                    <div class="card-body">
                        <form action="proses.php?aksi=tambah">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" class="form-control" cols="40" readonly><?php echo $alamat; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="text" class="form-control" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" class="form-control" name="jenkel" value="<?php echo $jenkel; ?>" readonly>
                            </div>
                            <div class="form-group">
                               <label for="">Agama</label>
                               <input type="text" class="form-control" name="agama" value="<?php echo $agama; ?>" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Umur</label>
                                <input type="number" class="form-control" name="umur" value="<?php echo $umur; ?>" readonly>
                            </div>
                        </form>
                        <form action="" method="POST">
                            <div class="form-group">
                                <button type="submit" class="btn b btn-lg btn-block" name="kmbli">Kembali</button>
                            </div>
                        </form>
                        <?php
                            if (isset($_POST['kmbli'])) {
                                header("location:index.php");
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- JS -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <!-- End JS -->
</body>
</html>