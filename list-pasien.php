<?php include("config.php"); ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!----css eksternal-->
    <link href="style/css.css" rel="stylesheet">
    <title>tabel</title>
  </head>
	
	
<body>
    <div class="index">
	<br>
    <form method="post">
    <div class="pendaftaran">
                <div class="input2">
                    <a class="btn btn-primary btn-lg" href="cetak.php" role="button">Download Data</a>
                    <a class="btn btn-primary btn-lg" href="hapus.php" role="button">Hapus Semua</a>
                    
                </div>
        
		
    </form>
    
       
			
	<div class="table">
        <table border="1">
	<thead>
		<tr>
			<th>Tanggal Masuk</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
            <th>Usia</th>
            <th>Keluhan</th>
            <th>Lama Keluhan</th>
        </tr>
    </thead>
    <tbody>

        <?php

        if(isset($_POST['filter'])){
            $sql = "SELECT * FROM data_pasien (tanggal_masuk, nama, jenis_kelamin, usia, keluhan, lama_keluhan) WHERE ('$tanggal_masuk'=='dari_tanggal')";
            $query = mysqli_query($db, $sql);
        }else{
            
        }
        $sql = "SELECT * FROM data_pasien";
        $query = mysqli_query($db, $sql);

        while($data_pasien = mysqli_fetch_array($query)){
            echo "<tr>";

			echo "<td>".$data_pasien['tanggal_masuk']."</td>";
            echo "<td>".$data_pasien['nama']."</td>";
            echo "<td>".$data_pasien['jenis_kelamin']."</td>";
            echo "<td>".$data_pasien['usia']."</td>";
            echo "<td>".$data_pasien['keluhan']."</td>";
            echo "<td>".$data_pasien['lama_keluhan']."</td>";

            echo "</td>";
            
            echo "</tr>";

		}		
		?>
		
	</tbody>
	    </table>
	
    </div>
    </div>
</body>
</html>
