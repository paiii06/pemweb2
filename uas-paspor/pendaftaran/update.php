<?php

include '../config/koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$tanggal = $_POST['tanggal_daftar'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];

mysqli_query($koneksi, "UPDATE pendaftaran SET

nama='$nama',
nik='$nik',
alamat='$alamat',
tanggal_daftar='$tanggal',
hari='$hari',
jam='$jam'

WHERE id='$id'

");

header("Location:index.php");

?>