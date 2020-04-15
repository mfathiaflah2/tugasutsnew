<?php
	include "koneksi.php";
?>

<html>
	<head>
		<title>Data Kuliah </title>
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
					<td colspan="2" align="center" bgcolor="blue">kode kuliah</td>
					<td colspan="2" align="center" bgcolor="blue"> <input type="text" name="kd_kuliah" placeholder="Masukkan kode kuliah"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center" bgcolor="green">nama kuliah</td>
					<td colspan="2" align="center" bgcolor="green"> <input type="text" name="nama_kuliah" placeholder="Masukkan nama kuliah"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center" bgcolor="blue">sks </td>
					<td colspan="2" align="center" bgcolor="blue"> <input type="text" name="sks" placeholder="Masukkan sks"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center" bgcolor="green">kode dosen </d>
					<td colspan="2" align="center" bgcolor="green"> <input type="text" name="kd_dosen" placeholder="Masukkan kode dosen"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center" bgcolor="blue">nama dosen </d>
					<td colspan="2" align="center" bgcolor="blue"> <input type="text" name="kd_dosen" placeholder="Masukkan kode dosen"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center" bgcolor="green">ruang
					<td colspan="2" align="center" bgcolor="green"> <input type="text" name="ruang" placeholder="Masukkan ruang"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center" bgcolor="blue">waktu </d>
					<td colspan="2" align="center" bgcolor="blue"> <input type="text" name="waktu" placeholder="Masukkan waktu"/></td>
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