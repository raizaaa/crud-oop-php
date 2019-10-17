<?php
    include '../database.php';
    $biodata = new Biodata();
    $aksi = $_GET['aksi'];
    if (isset($_POST['save'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $jenkel = $_POST['jenkel'];
        $agama = $_POST['agama'];
        $umur = date('Y') - $tgl_lahir;
    } if ($aksi == "tambah") {
        $biodata->create($nama, $alamat, $tgl_lahir, $jenkel, $agama, $umur);
        header("location:index.php");
    } elseif ($aksi == "update") {
        $biodata->update($id, $nama, $alamat, $tgl_lahir, $jenkel, $agama, $umur);
        header("location:index.php");
    } elseif ($aksi == "delete") {
        $biodata->delete($_GET['id']);
        header("location:index.php");
    }
?>