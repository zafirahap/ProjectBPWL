<?php 
	include '../model/database.php';
	$db = new database();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>edit</title>	
	<link rel="stylesheet" href="template.css">
</head>
<body>

	<h2>Edit Nilai Mahasiswa</h2>

	<form action="../controller/proses.php?aksi=update" method="post">
	<?php foreach ($db->edit($_GET['id']) as $data) { ?>
		<div class="table-wrapper">
    	<table class="fl-table">
		<thead>
			<tr>
				<td>Kode Matakuliah</td>
				<td>
				<input type="hidden" name="id" value="<?php echo $data['id']?>">
				<input type="text" name="mk_kode" value="<?php echo $data['mk_kode']?>">
				</td>
			</tr>
			<tr>
				<td>Nama Matakuliah</td>
				<td><input type="text" name="mk_nama" value="<?php echo $data['mk_nama']?>"></td>
			</tr>
			<tr>
				<td>SKS</td>
				<td><input type="text" name="sks" value="<?php echo $data['sks']?>"></td>
			</tr>
			<tr>
				<td>Kuis</td>
				<td><input type="text" name="kuis" value="<?php echo $data['kuis']?>"></td>
				</td>
			</tr>
			<tr>
				<td>UTS</td>
				<td><input type="text" name="uts" value="<?php echo $data['uts']?>"></td>
			</tr>
			<tr>
				<td>UAS</td>
				<td><input type="text" name="uas" value="<?php echo $data['uas']?>"></td>
			</tr>
			<tr>
				<td>Nilai Akhir</td>
				<td><input type="text" name="nilai_akhir" value="<?php echo $data['nilai_akhir']?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="simpan"></td>
			</tr>
			</thead>
        <tbody>
		</table>
	</div>
		<?php } ?>
	</form>
</body>
</html>