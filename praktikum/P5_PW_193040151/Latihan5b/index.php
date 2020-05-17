<?php
require 'function.php';
 $elektronik = query("SELECT * FROM elektronik");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Latihan5b</title>
</head>
	<style>
		.container {
			border: 1px solid black;
			text-align: center;
			font-size: 20px;
			background-color : orange;
			margin-left: 300px;
            margin-right: 300px;
		}
		.content {
			
		}
		.gambar {
			
			
		}
	</style>
<body bgcolor="turquoise">
	<center><h2>Daftar barang elektronik</h2></center>
 <div class="container">
 			<?php foreach ($elektronik as $elek) : ?>
        <div class="content">
           <div class="gambar">
                   <p><img src="img/<?= $elek['gambar']; ?>">
           </div>
            <p class="nama"></p>
			<p><?= $elek['nama_barang']; ?></p>
			<p><?= $elek['fungsi']; ?></p>
			<p><?= $elek['tahun_produksi']; ?></p>
			<p><?= $elek['harga_baru']; ?></p>
			<p><?= $elek['harga_sekon']; ?></p>
			<p><?= $elek['garansi']; ?></p>
			<p><?= $elek['pusat']; ?></p>
			<p><?= $elek['merek']; ?></p>
			<p><?= $elek['berat_barang']; ?></p>
			<?php endforeach; ?>
        </div>
 </div>
</body>
</html>