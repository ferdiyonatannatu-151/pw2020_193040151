<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Latihan5b</title>
</head>
<style>
	table {
		border: 1px solid black;
		text-align: center;
		font-size: 20px;
		background-color: skyblue;
	}	
	td {
		padding: 20px;
	}
	h3 {
		text-align : center;
		font-size: 30px;	
	}
</style>
<body>
<h3>Info Detail </h3>
	<table align="center" border="1px">
		<tr>
			<th>Gambar</th>
			<th>Nama Barang</th>
			<th>Fungsi</th>
			<th>Tahun produksi</th>
			<th>Harga baru</th>
			<th>Harga sekon</th>
			<th>Garansi</th>
			<th>Pusat</th>
			<th>Merek</th>
			<th>Berat barang</th>
		</tr>
		
		<tr>
			<td><img src="img/<?= $_GET['id']; ?>"></td>
			<td><?= $_GET['nama_barang']; ?></td>
			<td><?= $_GET['fungsi']; ?>
			<td><?= $_GET['tahun_produksi']; ?></td>
			<td><?= $_GET['harga_baru']; ?></td>
			<td><?= $_GET['harga_sekon']; ?>
			<td><?= $_GET['garansi']; ?>
			<td><?= $_GET['pusat']; ?>
			<td><?= $_GET['merek']; ?>
			<td><?= $_GET['berat_badan']; ?>
		</tr>
	</table>
	<form method="post">
	<br>
	<center><button><a href="index.php">Kembali</a></button></center>
	</form>
</body>
</html>