<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$nim = $_GET['nim'];
	$query_mysql = $host->query("SELECT * FROM mahasiswa1 WHERE nim='$nim'");
	$nomor = 1;
	while($data = $query_mysql->fetch_array()){
	?>
	<form action="update.php" method="post">		
		<table>
			<tr>
				<td>Nim</td>
				<td>
					<input type="text" name="nim" value="<?php echo $data['nim'] ?>">
				</td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>">
				</td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>
</html>