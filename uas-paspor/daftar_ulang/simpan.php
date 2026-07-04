<?php

include '../config/koneksi.php';

$id=$_POST['id_pendaftaran'];

$antrian=$_POST['no_antrian'];

$ktp=$_POST['ktp'];

$kk=$_POST['kk'];

$ijazah=$_POST['ijazah'];

$status="Ditolak";

if(
$ktp=="Lengkap" &&
$kk=="Lengkap" &&
$ijazah=="Lengkap"
){
    $status="Diterima";
}

mysqli_query($koneksi,"
INSERT INTO daftar_ulang
(id_pendaftaran,no_antrian,ktp,kk,ijazah,status)

VALUES

('$id','$antrian','$ktp','$kk','$ijazah','$status')
");

header("Location:index.php");