<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_telepon = $_POST['no_telepon'];
 
// update data ke database
$query= mysqli_query($koneksi,"update mahasiswa set nama='$nama', alamat='$alamat' ,no_telepon
	='$no_telepon'  where nim='$nim'");
 
// mengalihkan halaman kembali ke index.php
 if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
 
?>