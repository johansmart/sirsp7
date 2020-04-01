<?php
error_reporting(0);
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_fasilitas WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
?>
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="gambar/fasilitas/<?php echo $data['gambar'] ?>" alt="User profile picture">
              </h3>
                <li class="list-group-item">
                </li>
              </ul>
                <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="">
                    <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">DIR</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" id="uraian" name="txtgambar" required oninvalid="this.setCustomValidity('Gambar Wajib di Isi')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                   <input type="submit" name="btnuplad" class="btn btn-primary btn-block" value="Load">
                </form>
                 <?php
                 if (isset($_POST["btnuplad"])){
                                  $nama_file   = strtolower($_FILES['txtgambar']['name']);
                                  $lokasi_file = $_FILES['txtgambar']['tmp_name'];
                  $upoadgambar = mysqli_query($konek,"UPDATE  tbl_fasilitas SET gambar='$nama_file' WHERE kode='$id'");
                  if ($upoadgambar){
                    if(!empty($lokasi_file)){
                    move_uploaded_file($lokasi_file, "gambar/fasilitas/$nama_file");
                    ?>
                    <script type="text/javascript">
                    document.location.href="beranda.php?page=fasilitas";
                    </script>
                    <?php
                  }else{
                    echo "Terjadi kesalahan";
                  }
                }
              }
              ?>
             
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!-- /.col -->

          <form class="form-horizontal" method="POST" action="">
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">EDIT FASILITAS </a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                 
                 
                  <div class="box">
            <!-- /.box-header -->
            

          
              <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                <div class="modal-body">
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kode</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" disabled="disabled" value="<?php echo $data['kode'];?>" name="txtkode" placeholder="Kode" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
                </tr>
                <tr>
                 <div class="modal-body">
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Uraian</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" value="<?php echo $data['uraian'];?>" name="txturaian" placeholder="Uraian" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>
              </tr>
               
                  <div class="modal-footer">
                <input type="submit" name="btnedit" class="btn btn-primary pull-right" value="Simpan">
              </div>
                  </form>
              </table>
          </div>
             </div>
            </div>
          </div>
        </div>
      </div>

    </section>
  </div>


    <?php
          if (isset($_POST["btnedit"])){
            $txturaian =$_POST['txturaian'];
            $txtkode =$_POST['txtkode'];
            $edit = mysqli_query($konek,"UPDATE  tbl_fasilitas SET uraian='$txturaian' WHERE kode='$id'");
            if ($edit)
            {
              ?>
              <script type="text/javascript">
                document.location.href="beranda.php?page=fasilitas";
              </script>
              <?php
            }else{
             echo "<script>alert('Terjadi Kesalahan Inputan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=fasilitas'>";
            }
          }
        ?>