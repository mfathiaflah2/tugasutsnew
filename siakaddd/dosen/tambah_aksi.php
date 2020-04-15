<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kd_dosen = $_POST['kd_dosen'];
$nama_dosen = $_POST['nama_dosen'];
 
// menginput data ke database
$query= mysqli_query($koneksi,"insert into dosen values('$kd_dosen','$nama_dosen')");
 
// mengalihkan halaman kembali ke index.php
if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
 
?>