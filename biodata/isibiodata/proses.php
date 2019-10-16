<?php 
include '../database.php';
$isibiodata = new Biodata();
$aksi = $_GET['aksi'];
if(isset($_POST['save']))
{
            $id = $data['id'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $tgl_lahir = $data['tgl_lahir'];
            $jenkel = $data['jenkel'];
            $agama = $data['agama'];
            $umur = date('Y') - $tgl_lahir;
}
if($aksi == "tambah")
{
    $isibiodata->create($nama, $alamat, $tgl_lahir, $jenkel, $agama);
    header("location:index.php");
}elseif($aksi == "update")
{
    $isibiodata->update($id, $nama, $alamat, $tgl_lahir, $jenkel, $agama);
    header("location:index.php");
}elseif($aksi == "delete")
{
    $isibiodata->delete($_GET['id']);
    header("location:index.php");
}
?>