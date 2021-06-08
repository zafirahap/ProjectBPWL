<?php 

	class database{

		var $host = "localhost";
		var $uname = "root";
		var $pass = "";
		var $db = "bpwl";
		var $con;

		function __construct(){
			$this->con = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
			mysqli_select_db($this->con, $this->db);
		}

		function tampil_data(){
			$data = mysqli_query($this->con, "select * from nilai");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function tampil_data2(){
			$data = mysqli_query($this->con, "select * from keuangan");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function input($mk_kode, $mk_nama, $sks, $kuis,$uts, $uas,$nilai_akhir){
			mysqli_query($this->con, "insert into nilai values ('', '$mk_kode', '$mk_nama', '$sks', '$kuis','$uts', '$uas','$nilai_akhir')");
		}

		function hapus($id){
			mysqli_query($this->con, "delete from nilai where id='$id'");
		}

		function edit($id){
			$data = mysqli_query($this->con, "select * from nilai where id='$id'");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}

		function update($id, $mk_kode, $mk_nama, $sks, $kuis,$uts, $uas,$nilai_akhir){
			mysqli_query($this->con, "update nilai set mk_kode='$mk_kode', mk_nama='$mk_nama', sks='$sks', kuis='$kuis',uts='$uts', uas='$uas', nilai_akhir='$nilai_akhir' where id='$id'");
		}
	}
 ?>
