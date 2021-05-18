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
    <title>List Pasien</title>
  </head>
	
<body>

    <div class="index">
    <form method="POST">
        <label>Filter Tanggal</label>
		<input type="date" name="dari_tanggal">
		<input type="submit" name="filter" value="Filter">
		<input type="text" name="cari_nama" placeholder="Cari Nama Pasien">
		<input type="submit" name="search" value="Cari">
        <input type="submit"  value="Refresh" onClick="document.location.reload(true)">
            <script>
            function reloadpage(){
            location.reload()
            }
            </script>
    </form>
	
   
	<div class="table">
        <table border="1">
	<thead>
		<tr>
            <th>No</th>
			<th>Tanggal Masuk</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
            <th>Usia</th>
            <th>Keluhan</th>
            <th>Lama Keluhan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        <?php
         
        if(isset($_POST['filter'])){
           $mulai = $_POST['dari_tanggal'];
           
            $sql = "SELECT * FROM `data_pasien` WHERE `tanggal_masuk`='$mulai'";
            $query = mysqli_query($db, $sql);
        }

        else{

        if(isset($_POST['search'])){
            $cr = $_POST['cari_nama'];
            
             $sql = "SELECT * FROM `data_pasien` WHERE `nama`='$cr'";
             $query = mysqli_query($db, $sql);
                 
         }else{
             $sql = "SELECT * FROM data_pasien";
         $query = mysqli_query($db, $sql);
         }
        }
        
        while($data_pasien = mysqli_fetch_array($query)){
            echo "<tr>";
            echo "<td>".$data_pasien['id']."</td>";
            echo "<td>".$data_pasien['tanggal_masuk']."</td>";
            echo "<td>".$data_pasien['nama']."</td>";
            echo "<td>".$data_pasien['jenis_kelamin']."</td>";
            echo "<td>".$data_pasien['usia']."</td>";
            echo "<td>".$data_pasien['keluhan']."</td>";
            echo "<td>".$data_pasien['lama_keluhan']."</td>";
            echo "<td>".$data_pasien['statuss']."</td>";
            echo "<td>";
            echo "<a href='form_ubah.php?id=".$data_pasien['id']."'>Ubah Status</a>";
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
