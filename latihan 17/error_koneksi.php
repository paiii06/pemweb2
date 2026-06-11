<?php

$conn = mysqli_connect("localhost", "root", "salah", "kampus");

if(!$conn){

    die("Koneksi gagal : " . mysqli_connect_error());

}

echo "Koneksi berhasil";

?>