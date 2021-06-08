<?php 
	include '../model/database.php';
	$db = new database();
 ?>
<!DOCTYPE html>
<html>
<body><!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <head>
    <title>Sistem Akademik | Politeknik Caltex Riau</title>
    <style>
        /*untuk teks heading di tag <body>*/
        h2
        {
            
            color: crimson;
            font-family: sans-serif;
            text-align: center;
            width: 45%;
            margin:auto;
            padding: 20px;
        }
 
        body
        {
            background-image: url('bg2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
  </head>
  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <img src="logopcr.png" width="5%" height="20%">
    <a class="navbar-brand" href="#" style="color: white;font-family: 'Calibri',
         serif;font-weight:bold;">SISTEM AKADEMIK<br><h6>POLITEKNIK CALTEX RIAU</h6></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto" style="font-family: 'Libre Baskerville', serif;">

        <li class="nav-item active">
          <a class="nav-link" href="info.php" style="color: white; font-weight:bold;">HOME  |<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php" style="color: white; font-weight:bold;">INFORMASI MAHASISWA  |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil.php" style="color: white; font-weight:bold;"> NILAI      |  </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="keuangan.php" style="color: white; font-weight:bold;"> KEUANGAN   |</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" style="color: white; font-weight:bold;">  KONTAK</a>
        </li>

    </div>
  </nav>
	<h2>Nilai Mahasiswa</h2>
	<link rel="stylesheet" href="template.css">
	<div class="table-wrapper">
    <table class="fl-table">
        <thead>
		<h3><a href="input.php">Input Data</a></h3>
		<thead>
        <tr>
		<th>No</th>
		<th>Kode Matakuliah</th>
		<th>Nama Matakuliah</th>
		<th>SKS</th>
		<th>Kuis</th>
		<th>UTS</th>
		<th>UAS</th>
		<th>Nilai Akhir</th>
		<th>Opsi</div></th>
		</td>
        </tr>
        </thead>
        <tbody>
		<?php 
			$no = 1;
			foreach ($db->tampil_data() as $data) {  ?>
				<tr>
					<td><?php echo $no++?></td>
					<td><?php echo $data['mk_kode']?></td>
					<td><?php echo $data['mk_nama']?></td>
					<td><?php echo $data['sks']?></td>
					<td><?php echo $data['kuis']?></td>
					<td><?php echo $data['uts']?></td>
					<td><?php echo $data['uas']?></td>
					<td><?php echo $data['nilai_akhir']?></td>
					<td>
						<a href="edit.php?id=<?php echo $data['id']?>&aksi=edit">Edit</a>
						<a href="../controller/proses.php?id=<?php echo $data['id']?>&aksi=hapus">Hapus</a>
					</td>	
				</tr>
		<?php 
		}
		 ?>
	</table>
</body>
</html>

