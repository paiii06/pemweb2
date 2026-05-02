<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "lat_dbase";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// cek dari POST
if (isset($_POST['firstname'])) {

    $firstname = trim($_POST['firstname']);
    $lastname  = trim($_POST['lastname']);
    $age       = $_POST['age'];

    if ($firstname && $lastname && $age !== '' && is_numeric($age)) {

        $sql = "INSERT INTO tbl_mhs (FirstName, LastName, Age)
                VALUES ('$firstname', '$lastname', $age)";

        if (mysqli_query($conn, $sql)) {
            echo "Data berhasil disimpan";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

    } else {
        echo "Input tidak valid!";
    }
}

mysqli_close($conn);
?>