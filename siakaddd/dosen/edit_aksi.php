<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kd_dosen = $_POST['kd_dosen'];
$nama_dosen = $_POST['nama_dosen'];

 
// update data ke database
$query= mysqli_query($koneksi,"update dosen set nama_dosen='$nama_dosen' where kd_dosen='$kd_dosen'");
 
// mengalihkan halaman kembali ke index.php
 if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
 
?>