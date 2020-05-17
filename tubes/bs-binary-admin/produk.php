 <?php
//Connect To Databases => funtions
require 'function.php';
//Query data Tabel Film
$elektronik = query("SELECT * FROM elektronik");

if( isset($_POST['cari'])) {
	$elektronik   = cari($_POST["keyword"]);
}

 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Daftar Barang</title>
</head>
<body> 
	<h2 align="center">Daftar Data Barang Elektronik</h2>
	
	
	<form action="" method="post">
		<center><input type="text" name="keyword" size="45" autofocus placeholder="Masukan keyword pencarian..." autocomplete="off">
		<button type="submit" name="cari">Cari!</button></center>
	</form>
	<br>
	<table align="center" border="1"  cellspacing="0" cellpadding="10">
			<tr>
				<th>Gambar</th>
				<th>Nama barang</th>
				<th>Tahun Produksi</th>
				<th>Harga baru</th>
				<th>Harga bekas</th>
				<th>Merek</th>
				<th>Opsi</th>

			</tr>
			<?php $i = 1; ?>	
				<?php foreach($elektronik as $elek) : ?>
			<tr>
				<td><img src="../bs-binary-admin/assets/img/<?= $elek['gambar']; ?>"></td>
				<td><?= $elek['nama_barang']; ?></td>
				<td><?= $elek['tahun_produksi']; ?></td>
				<td><?= $elek['harga_baru']; ?></td>
				<td><?= $elek['harga_sekon']; ?></td>
				<td><?= $elek['merek']; ?></td>
		<td><a href="cetak.php" class="btn btn-success">Beli</a>
				<br> 
					<a href="cetak.php" class="btn btn-success">Keranjang</a>
				</td>
			</tr>
				<?php endforeach; ?>
	</table>
	
	
</body>
</html> 