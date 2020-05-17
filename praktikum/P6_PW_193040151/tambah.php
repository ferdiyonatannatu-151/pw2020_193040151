<?php
//Connet To Databases
require 'function.php';
//Tombol Submit mengecek sudah di tekan atau belum
if( isset($_POST["submit"]) ) {
//Pengecekan Berhasil Apa gagal
	if( tambah($_POST) > 0 ) {
		print "
			<script>
				alert('Data Berhasil Ditambahkan!');
				document.location.href = 'index3.php';
			</script>
		";
	} else {
		print "
			<script>
				alert('Data Gagal Ditambahkan!');
				document.location.href = 'index3.php';
			</script>
		";
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	   <link rel="stylesheet" href="assets/css/tambah.css">
<title>Daftar Barang Elektronik</title>
</head>
<body>
	<h2>Tambah Daftar barang Elektronik</h2>
		<form method="post" action="">
			<ul>
				<li>
				<label for="nama_barang">Masukan Nama Barang : </label> 
				<br>
				<input type="text" name="nama_barang" required>
				</li>
				
				<br>
				<li>
				<label for="fungsi">Masukan  Fungsi : </label> 
				<br>
				<input type="text" name="fungsi" >
				</li>
				
				<br>
				
				<li>
				<label for="tahun_produksi">Masukan Tahun produksi:</label>
				<br>
				<input type="text" name="tahun_produksi" >
				</li>
				
				<br>
				
				<li>
				<label for="harga_baru">Masukan Harga baru:</label>	 
				<br>
				<input type="text" name="harga_baru" required>
				</li>
				
				<br>
				
				<li>
				<label for="harga_sekon">Masukan Harga sekon :</label>	 
				<br>	 
				<input type="text" name="harga_sekon" required>
				</li>
				
				<br>

				<li>
				<label for="garansi">Masukan  garansi : </label> 
				<br>
				<input type="text" name="garansi" required>
				</li>
				
				<br>

				<li>
				<label for="pusat">Masukan  Pusat : </label> 
				<br>
				<input type="text" name="pusat" required>
				</li>
				
				<br>

				<li>
				<label for="gambar">Masukan Gambar :</label>		 
				<br>
				<input type="text" name="gambar" required>
				</li>
				
				<br>

				<li>
				<label for="merek">Masukan  merek : </label> 
				<br>
				<input type="text" name="merek" required>
				</li>
				
				<br>

				<li>
				<label for="berat_barang">Masukan  Berat barang : </label> 
				<br>
				<input type="text" name="berat_barang" required>
				</li>
				
				<br>
				
				<td>
					<button type="submit" name="submit">Tambah Data Barang!</button>
				</td>
			</ul>
		</form>
	
	
	
	
</body>
</html>