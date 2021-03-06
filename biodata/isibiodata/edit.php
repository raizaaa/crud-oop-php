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
    <title>BIODATA</title>
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
                        <form action="proses.php?aksi=update" method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?php echo $nama; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" class="form-control" cols="40" required><?php echo $alamat; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>"required>
                            </div>
                            <div class="form-group">
                                <label for="">Jenis Kelamin</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenkel" value="Laki-Laki" required>
                                    <label class="form-check-label">
                                        Laki Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="jenkel" value="Perempuan" required>
                                    <label class="form-check-label">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Agama</label>
                                    </div>
                                    <select class="custom-select" id="inputGroupSelect01" name="agama">
                                        <option selected value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-success" name="save">Simpan</button>
                            </div>
                        </form>
    
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