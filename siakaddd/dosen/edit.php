<?php
	include 'koneksi.php';
?>
<html>
<head>
	<title>Data Dosen </title>
</head>
<body bgcolor="pink">
 <center>
	<h2>DATA DOSEN</h2>
	<br/>
	<a href="index.php">Kembali</a>
	<br/>
	<br/>
	<h3>EDIT DATA DOSEN</h3>
 
	<?php
	$id = $_GET['kd_dosen'];
	$data = mysqli_query($koneksi,"select * from dosen where kd_dosen='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="edit_aksi.php">
			<table>
				<tr>			
					<td>Kode Dosen</td>
					<td>
						<input type="text" name="kd_dosen" value="<?php echo $d['kd_dosen']; ?>" >
					</td>
				</tr>
				<tr>			
					<td>Nama Dosen</td>
					<td>
						<input type="text" name="nama_dosen" value="<?php echo $d['nama_dosen']; ?>">
					</td>
				</tr>
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