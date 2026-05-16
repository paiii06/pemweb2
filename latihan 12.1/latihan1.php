<?php

$con = mysqli_connect("localhost","root","","lat_dbase");

if(!$con){
    die("Koneksi gagal");
}

mysqli_query($con,"UPDATE tbl_mhs SET Age='36'
WHERE FirstName='Karina' AND LastName='Suwandi'");

echo "Data berhasil diupdate";

mysqli_close($con);

?>