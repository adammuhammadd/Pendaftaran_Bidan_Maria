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
    <title>Pendaftaran</title>
  </head>
  <body>
    <div class="index">
        <form action="proses-pendaftaran.php" method="POST">
            <div class="jumbotron">
                <h1>Klinik Bidan Maria</h1><br>
                <p>Jl. Cendana Desa Sukabakti, Kec. Palas, Kab. Lampung Selatan</p>
                <p>Praktek Setiap Hari Kecuali Hari Libur</p>
                <p>Pagi : Pukul 06.00 S.d 07.30 WIB</p>
                <p>Sore : Pukul 16.00 S.d 21.00 WIB</p>
                <p>Persalinan 24 jam</p>
            </div>
            <div class="pendaftaran">
                <div class="input">
			        <input type="date" name="tanggal_masuk" required/>
                    <span>Tanggal Masuk</span>
                </div>
                <div class="input">
		        	<input type="text" name="nama" placeholder="" required/>
                    <span>Nama Pasien</span>
                </div>
                <div class="inputss">
			        <label><input type="radio" name="jenis_kelamin" value="laki-laki" required>Laki-laki</label>
			        <label><input type="radio" name="jenis_kelamin" value="perempuan" required>Perempuan</label>
                    <span>Jenis Kelamin Pasien</span>
                </div>
                <div class="input">
                    <input type="text" name="usia" placeholder="" required/>
                    <span>Usia Pasien</span> Tahun
                </div>
                <div class="input">
			        <input type="text" name="keluhan" placeholder="" required/>
                    <span>Keluhan yang dirasakan</span>
                </div>
                <div class="input">
                    <input type="text" name="lama_keluhan" placeholder="" required/>
					<span>Lama Keluhan</span> Hari
                </div>
                <div class="input">
                <input type="hidden" name="statuss" value="Menunggu">
                </div>
                <div class="submit">
					<input type="submit" class="btn btn-primary" value="Daftar" name="daftar" required/>
                </div>
            </div>
        </form>
    </div>
  </body>
</html>