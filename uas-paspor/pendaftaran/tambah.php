<?php
include '../layout/header.php';
include '../layout/navbar.php';
?>

<div class="container">

<div class="card shadow">

<div class="card-header bg-primary text-white">
    <h4>Tambah Data Pendaftaran</h4>
</div>

<div class="card-body">

<form action="simpan.php" method="POST">

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">NIK</label>
        <input type="text" name="nik" class="form-control" maxlength="16" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea name="alamat" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label">Tanggal Daftar</label>
        <input type="date" name="tanggal_daftar" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Hari</label>
        <input type="text" name="hari" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Jam</label>
        <input type="time" name="jam" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">
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