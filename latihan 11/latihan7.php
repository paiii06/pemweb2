<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "lat_dbase";

// koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

// cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// query
$sql = "SELECT * FROM tbl_mhs";
$result = mysqli_query($conn, $sql);

// hitung jumlah record
$hit = mysqli_num_rows($result);

echo "Jumlah record: " . $hit;

// tutup koneksi
mysqli_close($conn);
?>