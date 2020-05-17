<?php

function koneksi() {
	$conn = mysqli_connect('localhost', 'root', '', 'pw_193040151');
		return $conn;
}


function query($sql) {
	
	$conn = koneksi();
	$results = mysqli_query($conn, $sql);
	
	$rows = [];
	while ( $row = mysqli_fetch_assoc($results) ) {
		$rows[] = $row;
	};
	return $rows;
}	
?>