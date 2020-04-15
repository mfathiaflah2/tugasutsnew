<?php
	include 'koneksi.php';
?>
<html>
<head>
	<title>Data Kuliah </title>
</head>
<body bgcolor="pink">
 <center>
	<h2>DATA KULIAH</h2>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>EDIT DATA KULIAH</h3>
 
	<?php
	$id= $_GET['kd_kuliah'];
	$data = mysqli_query($koneksi,"select * from kuliah where kd_kuliah='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi.php">
			<table>
				<tr>			
					<td>kode kuliah</td>
					<td>
						<input type="text" name="kd_kuliah" value="<?php echo $d['kd_kuliah']; ?>" >
					</td>
				</tr>
				<tr>			
					<td>nama kuliah</td>
					<td>
						<input type="text" name="nama_kuliah" value="<?php echo $d['nama_kuliah']; ?>">
					</td>
				</tr>
				
				<tr>
					<td>sks</td>
					<td><input type="text" name="sks" value="<?php echo $d['sks']; ?>"></td>
				</tr>
				<tr>
					<td>kode dosen</td>
					<td><input type="text" name="kd_dosen" value="<?php echo $d['kd_dosen']; ?>"></td>
				</tr>
				<tr>
					<td>ruang</td>
					<td><input type="text" name="ruang" value="<?php echo $d['ruang']; ?>"></td>
				</tr>
				<tr>
					<td>waktu</td>
					<td><input type="text" name="waktu" value="<?php echo $d['waktu']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
			<tr><td>
		</form>
		<?php 
	}
	?>
 </center>
</body>
</html>