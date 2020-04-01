<?php
include'koneksi.php';
error_reporting(0);  
session_start();
	// if(!isset($_SESSION['nama'])){
	if (empty($_SESSION['nama']) AND empty($_SESSION['nip'])AND empty($_SESSION['hari_senin'])AND empty($_SESSION['hari_selasa'])AND empty($_SESSION['hari_rabu'])AND empty($_SESSION['hari_kamis'])AND empty($_SESSION['hari_jumat'])AND empty($_SESSION['hari_sabtu'])AND empty($_SESSION['hari_minggu'])AND empty($_SESSION['gambar'])AND empty($_SESSION['kode'])AND empty($_SESSION['jenis_kelamin'])AND empty($_SESSION['email'])AND empty($_SESSION['password'])AND empty($_SESSION['tgl_lahir'])AND empty($_SESSION['tgl_update'])){
		header("location:beranda_dokter.php");
	}else{	
		 // echo "<div class='alert alert-success' role='alert'>Harap Login</div> ";
?>
<?php } ?>
