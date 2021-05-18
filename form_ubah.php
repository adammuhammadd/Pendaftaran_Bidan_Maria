<html>
<head>
	<title>Status Pasien</title>
</head>
<body>
	<?php
	// Load file koneksi.php
	include "config.php";
	// Ambil data NIS yang dikirim oleh index.php melalui URL
	$id = $_GET['id'];
	$sql = "SELECT * FROM data_pasien WHERE id='".$id."'";
	$query = mysqli_query($db, $sql);
	$data = mysqli_fetch_array($query); // Ambil data dari hasil eksekusi $sql
	?>
	
	<form method="post" action="proses_ubah.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
	<table cellpadding="8">
	
	<tr>
		<td>Selesaikan Status Pemeriksaan Pasien?</td>
		<td><input type="hidden" name="statuss" value="Selesai"></td>
	</tr>
	</table>
	
	<hr>
	<input type="submit" class="btn" value="Selesaikan" name="ubah">
	<a href="list-pasien.php"><input type="button" value="Batal"></a>
	</form>
</body>
</html>
