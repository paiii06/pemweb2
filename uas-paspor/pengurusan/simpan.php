<?php
include '../config/koneksi.php';

$id = $_POST['id_daftar_ulang'];
$biaya = $_POST['biaya'];
$tanggal = $_POST['tanggal_pengurusan'];

// Hitung jumlah pengurusan pada tanggal tersebut
$cek = mysqli_query($koneksi,
    "SELECT COUNT(*) AS jumlah
     FROM pengurusan
     WHERE tanggal_pengurusan='$tanggal'");

$data = mysqli_fetch_assoc($cek);

if($data['jumlah'] >= 5){
    echo "<script>
            alert('Kuota pada tanggal tersebut sudah penuh (maksimal 5 orang).');
            window.location='tambah.php';
          </script>";
    exit;
}

mysqli_query($koneksi,"
INSERT INTO pengurusan
(id_daftar_ulang,biaya,tanggal_pengurusan)
VALUES
('$id','$biaya','$tanggal')
");

header("Location:index.php");
?>