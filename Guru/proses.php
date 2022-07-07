<?php
include '../database.php';
$guru = new Guru();

if(isset($_POST['save'])){
    $aksi = $_POST['aksi'];
    $no   = @$_POST['no'];
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    if ($aksi == "create"){
        $guru->create($nip,$nama,$alamat);
        header("location:index.php");
    }
    else if ($aksi == "update") {
        $guru->update($no, $nip, $nama,$alamat);
        header("location:index.php");
    }
    else if ($aksi == "delete"){
        $guru->delete($no);
        header("location:index.php");
    }
}
?>