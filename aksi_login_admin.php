<?php 
include'koneksi.php';
 if(isset($_POST["btnlogin"])){
 $txtusername =$_POST['txtusername'];
 $txtpassword =md5($_POST['txtpassword']);
 $cek = mysqli_query($konek, "SELECT * FROM tbl_pegawai where email='".$_POST['txtusername']."' AND password='".md5($_POST['txtpassword'])."'");
        $hasil = mysqli_fetch_array($cek);
        $count = mysqli_num_rows($cek);

        $nama1 =$hasil['email'];
    if($count >0){
        session_start();
        $_SESSION['email']=$nama1;
        header("location:beranda.php");
             }
    else{
    }
  }
?>
<div class="pages_agile_info_w3l page_error">
                               <div class="over_lay_agile_pages_w3ls error">
                                  <div class="registration error">
                                                     <br><br><br>
                                                     <h1 align="center">Oops! Login Salah </h1>
                                                        <br><br><br><br><br><br><br><br><br>
                                                     <h1 align="center"><a href="login_admin.php">Coba Lagi</a><h1>
                                                </div>
                                           
                                            
                            </div>
                        </div>