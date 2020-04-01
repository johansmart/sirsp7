<?php
include'koneksi.php';
error_reporting(0);  
session_start();
	if (empty($_SESSION['nama']) AND empty($_SESSION['nik_ktp'])AND empty($_SESSION['kode'])AND empty($_SESSION['user_name'])AND empty($_SESSION['email'])AND empty($_SESSION['password'])AND empty($_SESSION['tgl_lahir'])AND empty($_SESSION['tgl_registrasi'])){
		header("location:beranda_pasien.php");
	}else{	
?>
<?php } ?>
