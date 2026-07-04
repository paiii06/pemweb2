<?php

include '../config/koneksi.php';

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$tanggal = $_POST['tanggal_daftar'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];

$sql = "INSERT INTO pendaftaran
(nama, nik, alamat, tanggal_daftar, hari, jam)
VALUES
('$nama','$nik','$alamat','$tanggal','$hari','$jam')";

if(mysqli_query($koneksi,$sql)){
    header("Location:index.php");
}else{
    echo "Data gagal disimpan";
}