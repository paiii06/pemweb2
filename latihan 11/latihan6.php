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

// tampilkan data
if (mysqli_num_rows($result) > 0) {
    while ($data = mysqli_fetch_assoc($result)) {
        echo $data['FirstName'] . " " . $data['LastName'] . " " . $data['Age'] . "<br>";
    }
} else {
    echo "Tidak ada data";
}

// tutup koneksi
mysqli_close($conn);
?>