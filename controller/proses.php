<?php 
	include "../model/database.php";
	$db = new database();

	$aksi = $_GET['aksi'];

	if ($aksi == "tambah") {
		$db->input($_POST['mk_kode'], $_POST['mk_nama'], $_POST['sks'], $_POST['kuis'], $_POST['uts'], $_POST['uas'], $_POST['nilai_akhir']);		
		header("location:../view/tampil.php");
	}elseif ($aksi == "hapus") {
		$db->hapus($_GET['id']);
		header("location:../view/tampil.php");
	}
	elseif ($aksi == "update") {
		$db->update($_POST['id'],$_POST['mk_kode'], $_POST['mk_nama'], $_POST['sks'], $_POST['kuis'], $_POST['uts'], $_POST['uas'], $_POST['nilai_akhir']);	
		header("location:../view/tampil.php");
	}
 ?>

 