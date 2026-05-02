<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "lat_dbase";

// koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// cek apakah data dikirim
if (isset($_POST['firstname'], $_POST['lastname'], $_POST['age'])) {

    $firstname = trim($_POST['firstname']);
    $lastname  = trim($_POST['lastname']);
    $age       = $_POST['age'];

    // validasi
    if ($firstname && $lastname && $age !== '' && is_numeric($age)) {

        // gunakan prepared statement (lebih aman)
        $stmt = mysqli_prepare($conn, 
            "INSERT INTO tbl_mhs (FirstName, LastName, Age) VALUES (?, ?, ?)"
        );

        mysqli_stmt_bind_param($stmt, "ssi", $firstname, $lastname, $age);

        if (mysqli_stmt_execute($stmt)) {
            echo "1 record added";
        } else {
            echo "Error: " . mysqli_error($conn);
        }

        mysqli_stmt_close($stmt);

    } else {
        echo "Input tidak valid!";
    }
}

mysqli_close($conn);
?>