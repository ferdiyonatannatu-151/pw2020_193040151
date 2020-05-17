<?php
$conn = mysqli_connect('localhost', 'root', '', 'pw_193040151');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<title>Latihan5a</title>
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
	<center><h2>Daftar Barang Elektronik</h2></center>
 <div class="container">
   <?php
            $results = mysqli_query($conn, "SELECT * FROM elektronik");
            while ($row = mysqli_fetch_assoc($results)) {
   ?>
        <div class="content">
           <div class="gambar">
                   <p><img width="150px" align="center"  src="img/<?= $row['gambar']; ?>">
           </div>
            <p class="nama">
			<p><?= $row['nama_barang']; ?></p>
			<p><?= $row['fungsi']; ?></p>
			<p><?= $row['tahun_produksi']; ?></p>
			<p><?= $row['harga_baru']; ?></p>
			<p><?= $row['harga_sekon']; ?></p>
			<p><?= $row['garansi']; ?></p>
			<p><?= $row['pusat']; ?></p>
			<p><?= $row['merek']; ?></p>
			<p><?= $row['berat_barang']; ?></p>
        </div>
  <?php } ?>
 </div>
</body>
</html>