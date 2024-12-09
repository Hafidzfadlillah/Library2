<?php
    include 'layout/header.php';

    $data_buku = select("SELECT * FROM buku ORDER BY id_buku DESC");
?>
<link rel="stylesheet" href="css/databarang.css">
<div class="konten row">
            <!-- awal col -->
            <div class="col-md-10 mx-auto">
                <!-- awal card -->
                <div class="card mt-3">
                    <div class="card-header text-light text-center">
                        DATA BUKU
                    </div>
                    <div class="card-body">
        <div class="col">
        <table class="table table-bordered table-striped mt-3" id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data_buku as $buku):?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $buku['judul_buku']; ?></td>
                    <td><?= $buku['pengarang']; ?></td>
                    <td><?= $buku['penerbit']; ?></td>
                    <td><?= $buku['jumlah_stok']; ?></td>
                    <td width="15%" class="text-center">
                        <a href="editbuku.php?id_buku=<?= $buku['id_buku']; ?>" class="btn btn-warning">Edit</a>
                        <a href="hapus-barang.php?id_buku=<?= $buku['id_buku']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Hapus Barang Ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <a href="tambahbuku.php" class="btn btn-primary mb-1 float-right">Tambah</a>
        </div>
        </div>
        </div>
                <div class="card-footer">
                        
                        </div>
                </div>
                <!-- akhir card -->                 
    </div>
