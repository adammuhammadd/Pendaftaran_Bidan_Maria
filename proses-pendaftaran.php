<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
	$tanggal_masuk = $_POST['tanggal_masuk'];	
	
	$nama = $_POST['nama'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$usia = $_POST['usia'];
	$keluhan = $_POST['keluhan'];
	$lama_keluhan = $_POST['lama_keluhan'];
	
	// buat query
	$sql = "INSERT INTO data_pasien (tanggal_masuk, nama, jenis_kelamin, usia, keluhan, lama_keluhan) VALUE ('$tanggal_masuk', '$nama', '$jenis_kelamin', '$usia', '$keluhan', '$lama_keluhan')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: antrian.php?status=sukses');
		
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: index.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
