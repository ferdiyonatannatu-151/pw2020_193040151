<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'function.php';
//Query data Tabel smartphone
$elektronik = query("SELECT * FROM elektronik");


$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html>
<head>
	<title>Daftar Elektronik Terbaru</title>
</head>
<body>
	<h1>Daftar Elektronik</h1>
	<table class="table" align="center" border="1"  cellspacing="0" cellpadding="10">
		<thead color = "blue">
			<tr>
				<th>#</th>
				<th>Opsi</th>
				<th>Gambar</th>
				<th>Nama barang</th>
				<th>Fungsi</th>
				<th>Tahun Produksi</th>
				<th>Harga baru</th>
				<th>Harga bekas</th>
				<th>Garansi</th>
				<th>Pusat</th>
				<th>Merek</th>
				<th>Berat barang</th>
			</tr>';
			$i = 1;
			foreach ($elektronik as $elek) {
				$html .='<tr>
				<td>'. $i++ .'</td>
				<td><img src="../bs-binary-admin/assets/img/'. $elek["gambar"].'" width="130"></td>
				<td>'. $elek["nama_barang"].'</td>
				<td>'. $elek["fungsi"].'</td>
				<td>'. $elek["tahun_produksi"].'</td>
				<td>'. $elek["harga_baru"].'</td>
				<td>'. $elek["harga_sekon"]. '</td>
				<td>'. $elek["garansi"]. '</td>
				<td>'. $elek["pusat"].'</td>
				<td>'. $elek["merek"]. '</td>
				<td>'. $elek["berat_barang"]. '</td>
				
				</tr>';
			}	
 $html .= '</table>

	

</body>
</html>';
$mpdf->WriteHTML($html);
$mpdf->Output();

?>