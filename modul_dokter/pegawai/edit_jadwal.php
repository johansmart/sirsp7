<div class="col-md-12">    
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">JADWAL DOKTER</h3>
            </div>
               <form class="form-horizontal" method="POST" action="">
              <div class="box-body">
            <div class="modal-body">
              <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">FORM JADWAL</a></li>
              <li><a href="#tab_2" data-toggle="tab">Terakhir Update : <?php echo $_SESSION['tgl_update'] ?></a></li>
              <!-- <li><a href="#tab_3" data-toggle="tab">LANGKAH III</a></li> -->
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-users"></i></a></li>
            </ul>
            <div class="tab-content">
              <!-- Tab I -->
              <div class="tab-pane active" id="tab_1">

                <div class="form-group">
                  <!-- <label for="inputEmail3" class="col-sm-2 control-label">Kode</label> -->
                  <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="uraian" name="txtkode" value="<?php echo $_SESSION['kode'] ?>"  placeholder="Kode" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NIP Dokter / SIP</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" disabled="disabled" name="txtnip" value="<?php echo $_SESSION['nip'] ?>"  placeholder="NIP Dokter" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>



                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" disabled="disabled" name="txtnama" value="<?php echo $_SESSION['nama'] ?>" placeholder="Nama Dokter" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Hari Senin</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtsenin" value="<?php echo $_SESSION['hari_senin'] ?>"  placeholder="Senin" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Hari Selasa</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtselasa" value="<?php echo $_SESSION['hari_selasa'] ?>" placeholder="Selasa" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Hari Rabu</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtrabu" value="<?php echo $_SESSION['hari_rabu'] ?>"  placeholder="Selasa" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Hari Kamis</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtkamis" value="<?php echo $_SESSION['hari_kamis'] ?>" placeholder="Kamis" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Hari Jumat</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtjumat" value="<?php echo $_SESSION['hari_jumat'] ?>" placeholder="Jumat" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Hari Sabtu</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtsabtu" value="<?php echo $_SESSION['hari_sabtu'] ?>" placeholder="Sabtu" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Hari Minggu</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" name="txtminggu" value="<?php echo $_SESSION['hari_minggu'] ?>" placeholder="Minggu" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>


                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="uraian" disabled="disabled" name="txtemail" value="<?php echo $_SESSION['email'] ?>"  placeholder="Alamat" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>

               
                




                
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
              </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" name="btnedit" class="btn btn-primary pull-right" value="Update">
                    </div>
                  </div>
                </div>
              </div>
            </form>
    <?php
          if (isset($_POST["btnedit"])){
                                $txtkode =$_POST['txtkode'];
                                $txtsenin =$_POST['txtsenin'];
                                $txtselasa =$_POST['txtselasa'];
                                $txtrabu =$_POST['txtrabu'];
                                $txtkamis =$_POST['txtkamis'];
                                $txtjumat =$_POST['txtjumat'];
                                $txtsabtu =$_POST['txtsabtu'];
                                $txtminggu =$_POST['txtminggu'];
                                $tgl_update = date("Y-m-d H:i:s"); 
            $edit = mysqli_query($konek,"UPDATE  tbl_pegawai SET hari_senin='$txtsenin',hari_selasa='$txtselasa',hari_rabu='$txtrabu',hari_kamis='$txtkamis',hari_jumat='$txtjumat',hari_sabtu='$txtsabtu',hari_minggu='$txtminggu',tgl_update='$tgl_update' WHERE kode='$txtkode'");
            if ($edit) {  ?>
              <script type="text/javascript">
                document.location.href="beranda_dokter.php?page=daftar_dokter";
              </script>
              </script>
              <?php
                  }else{
                    echo "<script>alert('Terjadi Kesalahan Inputan. Harap Coba Lagi')</script>";
                    echo "<meta http-equiv='refresh' content='0; url=?page=gagal'>";
                  }
                }
              ?>
          </div>
    </div>
