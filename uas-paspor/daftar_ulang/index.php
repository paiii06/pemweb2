<?php
include '../config/koneksi.php';
include '../layout/header.php';
include '../layout/navbar.php';

$data = mysqli_query($koneksi,"
SELECT
daftar_ulang.*,
pendaftaran.nama
FROM daftar_ulang
JOIN pendaftaran
ON daftar_ulang.id_pendaftaran = pendaftaran.id
");
?>

<div class="container mt-4">

<div class="card shadow">

<div class="card-header bg-primary text-white d-flex justify-content-between">

<h4>Data Daftar Ulang</h4>

<a href="tambah.php" class="btn btn-light">
+ Daftar Ulang
</a>

</div>

<div class="card-body">

<table class="table table-bordered table-striped">

<thead class="table-dark">

<tr>
<th>No</th>
<th>Nama</th>
<th>No Antrian</th>
<th>KTP</th>
<th>KK</th>
<th>Ijazah</th>
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

<td><?= $row['no_antrian'] ?></td>

<td><?= $row['ktp'] ?></td>

<td><?= $row['kk'] ?></td>

<td><?= $row['ijazah'] ?></td>

<td><?= $row['status'] ?></td>

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