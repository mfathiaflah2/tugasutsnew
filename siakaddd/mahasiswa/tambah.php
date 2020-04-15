<?php
	include "koneksi.php";
?>

<html>
	<head>
		<title>Data Mahasiswa </title>
	</head>
<body bgcolor="pink">
	<center>
	<h2>Tambah Data</h2>
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
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<form method="post" action="tambah_aksi.php">
			<table border="5" width="400">
				<tr>
					<td colspan="2" align="center" bgcolor="blue">nim</td>
					<td colspan="2" align="center" bgcolor="blue"> <input type="number " name="nim" placeholder="Masukkan nim data"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center" bgcolor="green">nama </td>
					<td colspan="2" align="center" bgcolor="green"> <input type="text" name="nama" placeholder="Masukkan nama data"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center" bgcolor="blue">alamat </td>
					<td colspan="2" align="center" bgcolor="blue"> <input type="text" name="alamat" placeholder="Masukkan alamat data"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center" bgcolor="green">no_tlp </d>
					<td colspan="2" align="center" bgcolor="green"> <input type="number" name="no_telepon" placeholder="Masukkan no_telepon data"/></td>
				</tr>
				<table width="10" >
				<tr>
					<td> <input type="submit" value="SIMPAN"></td>
				</tr>
				<tr>
					<td> <input type="reset" value="RESET"></td>
				</tr>		
			</table>
	</form>
		<br/>
	<br/>
	
	</center>
</body>
</html>