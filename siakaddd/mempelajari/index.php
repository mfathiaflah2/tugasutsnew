<?php
	include "koneksi.php";
?>

<html>
	<head>
		<title>Data Mempelajari </title>
	</head> 
<body bgcolor = salmon>
	<center>
	<h2>Data Mempelajari</h2>
	<style type="text/css">
			td {
				padding: 10px;
			}
			table,th, td {
				border-collapse: collapse;
			}

			th {
				background: lemonchiffon;
				padding: 10px;
				color: lemonchiffon
			}
		</style>
	
	<br/>
	<a href="tambah.php"> Tambah Mempelajari</a>
	<br/>
	<br/>
	<br>
	<a href=".."> Kembali</a>
	<br/>
	<br>
	</center>
	<table border=1 align="center">
		<tr>
			<td bgcolor="#FFD700">no</td>
			<td bgcolor="#FFD700">nim</td>
			<td bgcolor="#FFD700">nama</td>
			<td bgcolor="#FFD700">mata kuliah</td>
			<td bgcolor="#FFD700">nama dosen</td>
			<td bgcolor="#FFD700">nilai</td>
			<td bgcolor="#FFD700">aksi</td>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi, "select * from mempelajari JOIN mahasiswa ON mempelajari.nim=mahasiswa.nim JOIN kuliah ON mempelajari.kd_kuliah=kuliah.kd_kuliah JOIN dosen ON dosen.kd_dosen=kuliah.kd_dosen");
		while ($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td bgcolor="#FFD700"><?php echo $no++; ?></td>
				<td bgcolor="#FFD700"><?php echo $d['nim']; ?></td>
				<td bgcolor="#FFD700"><?php echo $d['nama']; ?></td>
				<td bgcolor="#FFD700"><?php echo $d['nama_kuliah']; ?></td>
				<td bgcolor="#FFD70 0"><?php echo $d['nama_dosen']; ?></td>
				<td bgcolor="#FFD700"><?php echo $d['nilai']; ?></td>
				<td bgcolor="#FFD700"> 
					<!-- <a href="edit.php?nim=<?php echo $d['nim'] ?>&kd_kuliah=<?php echo $d['kd_kuliah'] ?>"> Ubah </a> -->
					<a href="hapus.php?nim=<?php echo $d['nim'] ?>&kd_kuliah=<?php echo $d['kd_kuliah'] ?>" 
					onclick="return confirm('Apakah anda yakin akan menghapus data ini ?')"> Hapus </a>
				</td>
			</tr>
			<?php
		}
		?>
	</table>
	<br/>
	<br/>
</body>
</html>