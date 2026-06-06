<?php

include "koneksi.php";

$sql = "SELECT * FORM mahasiswa";
$query = mysqli_query($koneksi, $sql);

if(!$query){
    die("Terjadi Kesalahan Pada Query!");
}

?>