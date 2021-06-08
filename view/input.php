<!DOCTYPE html>
<html>
<head>
	<title>input</title>	
	<link rel="stylesheet" href="template.css">
</head>
<body>
	<h2> Input Nilai Mahasiswa</h2>
<form action ="../controller/proses.php?aksi=tambah" method="post">
<div class="table-wrapper">
    	<table class="fl-table">
		<thead>
	<tr>
		<td>Kode Matakuliah</td>
		<td><input type="text" name="mk_kode"></td>
	</tr>
	<tr>
		<td>Nama Matakuliah</td>
		<td><input type="text" name="mk_nama"></td>
	</tr>
	<tr>
		<td>SKS</td>
		<td><input type="number" name="sks"></td>
	</tr>
	<tr>
		<td>Kuis</td>
		<td><input type="number" name="kuis"></td>
	</tr>
	<tr>
		<td>UTS</td>
		<td><input type="number" name="uts"></td>
	</tr>
	<tr>
		<td>UAS</td>
		<td><input type="number" name="uas"></td>
	</tr>
	<tr>
		<td>Nilai Akhir</td>
		<td><input type="number" name="nilai_akhir"></td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
	</thead>
        <tbody>
		</table>
	</div>
</form>
</body>

