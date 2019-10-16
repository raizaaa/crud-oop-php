<?php 
// menambah / memanggil file database.php
include '../database.php';
$db = new Database();
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- End CSS -->
    <title>BIODATA</title>
</head>
<body>
    <center>
        <h2>BIODATA</h2>
    </center>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary">
                    <div class="card-header">
                    <a href="create.php"  class="btn btn-outline-success my-2 my-sm-0">Tambah Data(+)</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Umur</th>
                                    <th colspan="3">Aksi</th>
                                </tr>
                                <?php
                                    include '../database.php';
                                    $isibiodata = new Biodata();
                                    $no = 1;
                                    foreach($isibiodata->index() as $data) {
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['alamat']; ?></td>
                                    <td><?php echo $data['tgl_lahir']; ?></td>
                                    <td><?php echo $data['jenkel']; ?></td>
                                    <td><?php echo $data['agama']; ?></td>
                                    <td><?php echo $data['umur']; ?></td>

                                    <td><a href="show.php?id=<?php echo $data['id']; ?>">Show</a></td>
                                    <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
                                    <td><a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete" onclick="return confirm('Apakah anda yakin akan menghapus data terpilih?')">Delete</a></td>
                                </tr>
                                <?php } ?>
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
