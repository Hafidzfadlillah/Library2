<?php

include 'config/app.php';


// menerima id pinjma yang dipilih admin
$id_pinjam = (int)$_GET['id_pinjam'];



if (delete_sirkulasi($id_pinjam)> 0){
    echo "<script>
         alert('Data Berhasil Dihapus'); 
         document.location.href = 'sirkulasi.php';
    </script>";
}else{
    echo "<script>
         alert('Data Gagal Dihapus'); 
         document.location.href = 'sirkulasi.php';
    </script>";
}