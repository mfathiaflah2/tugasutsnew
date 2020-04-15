<?php
	include "koneksi.php";
?>

<html>
	<head>
		<title>Data Dosen </title>
	</head> 
<body bgcolor = salmon>
	<center>
	<h2>Data Dosen</h2>
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
	<a href="tambah.php"> Tambah Dosen</a>
	<br/>
	<br>
	<a href=".."> Kembali</a>
	<br/>
	<br>
	<br/>
	</center>
	<table border=1 align="center">
		<tr>
			<td bgcolor="#FFD700">no</td>
			<td bgcolor="#FFD700">kd_dosen</td>
			<td bgcolor="#FFD700">nama_dosen</td>
			<td bgcolor="#FFD700">aksi</td>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi, "select * from dosen");
		while ($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td bgcolor="#FFD700"><?php echo $no++; ?></td>
				<td bgcolor="#FFD700"><?php echo $d['kd_dosen']; ?></td>
				<td bgcolor="#FFD700"><?php echo $d['nama_dosen']; ?></td>
				<td bgcolor="#FFD700"> 
					<a href="edit.php?kd_dosen=<?php echo $d['kd_dosen'] ?>"> Ubah </a>
					<a href="hapus.php?kd_dosen=<?php echo $d['kd_dosen'] ?>" 
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