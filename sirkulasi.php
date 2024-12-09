<?php
include 'layout/header.php';

$data_buku = select("SELECT * FROM peminjaman ORDER BY id_pinjam DESC");

?>
<style>
.badge {
    color: black;
}
.btn-success {
    
    background-color: white;
}
</style>
<link rel="stylesheet" href="css/databarang.css">
<div class="konten row">
    <!-- awal col -->
    <div class="col-md-10 mx-auto">
        <!-- awal card -->
        <div class="card mt-3">
            <div class="card-header text-light text-center">
                DATA ANGGOTA
            </div>
            <div class="card-body">
                <div class="col">
                    <table class="table table-bordered table-striped mt-3" id="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul Buku</th>
                                <th>Peminjam</th>
                                <th>Tgl Pinjam</th>
                                <th>Jatuh Tempo</th>
                                <th>Denda</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            <?php foreach ($data_buku as $user): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $user['judul_buku']; ?></td>
                                <td><?= $user['peminjam']; ?></td>
                                <td><?= $user['tgl_pinjam']; ?></td>
                                <td><?= $user['jatuh_tempo']; ?></td>
                                <td width="15%" class="text-center">
                                    <?php
                                        $denda_info = calculateDenda($user['jatuh_tempo']);
                                    ?>
                                    <span class="badge badge-danger">Rp. <?= number_format($denda_info['total_denda'], 0, ',', '.'); ?></span><br>
                                    Terlambat: <?= $denda_info['days_late']; ?> Hari
                                </td>
                                <td width="15%" class="text-center">
                                    <a href="hapus-barang.php?id_pinjam=<?= $user['id_pinjam']; ?>" class="btn btn-success" onclick="return confirm('Periksa Kembali Pelunasan Apakah Sudah Benar?')">&#10004;</span></a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <a href="peminjam.php" class="btn btn-primary mb-1 float-right">Tambah</a>
                    <a href="history.php" class="btn btn-danger mb-1 float-right">Riwayat Pelunasan</a>
                </div>
            </div>
        </div>
        <div class="card-footer">
        </div>
    </div>
    <!-- akhir card -->                 
</div>
