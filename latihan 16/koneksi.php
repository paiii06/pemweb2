<?php

$koneksi = mysqli_connect("localhost","root","","kampus");

if(!$koneksi){
    die("Koneksi Database Gagal!");
}

echo "Koneksi Database Berhasil!<br>";

?>