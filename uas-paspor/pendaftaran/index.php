<?php
include '../config/koneksi.php';
include '../layout/header.php';
include '../layout/navbar.php';

$data = mysqli_query($koneksi, "SELECT * FROM pendaftaran ORDER BY id DESC");
?>

<div class="container mt-4">

    <div class="card shadow">

        <div class="card-header bg-success text-white d-flex justify-content-between align-items-center">
            <h4 class="mb-0">Data Pendaftaran</h4>

            <a href="tambah.php" class="btn btn-light">
                + Tambah Data
            </a>
        </div>

        <div class="card-body">

            <table class="table table-bordered table-striped table-hover">

                <thead class="table-dark text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Alamat</th>
                        <th>Tanggal</th>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th width="160">Aksi</th>
                    </tr>
                </thead>

                <tbody>

                    <?php
                    $no = 1;

                    if(mysqli_num_rows($data) > 0){

                        while($row = mysqli_fetch_assoc($data)){
                    ?>

                    <tr>

                        <td class="text-center"><?= $no++; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['nik']; ?></td>
                        <td><?= $row['alamat']; ?></td>
                        <td><?= $row['tanggal_daftar']; ?></td>
                        <td><?= $row['hari']; ?></td>
                        <td><?= $row['jam']; ?></td>

                        <td class="text-center">

                            <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">
                                Edit
                            </a>

                            <a href="hapus.php?id=<?= $row['id']; ?>"
                               class="btn btn-danger btn-sm"
                               onclick="return confirm('Yakin ingin menghapus data?')">
                                Hapus
                            </a>

                        </td>

                    </tr>

                    <?php
                        }
                    }else{
                    ?>

                    <tr>
                        <td colspan="8" class="text-center">
                            Belum ada data pendaftaran.
                        </td>
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