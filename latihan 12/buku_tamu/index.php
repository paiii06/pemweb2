    <!DOCTYPE html>
<html>
<head>
    <title>Buku Tamu</title>
</head>
<body>

<h2>Form Buku Tamu</h2>

<form method="POST">
    Nama : <br>
    <input type="text" name="nama" required><br><br>

    Email : <br>
    <input type="email" name="email" required><br><br>

    Pesan : <br>
    <textarea name="pesan" required></textarea><br><br>

    <input type="submit" name="simpan" value="Simpan">
</form>

<?php

$conn = mysqli_connect("localhost","root","","buku_tamu");

if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    $sql = "INSERT INTO tamu(nama,email,pesan)
            VALUES('$nama','$email','$pesan')";

    $query = mysqli_query($conn,$sql);

    if($query){
        echo "<br>Data berhasil disimpan";
    } else {
        echo "<br>Data gagal disimpan";
    }
}

?>

</body>
</html>