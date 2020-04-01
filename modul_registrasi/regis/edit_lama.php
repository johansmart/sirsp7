<?php
error_reporting(0);
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_kunjungan WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);

$dokter=$data['kode_dokter'];
$pasien=$data['kode_pasien'];
$cara_bayar=$data['kode_bayar'];

?>
<div class="col-md-12">    
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">UPDATE KUNJUNGAN PASIEN</h3>
            </div>
               <form class="form-horizontal" method="POST" action="">
              <div class="box-body">
            <div class="modal-body">


              <div class="row">
        <div class="col-md-12">
          <div class="nav-tabs-custom">
          <!--   <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">DOKTER</a></li>
              <li><a href="#tab_2" data-toggle="tab">HALAMAN II</a></li>
              <li><a href="#tab_3" data-toggle="tab">LANGKAH III</a></li>
              <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-users"></i></a></li>
            </ul> -->
            <div class="tab-content">
              <!-- Tab I -->
              <div class="tab-pane active" id="tab_1">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Kode Kunjungan</label>
                  <div class="col-sm-2">
                    <input type="text" class="form-control" id="uraian" name="txtkode" disabled="disabled" value="<?php echo $data['kode_pasien'];?>" onkeypress="return hanyaAngka(event)" placeholder="Kode Kunjungan" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>


                   <div class="col-sm-8">
                    <input type="date" class="form-control" id="uraian" name="txttanggal"  value="<?php echo $data['tgl_kunjungan'];?>" onkeypress="return hanyaAngka(event)" placeholder="Tgl kunjungan" required oninvalid="this.setCustomValidity('Tidak Boleh Kosong')" oninput="setCustomValidity('')" />
                  </div>
                </div>


                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Keluhan</label>
                  <div class="col-sm-10">
                   <textarea class="form-control" name="txtkeluhan" placeholder="Keluhan Pasien"><?php echo $data['keluhan'];?></textarea>
                  </div>
                </div>

                 <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Pasien</label>
                  <div class="col-sm-10">
                    <select name="cbpasien" class="form-control select2"  style="width: 100%;">
                      <?php
                        $qry = mysqli_query($konek,"SELECT * from tbl_pasien"); 
                        while ($data=mysqli_fetch_array($qry)) 
                        {
                        ?>
                        <option class="form-control" value="<?php echo $data["kode"]; ?>" <?php 
                            if($pasien==$data['kode']){echo "selected";} ?>> <?php echo $data['kode']; ?> <?php echo $data['nama']; ?></option><?php
                        }
                      ?>
                    </select>
                  </div>
                </div>

                  <!-- QUERY UNTUK DOKTER -->
                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Dokter</label>
                  <div class="col-sm-10">
                    <select name="cbdokter" class="form-control select2"  style="width: 100%;">
                      <?php
                        $qry = mysqli_query($konek,"select `tbl_pegawai`.`kode` AS `kode`,`tbl_pegawai`.`kode_spesialis` AS `kode_spesialis`,`tbl_pegawai`.`kode_pekerjaan` AS `kode_pekerjaan`,`tbl_pegawai`.`kode_pendidikan` AS `kode_pendidikan`,`tbl_pegawai`.`kode_jabatan` AS `kode_jabatan`,`tbl_pegawai`.`nip` AS `nip`,`tbl_pegawai`.`nama` AS `nama`,`tbl_pegawai`.`tempat_lahir` AS `tempat_lahir`,`tbl_pegawai`.`tgl_lahir` AS `tgl_lahir`,`tbl_pegawai`.`jenis_kelamin` AS `jenis_kelamin`,`tbl_pegawai`.`email` AS `email`,`tbl_pegawai`.`handphone` AS `handphone`,`tbl_pegawai`.`password` AS `password`,`tbl_pegawai`.`keterangan` AS `keterangan`,`tbl_pegawai`.`gambar` AS `gambar`,`tbl_pegawai`.`hari_senin` AS `hari_senin`,`tbl_pegawai`.`hari_selasa` AS `hari_selasa`,`tbl_pegawai`.`hari_rabu` AS `hari_rabu`,`tbl_pegawai`.`hari_kamis` AS `hari_kamis`,`tbl_pegawai`.`hari_jumat` AS `hari_jumat`,`tbl_pegawai`.`hari_sabtu` AS `hari_sabtu`,`tbl_pegawai`.`hari_minggu` AS `hari_minggu`,`tbl_pegawai`.`tgl_update` AS `tgl_update`,`tbl_pekerjaan`.`uraian` AS `pekerjaan`,`tbl_pendidikan`.`uraian` AS `pendidikan`,`tbl_spesialis`.`uraian` AS `spesialis`,`tbl_jabatan`.`uraian` AS `jabatan` from ((((`tbl_jabatan` join `tbl_pegawai` on((`tbl_pegawai`.`kode_jabatan` = `tbl_jabatan`.`kode`))) join `tbl_pendidikan` on((`tbl_pegawai`.`kode_pendidikan` = `tbl_pendidikan`.`kode`))) join `tbl_pekerjaan` on((`tbl_pegawai`.`kode_pekerjaan` = `tbl_pekerjaan`.`kode`))) join `tbl_spesialis` on((`tbl_pegawai`.`kode_spesialis` = `tbl_spesialis`.`kode`))) where (((`tbl_jabatan`.`uraian` = 'Dokter Umum') or (`tbl_jabatan`.`uraian` = 'Dokter Spesialis')) and (`tbl_pegawai`.`keterangan` = 'Aktif')) order by `tbl_pegawai`.`kode` desc"); 
                        while ($data=mysqli_fetch_array($qry)) 
                        {
                        ?>
                        <option class="form-control" value="<?php echo $data["kode"]; ?>" <?php 
                            if($pasien==$data['kode']){echo "selected";} ?>> <?php echo $data['nip']; ?> <?php echo $data['nama']; ?></option><?php
                        }
                      ?>
                    </select>
                  </div>
                </div>

                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Cara Bayar</label>
                  <div class="col-sm-10">
                    <select name="cbcarabayar" class="form-control select2"  style="width: 100%;">
                      <?php
                        $qry = mysqli_query($konek,"SELECT * from tbl_cara_bayar"); 
                        while ($data=mysqli_fetch_array($qry)) 
                        {
                        ?>
                        <option class="form-control" value="<?php echo $data["kode"]; ?>" <?php 
                            if($cara_bayar==$data['kode']){echo "selected";} ?>> <?php echo $data['kode']; ?> <?php echo $data['uraian']; ?></option><?php
                        }
                      ?>
                    </select>
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
                                $cbpasien =$_POST['cbpasien'];
                                $cbdokter =$_POST['cbdokter'];
                                $cbcarabayar =$_POST['cbcarabayar'];
                                $txttanggal =$_POST['txttanggal'];
                                $txtkeluhan =$_POST['txtkeluhan'];
            $edit = mysqli_query($konek,"UPDATE  tbl_kunjungan SET kode_dokter='$cbdokter',kode_pasien='$cbpasien',kode_bayar='$cbcarabayar',tgl_kunjungan='$txttanggal',keluhan='$txtkeluhan' WHERE kode='$id'");
            if ($edit) {  ?>
              <script type="text/javascript">
                document.location.href="beranda.php?page=pasien_lama";
              </script>
              </script>
              <?php
                  }else{
                    echo "<script>alert('Terjadi Kesalahan')</script>";
                    echo "<meta http-equiv='refresh' content='0; url=?page=pasien_lama'>";
                  }
                }
              ?>
          </div>
    </div>
