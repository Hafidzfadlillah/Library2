<?php
    include 'layout/header.php';

    $data_anggota = select("SELECT * FROM user ORDER BY id DESC");
?>
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
                    <th>Nama</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php $no = 1; ?>
                <?php foreach ($data_anggota as $user):?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $user['nama']; ?></td>
                    <td><?= $user['tgl_lahir']; ?></td>
                    <td><?= $user['jenis_kelamin']; ?></td>
                    <td width="15%" class="text-center">
                        <a href="editanggota.php?id=<?= $user['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="hapus-barang.php?id=<?= $user['id']; ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin Ingin Hapus Data Ini?')">Hapus</a>
                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
        <a href="register.php" class="btn btn-primary mb-1 float-right">Tambah</a>
        </div>
        </div>
        </div>
                <div class="card-footer">
                        
                        </div>
                </div>
                <!-- akhir card -->                 
    </div>
