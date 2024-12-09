<?php
include 'config/app.php';

// Memeriksa dan menerima id barang yang dipilih admin
if (isset($_GET['id_buku'])) {
    $id_buku = (int)$_GET['id_buku'];
    if (delete_barang($id_buku) > 0) {
        echo "<script>
             alert('Data Berhasil Dihapus'); 
             document.location.href = 'databuku.php';
        </script>";
    } else {
        echo "<script>
             alert('Data Gagal Dihapus'); 
             document.location.href = 'databuku.php';
        </script>";
    }
}

// Memeriksa dan menerima id anggota yang dipilih admin
if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    if (delete_anggota($id) > 0) {
        echo "<script>
             alert('Data Berhasil Dihapus'); 
             document.location.href = 'dataanggota.php';
        </script>";
    } else {
        echo "<script>
             alert('Data Gagal Dihapus'); 
             document.location.href = 'dataanggota.php';
        </script>";
    }
}

// Memeriksa dan menerima id peminjaman yang dipilih admin
if (isset($_GET['id_pinjam'])) {
    $id_pinjam = (int)$_GET['id_pinjam'];
    if (delete_sirkulasi($id_pinjam) > 0) {
        echo "<script>
             alert('Data Berhasil Dihapus'); 
             document.location.href = 'sirkulasi.php';
        </script>";
    } else {
        echo "<script>
             alert('Data Gagal Dihapus'); 
             document.location.href = 'sirkulasi.php';
        </script>";
    }
}
?>
