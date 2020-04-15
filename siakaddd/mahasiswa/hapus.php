<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$nim = $_GET['nim'];
 
 
// menghapus data dari database
$query= mysqli_query($koneksi,"delete from mahasiswa where nim='$nim'");
 
// mengalihkan halaman kembali ke index.php
 if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
?>