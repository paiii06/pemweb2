<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "artikel_db";

// koneksi ke database
$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connection)
{
    echo "Tidak dapat terhubung dengan database";
    exit;
}

echo "Koneksi berhasil";

?>