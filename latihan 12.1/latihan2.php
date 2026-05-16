<?php

$con = mysqli_connect("localhost","root","","lat_dbase");

if(!$con){
    die("Koneksi gagal : " . mysqli_connect_error());
}

$sql = "DELETE FROM tbl_mhs 
WHERE LastName='Prabowo'";

$query = mysqli_query($con, $sql);

if($query){
    echo "Data berhasil dihapus";
}else{
    echo "Data gagal dihapus";
}

mysqli_close($con);

?>