<?php

include("config.php");

	// buat query hapus
	$sql = "TRUNCATE TABLE data_pasien";
	$query = mysqli_query($db, $sql);
	
	// apakah query hapus berhasil?
	if( $query ){
		header('Location: list-pasien.php');
	} else {
		die("gagal menghapus...");
	}
	
?>
