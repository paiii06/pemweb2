<?php
include '../config/koneksi.php';
include '../layout/header.php';
include '../layout/navbar.php';

$data = mysqli_query($koneksi,"
SELECT
pengurusan.*,
pendaftaran.nama
FROM pengurusan
JOIN daftar_ulang ON pengurusan.id_daftar_ulang = daftar_ulang.id
JOIN pendaftaran ON daftar_ulang.id_pendaftaran = pendaftaran.id
");
?>

<div class="container mt-4">

<div class="card shadow">

<div class="card-header bg-success text-white d-flex justify-content-between">
    <h4>Data Pengurusan Paspor</h4>

    <a href="tambah.php" class="btn btn-light">
        + Tambah Pengurusan
    </a>
</div>

<div class="card-body">

<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>
    <th>No</th>
    <th>Nama</th>
    <th>Biaya</th>
    <th>Tanggal</th>
    <th>Status</th>
</tr>

</thead>

<tbody>

<?php
$no=1;

while($row=mysqli_fetch_assoc($data)){
?>

<tr>

<td><?= $no++ ?></td>
<td><?= $row['nama'] ?></td>
<td>Rp <?= number_format($row['biaya'],0,',','.') ?></td>
<td><?= $row['tanggal_pengurusan'] ?></td>
<td><?= $row['status_pengurusan'] ?></td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</div>

<?php
include '../layout/footer.php';
?>