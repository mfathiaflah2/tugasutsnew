<?php
	include "koneksi.php";
?>

<html>
	<head>
		<title>Data Mahasiswa </title>
	</head> 
<body bgcolor = pink>
	<center>
	<h2>Data Mahasiswa</h2>
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
	<a href="tambah.php"> Tambah Mahasiswa</a>
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
			<td bgcolor="#FFD700">alamat</td>
			<td bgcolor="#FFD700">no_tlp</td>
			<td bgcolor="#FFD700">aksi</td>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi, "select * from mahasiswa");
		while ($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td bgcolor="#FFD700"><?php echo $no++; ?></td>
				<td bgcolor="#FFD700"><?php echo $d['nim']; ?></td>
				<td bgcolor="#FFD700"><?php echo $d['nama']; ?></td>
				<td bgcolor="#FFD700"><?php echo $d['alamat']; ?></td>
				<td bgcolor="#FFD700"><?php echo $d['no_telepon']; ?></td>
				<td bgcolor="#FFD700"> 
					<a href="edit.php?nim=<?php echo $d['nim'] ?>"> Ubah </a>
					<a href="hapus.php?nim=<?php echo $d['nim'] ?>" 
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