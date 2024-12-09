<?php

    // untuk menampilkan barang
    function select($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    // hapus barang
    function delete_barang($id_buku) {
        global $conn; 
        $query = "DELETE FROM buku WHERE id_buku = $id_buku";
        return mysqli_query($conn, $query);
    }

    // hapus anggota
    function delete_anggota($id) {
        global $conn; 
        $query = "DELETE FROM user WHERE id = $id";
        return mysqli_query($conn, $query);
    }

    // hapus sirkulasi
    function delete_sirkulasi($id_pinjam) {
        global $conn; 
        $query = "DELETE FROM peminjaman WHERE id_pinjam = $id_pinjam";
        return mysqli_query($conn, $query);
    }

    function create_barang($data) {
        global $conn; // Asumsikan $conn adalah koneksi database Anda
    
        $judul_buku = htmlspecialchars($data["judul_buku"]);
        $pengarang = htmlspecialchars($data["pengarang"]);
        $penerbit = htmlspecialchars($data["penerbit"]);
        $jumlah_stok = htmlspecialchars($data["jumlah_stok"]);
    
        // Pastikan jumlah kolom sesuai dengan tabel database
        $query = "INSERT INTO buku (judul_buku, pengarang, penerbit, jumlah_stok) VALUES ('$judul_buku', '$pengarang', '$penerbit', '$jumlah_stok')";
    
        return mysqli_query($conn, $query);
    }
    function update_barang($post)
    {
    global $conn;

    $id_buku = $post['id_buku'];
    $pengarang = $post['pengarang'];
    $penerbit = $post['penerbit'];
    $jumlah_stok = $post['jumlah_stok'];

    // query ubah data
    $query = "UPDATE buku SET pengarang = '$pengarang', penerbit = '$penerbit', jumlah_stok = '$jumlah_stok' WHERE id_buku = 
    $id_buku";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function update_anggota($post)
    {
    global $conn;

    $id = $post['id'];
    $tgl_lahir = $post['tgl_lahir'];
    $jenis_kelamin = $post['jenis_kelamin'];

    // query ubah data
    $query = "UPDATE user SET tgl_lahir = '$tgl_lahir', jenis_kelamin = '$jenis_kelamin' WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function calculateDenda($jatuh_tempo) {
    $current_date = new DateTime();
    $jatuh_tempo_date = new DateTime($jatuh_tempo);
    $interval = $current_date->diff($jatuh_tempo_date);
    $days_late = max(0, $interval->days); // Ensure days_late is non-negative
    $denda_per_day = 10000; // Amount of fine per day in Rupiah
    $total_denda = $days_late * $denda_per_day;
    return array('days_late' => $days_late, 'total_denda' => $total_denda);
}

// history pelunasas



?>