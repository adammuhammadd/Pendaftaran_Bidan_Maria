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
  
    <div class="index">
        <form action="proses-pendaftaran.php" method="POST">
            <div class="jumbotron">
                <h1>Klinik Bidan Maria</h1>
                <p>Jln Cendana Desa Sukabakti,Kec.Palas,kab.Lampung Selatan</p>
                <p>Praktek Setiap Hari Kecuali Hari Libur</p>
                <p>Pagi : Jam 06.00 s.d 07.30 WIB</p>
                <p>Sore : Jam 16.00 s.d 21.00 WIB</p>
                <p>Persalinan 24 jam</p>
            </div>
            <div class="pendaftaran">
                <div class="input">
                    
			        <input type="date" name="tanggal_masuk">
                    <span>Tanggal</span>
                </div>
                <div class="input">
                   
		        	<input type="text" name="nama" placeholder="" />
                    <span>Nama</span>
                </div>
                <div class="input">
                    
			        <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
			        <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                    <span>Jenis Kelamin</span>
                </div>
                <div class="input">
                    
                    <input type="text" name="usia" placeholder="" />
                    <span>Usia</span>
                </div>
                <div class="input">
                    
			        <input type="text" name="keluhan" placeholder="" />
                    <span>Keluhan yang dirasakan</span>
                </div>
                <div class="input">
                    
                    <input type="text" name="lama_keluhan" placeholder="" />
					<span>Lama Keluhan</span>
                </div>
                <div class="submit">
					<input type="submit" value="Daftar" name="daftar" />
                </div>
            </div>
        </form>
    </div>
	
  </body>
</html>