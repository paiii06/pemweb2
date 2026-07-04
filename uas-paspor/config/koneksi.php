<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_paspor");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>