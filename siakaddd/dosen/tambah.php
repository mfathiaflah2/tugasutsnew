<?php
	include "koneksi.php";
?>

<html>
	<head>
		<title>Data Dosen</title>
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
					<td colspan="2" align="center" bgcolor="yellow">kode dosen</td>
					<td colspan="2" align="center" bgcolor="yellow"> <input type="number " name="kd_dosen" placeholder="Masukkan kode dosen"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center" bgcolor="orange">nama </td>
					<td colspan="2" align="center" bgcolor="orange"> <input type="text" name="nama_dosen" placeholder="Masukkan nama dosen"/></td>
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