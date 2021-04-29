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
    <title>pendaftaran</title>
</head>

<body>
<?php
     
        $sql = "SELECT * FROM data_pasien";
        $query = mysqli_query($db, $sql);
?>

<div class="index">
        <div class="jumbotron">
            <h1 class="display-4">Tanggapan anda telah terkirim ke Bidan</h1>
            <p class="lead">Nomor Antrian Anda Adalah</p>
            <div class="lingkaran"><h2><?php echo mysqli_num_rows($query) ?></h2></div>
            <p>semoga lekas sembuh</p>
            <p class="lead">
              <a class="btn btn-primary btn-lg" href="index.php" role="button">pendaftar selanjutnya</a>
            </p>
          </div>
    </div>

</body>
</html>