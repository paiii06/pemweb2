<?php
include '../config/koneksi.php';
include '../layout/header.php';
include '../layout/navbar.php';

$data = mysqli_query($koneksi,"
SELECT daftar_ulang.id, pendaftaran.nama
FROM daftar_ulang
JOIN pendaftaran
ON daftar_ulang.id_pendaftaran = pendaftaran.id
WHERE daftar_ulang.status='Diterima'
");
?>

<div class="container mt-4">

<div class="card shadow">

<div class="card-header bg-primary text-white">
<h4>Tambah Pengurusan Paspor</h4>
</div>

<div class="card-body">

<form action="simpan.php" method="POST">

<div class="mb-3">
<label>Nama Pemohon</label>

<select name="id_daftar_ulang" class="form-control">

<?php while($d=mysqli_fetch_assoc($data)){ ?>

<option value="<?= $d['id'] ?>">
<?= $d['nama'] ?>
</option>

<?php } ?>

</select>

</div>

<div class="mb-3">
<label>Biaya</label>

<input
type="text"
name="biaya"
class="form-control"
value="355000"
readonly>

</div>

<div class="mb-3">
<label>Tanggal Pengurusan</label>

<input
type="date"
name="tanggal_pengurusan"
class="form-control"
required>

</div>

<button class="btn btn-success">
Simpan
</button>

<a href="index.php" class="btn btn-secondary">
Kembali
</a>

</form>

</div>

</div>

</div>

<?php
include '../layout/footer.php';
?>