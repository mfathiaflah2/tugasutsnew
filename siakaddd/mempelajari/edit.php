<?php
	include 'koneksi.php';
?>
<html>
<head>
	<title>Data Mahasiswa </title>
</head>
<body bgcolor="pink">
 <center>
	<h2>DATA MAHASISWA</h2>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	$id = $_GET['nim'];
	$data = mysqli_query($koneksi,"select * from mahasiswa where nim='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi.php">
			<table>
				<tr>			
					<td>Nim</td>
					<td>
						<input type="text" name="nim" value="<?php echo $d['nim']; ?>" >
					</td>
				</tr>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
					</td>
				</tr>
				
				<tr>
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td>No Telepon</td>
					<td><input type="text" name="no_telepon" value="<?php echo $d['no_telepon']; ?>"></td>
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