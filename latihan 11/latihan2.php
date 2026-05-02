<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "lat_dbase";

// koneksi ke MySQL
$conn = mysqli_connect($servername, $username, $password);

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// query buat database
$sql = "CREATE DATABASE $dbname";

if (mysqli_query($conn, $sql)) {
    echo "Database $dbname berhasil dibuat";
} else {
    echo "Gagal membuat database: " . mysqli_error($conn);
}

// tutup koneksi
mysqli_close($conn);
?>