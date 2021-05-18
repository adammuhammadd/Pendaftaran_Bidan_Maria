<?php

include("config.php");
$id = $_GET['id'];
// cek apakah tombol simpan sudah diklik atau blum?
if(isset($_POST['ubah'])){
    // ambil data dari formulir
	$statuss = $_POST['statuss'];
    // buat query update
    $sql = "UPDATE data_pasien SET statuss='$statuss' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: list-pasien.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }

} else {
    die("Akses dilarang...");
}

?>