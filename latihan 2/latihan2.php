<?php
function rupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}

// Data barang (lebih rapi pakai array)
$barang = [
    ["nama"=>"Buku",      "harga"=>17500, "jumlah"=>2],
    ["nama"=>"Mouse",     "harga"=>30000, "jumlah"=>5],
    ["nama"=>"FlashDisk", "harga"=>70000, "jumlah"=>1],
    ["nama"=>"Pulpen",    "harga"=>22300, "jumlah"=>3]
];

$total = 0;

// hitung total
foreach ($barang as &$b) {
    $b['total'] = $b['harga'] * $b['jumlah'];
    $total += $b['total'];
}

// diskon
$diskon = 5;
$potongan = ($diskon / 100) * $total;
$bayar = $total - $potongan;
?>

<html>
<head>
    <title>Daftar Peralatan</title>
</head>
<body>
<center>
<h2>Contoh Perhitungan dengan PHP</h2>

<table border="1" cellpadding="5">
<tr>
    <th>Nama Peralatan</th>
    <th>Jumlah</th>
    <th>Harga Satuan</th>
    <th>Jumlah Harga</th>
</tr>

<?php foreach ($barang as $b): ?>
<tr>
    <td><?= $b['nama']; ?></td>
    <td><?= $b['jumlah']; ?></td>
    <td><?= rupiah($b['harga']); ?></td>
    <td><?= rupiah($b['total']); ?></td>
</tr>
<?php endforeach; ?>

<tr>
    <td colspan="3" align="right">Total Harga</td>
    <td><?= rupiah($total); ?></td>
</tr>
<tr>
    <td colspan="3" align="right">Diskon (<?= $diskon; ?>%)</td>
    <td><?= rupiah($potongan); ?></td>
</tr>
<tr>
    <td colspan="3" align="right"><b>Jumlah Bayar</b></td>
    <td><b><?= rupiah($bayar); ?></b></td>
</tr>
</table>

</center>
</body>
</html>