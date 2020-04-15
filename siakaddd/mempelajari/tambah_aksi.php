<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$kd_kuliah = $_POST['kd_kuliah'];
$nilai = $_POST['nilai'];

 
// menginput data ke database
$query= mysqli_query($koneksi,"insert into mempelajari values('$nim','$kd_kuliah','$nilai')");
 
// mengalihkan halaman kembali ke index.php
if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
 
?>