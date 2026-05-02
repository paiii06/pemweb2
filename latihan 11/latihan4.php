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

// query insert
$sql1 = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
         VALUES ('Edrick', 'Puturuhu', 21)";

$sql2 = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
         VALUES ('Tasya', 'Alfazahro', 20)";

// eksekusi query
if (mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2)) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Gagal input data: " . mysqli_error($conn);
}

// tutup koneksi
mysqli_close($conn);
?>