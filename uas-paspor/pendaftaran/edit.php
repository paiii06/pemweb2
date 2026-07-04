<?php
include '../config/koneksi.php';
include '../layout/header.php';
include '../layout/navbar.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM pendaftaran WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>

<div class="container mt-4">

<div class="card shadow">

<div class="card-header bg-warning text-dark">
    <h4>Edit Data Pendaftaran</h4>
</div>

<div class="card-body">

<form action="update.php" method="POST">

<input type="hidden" name="id" value="<?= $row['id']; ?>">

<div class="mb-3">
<label>Nama</label>
<input type="text" name="nama" class="form-control"
value="<?= $row['nama']; ?>" required>
</div>

<div class="mb-3">
<label>NIK</label>
<input type="text" name="nik" class="form-control"
value="<?= $row['nik']; ?>" required>
</div>

<div class="mb-3">
<label>Alamat</label>
<textarea name="alamat" class="form-control" required><?= $row['alamat']; ?></textarea>
</div>

<div class="mb-3">
<label>Tanggal Daftar</label>
<input type="date"
name="tanggal_daftar"
class="form-control"
value="<?= $row['tanggal_daftar']; ?>">
</div>

<div class="mb-3">
<label>Hari</label>
<input type="text"
name="hari"
class="form-control"
value="<?= $row['hari']; ?>">
</div>

<div class="mb-3">
<label>Jam</label>
<input type="time"
name="jam"
class="form-control"
value="<?= $row['jam']; ?>">
</div>

<button class="btn btn-success">
Update
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