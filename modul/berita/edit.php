<?php
error_reporting(0);
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_news WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
$referensi=$data['kode_pegawai'];
?>
<div class="col-md-12">    
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Berita / News</h3>
            </div>
               <form class="form-horizontal" method="POST" action="">
               <div class="modal-body">
                

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Tgl Posting</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtjudul" disabled="disabled" value="<?php echo $data['tanggal']; ?>" placeholder="Cara Bayar" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>


                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Judul</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtjudul" value="<?php echo $data['judul']; ?>" placeholder="Cara Bayar" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Konten</label>
                  <div class="col-sm-10">
                       <textarea class="ckeditor" id="ckedtor" name="txtkonten"><?php echo $data['konten']; ?></textarea>
                  </div>
                </div>


                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Referensi</label>
                  <div class="col-sm-10">
                    <select name="cbreferensi" class="form-control select2"  style="width: 100%;">
                      <?php
                        $qry = mysqli_query($konek,"SELECT * from tbl_pegawai"); 
                        while ($data=mysqli_fetch_array($qry)) 
                        {
                        ?>
                        <option class="form-control" value="<?php echo $data["kode"]; ?>" <?php 
                            if($referensi==$data['kode']){echo "selected";} ?>> <?php echo $data['nama']; ?> </option>
                        <?php
                        }
                      ?>
                    </select>
                  </div>
                </div>
                 <input type="submit" name="btnedit" class="btn btn-primary pull-right" value="Simpan">
              </div>
              <div class="modal-footer">
               
              </div>
            </div>
            </form>
          
    <?php
          if (isset($_POST["btnedit"])){
            $txtjudul =$_POST['txtjudul'];
            $cbreferensi =$_POST['cbreferensi'];
            $txtkonten =$_POST['txtkonten'];
            $edit = mysqli_query($konek,"UPDATE  tbl_news SET judul='$txtjudul',konten='$txtkonten',kode_pegawai='$cbreferensi' WHERE kode='$id'");
            if ($edit)
            {
              ?>
              <script type="text/javascript">
                document.location.href="beranda.php?page=berita";
              </script>
              <?php
            }else{
             echo "<script>alert('Terjadi Kesalahan Inputan')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=berita'>";
            }
          }
        ?>
          </div>
    </div>
