<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$kd_kuliah = $_POST['kd_kuliah'];
$nama_kuliah = $_POST['nama_kuliah'];
$sks = $_POST['sks'];
$kd_dosen = $_POST['kd_dosen'];
$ruang = $_POST['ruang'];
$waktu = $_POST['waktu'];
 
// menginput data ke database
$query= mysqli_query($koneksi,"insert into kuliah values('$kd_kuliah','$nama_kuliah','$sks','$kd_dosen','$ruang','$waktu')");
 
// mengalihkan halaman kembali ke index.php
if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
 
?>