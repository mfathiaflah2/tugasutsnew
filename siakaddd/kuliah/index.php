<?php
	include "koneksi.php";
?>

<html>
	<head>
		<title>Data Kuliah </title>
	</head> 
<body bgcolor = salmon>
	<center>
	<h2>Data Kuliah</h2>
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
	<a href="tambah.php"> Tambah Kuliah</a>
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
			<td bgcolor="#FFD700">kd_kuliah</td>
			<td bgcolor="#FFD700">nama_kuliah</td>
			<td bgcolor="#FFD700">sks</td>
			<td bgcolor="#FFD700">kd_dosen</td>
			<td bgcolor="#FFD700">nama_dosen</td>
			<td bgcolor="#FFD700">ruang</td>
			<td bgcolor="#FFD700">waktu</td>
			<td bgcolor="#FFD700">aksi</td>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
				$data = mysqli_query($koneksi, "select * from kuliah join dosen on kuliah.kd_dosen=dosen.kd_dosen ");
		while ($d = mysqli_fetch_array($data)){
			?>
			?>
			<tr>
				<td bgcolor="#FFD700"><?php echo $no++; ?></td>
				<td bgcolor="#FFD700"><?php echo $d['kd_kuliah']; ?></td>
				<td bgcolor="#FFD700"><?php echo $d['nama_kuliah']; ?></td>
				<td bgcolor="#FFD700"><?php echo $d['sks']; ?></td>
				<td bgcolor="#FFD700"><?php echo $d['kd_dosen']; ?></td>
				<td bgcolor="#FFD700"><?php echo $d['nama_dosen']; ?></td>
				<td bgcolor="#FFD700"><?php echo $d['ruang']; ?></td>
				<td bgcolor="#FFD700"><?php echo $d['waktu']; ?></td>
				<td bgcolor="#FFD700"> 
					<a href="edit.php?kd_kuliah=<?php echo $d['kd_kuliah'] ?>"> Ubah </a>
					<a href="hapus.php?kd_kuliah=<?php echo $d['kd_kuliah'] ?>" 
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