<?php
	include "koneksi.php";
?>

<html>
	<head>
		<title>Data Mahasiswa </title>
	</head>
<body bgcolor="orangered">
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
					<td colspan="2" align="center" bgcolor="yellow">nim</td>
					<td colspan="2" align="center" bgcolor="yellow"> <input type="number " name="nim" placeholder="Masukkan nim data"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center" bgcolor="orange">kode kuliah </td>
					<td colspan="2" align="center" bgcolor="orange"> <input type="text" name="kd_kuliah" placeholder="Masukkan kode kuliah"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center" bgcolor="yellow">nilai </td>
					<td colspan="2" align="center" bgcolor="yellow"> <input type="text" name="nilai" placeholder="Masukkan nilai"/></td>
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