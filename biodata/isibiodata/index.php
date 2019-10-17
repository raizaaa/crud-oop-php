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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card border-primary">
                    <div class="card-header">
                    <center><h2>BIODATA</h2></center>
                    <a href="create.php"  class="btn btn-outline-success my-2 my-sm-0">Tambah Data(+)</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Agama</th>
                                        <th>Umur</th>
                                        <center>
                                            <th colspan="3">Aksi</th>
                                        </center>
                                    </tr>
                                </thead>
                                <?php
                                    $biodata = new Biodata();
                                    $no = 1;
                                    foreach($biodata->index() as $data) {
                                ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['alamat']; ?></td>
                                    <td><?php echo $data['tgl_lahir']; ?></td>
                                    <td><?php echo $data['jenkel']; ?></td>
                                    <td><?php echo $data['agama']; ?></td>
                                    <td><?php echo $data['umur']; ?></td>
                                    <td><a href="show.php?id=<?php echo $data['id']; ?>">
                                            <input type="submit" class="btn btn-outline-primary" value="Show"></a></td>
                                    <td><a href="edit.php?id=<?php echo $data['id']; ?>&aksi=update" class="btn btn-outline-warning">
                                            Edit</a></td>
                                    <td><a href="proses.php?id=<?php echo $data['id']; ?>&aksi=delete">
                                            <input type="submit" class="btn btn-outline-danger" value="Delete"></a></td>
                                </tr>
                                <?php }?>
                            </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- JS -->
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <!-- End Js -->
</body>
</html>
