<?php
//Connect To Databases
$conn = mysqli_connect('localhost', 'root', '', 'pw_193040151');

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}



function tambah($data) {
	global $conn;
	
	$gbr = htmlspecialchars($data["gambar"]);
	$nbrg = htmlspecialchars($data["nama_barang"]);
	$fgi = htmlspecialchars($data["fungsi"]);
	$tpdi = htmlspecialchars($data["tahun_produksi"]);
	$hbr = htmlspecialchars($data["harga_baru"]);
	$hsk = htmlspecialchars($data["harga_sekon"]);
	$gri = htmlspecialchars($data["garansi"]);
	$pst = htmlspecialchars($data["pusat"]);
	$mrk = htmlspecialchars($data["merek"]);
	$bbrg = htmlspecialchars($data["berat_barang"]);
	
	// Query insert data 
	$query = "INSERT INTO elektronik VALUES 
				('', '$gbr', '$nbrg', '$fgi', '$tpdi', '$hbr','$hsk','$gri','$pst','$mrk','$bbrg')
			 ";
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);
}



function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id");
	
	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn;
	
	$id = $data["id"];
	$gbr = htmlspecialchars($data["gambar"]);
	$nbrg = htmlspecialchars($data["nama_barang"]);
	$fgi = htmlspecialchars($data["fungsi"]);
	$tpdi = htmlspecialchars($data["tahun_produksi"]);
	$hbr = htmlspecialchars($data["harga_baru"]);
	$hsk = htmlspecialchars($data["harga_sekon"]);
	$gri = htmlspecialchars($data["garansi"]);
	$pst = htmlspecialchars($data["pusat"]);
	$mrk = htmlspecialchars($data["merek"]);
	$bbrg = htmlspecialchars($data["berat_barang"]);
	
	// Query insert data 
	$query = "UPDATE elektronik SET 
				gambar = '$gbr',
				nama_barang = '$nbrg',
				fungsi = '$fgi',
				tahun_produksi = '$tpdi',
				harga_baru = '$hbr',
				harga_sekon = '$hsk',
				garansi = '$gri',
				pusat = '$pst',
				merek = '$mrk',
				berat_barang = '$bbrg'
			 WHERE id = $id
			 ";
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);
}

function cari($keyword) {
	$query = "SELECT * FROM elektronik WHERE
				nama_barang LIKE '%$keyword%' OR
				fungsi LIKE '%$keyword%' OR
				tahun_produksi LIKE '%$keyword%' OR
				harga_baru LIKE '%$keyword%' OR
				harga_sekon LIKE '%$keyword%' OR
				garansi LIKE '%$keyword%' OR 
				pusat LIKE '%$keyword%' OR
				merek LIKE '%$keyword%' OR
				berat_barang LIKE '%$keyword%' 

			";
	return query($query);
}


function registrasi($data) {
	global $conn;

	$username =strtolower(stripslashes($data["username"]));
	$password =mysqli_real_escape_string($conn, $data["password"]);
	$password2 =mysqli_real_escape_string($conn, $data["password2"]);

	// cek username sudah ada atau belum

     $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
     if( mysqli_fetch_assoc($result)) {
     	echo "<script>
     	alert('username sudah terdaftar!')</script>";

     	return false;
     }


	//cek konfirmasi password
	if( $password !== $password2) {
		echo "<script>
		alert('konfirmasi password tidak sesuai!');
		</script>";

		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//tambahkan user baru ke data base

	mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

	return mysqli_affected_rows($conn);


}

?>