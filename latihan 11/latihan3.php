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

// membuat tabel
$sql = "CREATE TABLE IF NOT EXISTS tbl_mhs (
    mhsID INT NOT NULL AUTO_INCREMENT,
    FirstName VARCHAR(15),
    LastName VARCHAR(15),
    Age INT,
    PRIMARY KEY (mhsID)
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel berhasil dibuat<br>";
} else {
    echo "Gagal membuat tabel: " . mysqli_error($conn) . "<br>";
}

// input data
$input = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
          VALUES ('Rivai','Ramadhan',21)";

if (mysqli_query($conn, $input)) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Gagal input data: " . mysqli_error($conn);
}

// tutup koneksi
mysqli_close($conn);
?>