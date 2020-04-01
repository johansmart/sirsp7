<?php include'koneksi.php';?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>RS MUJI RAHAYU</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" type="text/css" href="bower_components/DataTables/datatables.min.css"/>
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <img src="gambar/logo_login.png"><br>
    <a href="index.php"><b>RS</b>MUJI RAHAYU</a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Login Dokter</p>

      <!-- FORM UNTUK LOGIN -->
      <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="txtusername" placeholder="Email / User Name">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="txtpassword" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <button type="submit" name="btnlogin" class="btn btn-primary btn-block btn-flat">LOGIN</button> <br><br>
        </div>
      </div>
    </form>

  </div>
</div>
<?php 
 if(isset($_POST["btnlogin"])){
 $txtusername =$_POST['txtusername'];
 $txtpassword = md5($_POST['txtpassword']);
 $cek = mysqli_query($konek, "SELECT * FROM v_dokter where email='".$_POST['txtusername']."' AND password='".md5($_POST['txtpassword'])."'");
        $hasil = mysqli_fetch_array($cek);
        $count = mysqli_num_rows($cek);
        $nama_user =$hasil['nama'];
        $sip_dokter =$hasil['nip'];
        $senin1 =$hasil['hari_senin'];
        $selasa1 =$hasil['hari_selasa'];
        $rabu1 =$hasil['hari_rabu'];
        $kamis1 =$hasil['hari_kamis'];
        $jumat1 =$hasil['hari_jumat'];
        $sabtu1 =$hasil['hari_sabtu'];
        $minggu1 =$hasil['hari_minggu'];
        $gambar1 =$hasil['gambar'];
        $kode1 =$hasil['kode'];
        $jenkel1 =$hasil['jenis_kelamin'];
        $email1 =$hasil['email'];
        $password1 =$hasil['password'];
        $tgl_lahir1 =$hasil['tgl_lahir'];
        $tanggal_update1 =$hasil['tgl_update'];
    if($count >0){
        session_start();
        $_SESSION['nama']=$nama_user;
        $_SESSION['nip']=$sip_dokter;
        $_SESSION['hari_senin']=$senin1;
        $_SESSION['hari_selasa']=$selasa1;
        $_SESSION['hari_rabu']=$rabu1;
        $_SESSION['hari_kamis']=$kamis1;
        $_SESSION['hari_jumat']=$jumat1;
        $_SESSION['hari_sabtu']=$sabtu1;
        $_SESSION['hari_minggu']=$minggu1;
        $_SESSION['gambar']=$gambar1;
        $_SESSION['jenis_kelamin']=$jenkel1;
        $_SESSION['email']=$email1;
        $_SESSION['password']=$password1;
        $_SESSION['kode']=$kode1;
        $_SESSION['tgl_lahir']=$tgl_lahir1;
        $_SESSION['tgl_update']=$tanggal_update1;
        header("location:beranda_dokter.php");
        }
    else{
     echo "<div class='alert alert-success' role='alert'>Email dan Password Salah...!!!</div>";
    }
}
 ?>
    <br><br>
  <center><H4> <a href="login_dokter.php">Home</a></H4></center>
  </div>
  <div class="clearfix"> </div>
</body>
</html>
