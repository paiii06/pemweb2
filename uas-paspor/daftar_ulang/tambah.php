<?php
include '../config/koneksi.php';
include '../layout/header.php';
include '../layout/navbar.php';

// Ambil data pendaftaran
$data = mysqli_query($koneksi, "SELECT * FROM pendaftaran");

// Ambil nomor antrian terakhir
$q = mysqli_query($koneksi, "SELECT MAX(no_antrian) AS nomor FROM daftar_ulang");
$hasil = mysqli_fetch_assoc($q);

$nomor = $hasil['nomor'];

if ($nomor == "") {
    $nomor = 1;
} else {
    $nomor = $nomor + 1;
}
?>

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-primary text-white">
            <h4>Tambah Daftar Ulang</h4>
        </div>

        <div class="card-body">

            <form action="simpan.php" method="POST">

                <div class="mb-3">
                    <label class="form-label">Nama Pemohon</label>

                    <select name="id_pendaftaran" class="form-control" required>

                        <?php while($d = mysqli_fetch_assoc($data)){ ?>

                        <option value="<?= $d['id']; ?>">
                            <?= $d['nama']; ?>
                        </option>

                        <?php } ?>

                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Nomor Antrian</label>

                    <input
                        type="number"
                        name="no_antrian"
                        class="form-control"
                        value="<?= $nomor; ?>"
                        readonly>
                </div>

                <div class="mb-3">
                    <label class="form-label">KTP</label>

                    <select name="ktp" class="form-control">
                        <option value="Lengkap">Lengkap</option>
                        <option value="Tidak Lengkap">Tidak Lengkap</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">KK</label>

                    <select name="kk" class="form-control">
                        <option value="Lengkap">Lengkap</option>
                        <option value="Tidak Lengkap">Tidak Lengkap</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Ijazah</label>

                    <select name="ijazah" class="form-control">
                        <option value="Lengkap">Lengkap</option>
                        <option value="Tidak Lengkap">Tidak Lengkap</option>
                    </select>
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