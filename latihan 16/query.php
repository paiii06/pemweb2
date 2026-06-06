<?php

include "koneksi.php";

$sql = "SELECT * FROM mahasiswa";
$query = mysqli_query($koneksi, $sql);

if(!$query){
    die("Query Gagal!");
}

echo "Koneksi dan Query Berhasil! Data siap digunakan.";

?>