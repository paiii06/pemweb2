<html>
<head>
    <title>Contoh Counter</title>
</head>
<body>

<?php
$nama_file = "counter.dat";

if (file_exists($nama_file)) {
    // buka file
    $berkas = fopen($nama_file, "r");
    // baca isi file
    $pencacah = (int) trim(fgets($berkas, 255));
    // tambah 1
    $pencacah++;
    // tutup file
    fclose($berkas);
} else {
    // kalau file belum ada
    $pencacah = 1;
}

// simpan kembali ke file
$berkas = fopen($nama_file, "w");
fputs($berkas, $pencacah);
fclose($berkas);

// tampilkan ke web
print("Anda pengunjung ke-$pencacah <br>\n");
?>

</body>
</html>