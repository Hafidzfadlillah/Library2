<?php 
    include 'layout/header.php';
    $data_pelunasan = select("SELECT * FROM history ORDER BY id_lunas DESC");
?>

<link rel="stylesheet" href="css/history.css">
<div class="konten row">
    <!-- awal col -->
    <div class="col-md-10 mx-auto">
        <!-- awal card -->
        <div class="card mt-3">
            <div class="card-header text-light text-center">
                DATA PELUNASAN
            </div>
            <div class="card-body">
                <div class="col">
                    <table class="table table-bordered table-striped mt-3" id="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Peminjam</th>
                                <th>Denda</th>
                                <th>Payment date</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_pelunasan as $user): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $user['peminjam']; ?></td>
                                <td><?= $user['denda']; ?></td>
                                <td><?= $user['']; ?></td>
                                <td width="15%" class="text-center">
                                    <a href="hapus-barang.php?id_pinjam=<?= $user['id_pinjam']; ?>" class="btn btn-danger" onclick="return confirm('Periksa Kembali Pelunasan Apakah Sudah Benar?')">hapus</span></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
            </div>
        </div>
        <div class="card-footer">
        </div>
    </div>
    <!-- akhir card -->                 
</div>
