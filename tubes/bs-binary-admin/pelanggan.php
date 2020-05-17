<?php
if(!isset($_GET['id'])) {
	header("Location: index3.php");
	exit;
}

require 'function.php';
$id = $_GET['id'];

$elek = query("SELECT * FROM elektronik WHERE id = $id")[0];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>183040070</title>
</head>
<style> 

</style>
<body>
   <div class="content">
           <div class="gambar">
                   <p><img src="../Tugas3/assets/img/<?= $elek['gambar']; ?>">
           </div>
		<div class="desc">
            <p class="nama"><?= $elek['nama_barang']; ?></p>
			<p><?= $elek['fungsi']; ?></p>
			<p><?= $elek['tahun_produksi']; ?></p>
			<p><?= $elek['harga_baru']; ?></p>
			<p><?= $elek['harga_sekon']; ?></p>
			<p><?= $elek['garansi']; ?></p>
			<p><?= $elek['pusat']; ?></p>
			<p><?= $elek['merek']; ?></p>
			<p><?= $elek['berat_barang']; ?></p>
			<p><a href="user.php">Kembali</a></p>
		</div>
   </div>
</body>
</html>