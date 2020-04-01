<!--AWAL UNTUK DATA TABEL  -->
</div>
<div class="box">
            <div class="box-header">
              <h3 class="box-title">REGISTRASI PASIEN</h3>
            </div>
            <div class="box-body table-responsive">
              <!-- <div class="box-body table-responsive no-padding"> -->
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <input type="text" name="txtkode" value="<?php echo $_SESSION['kode'] ?>">
                  <th>NO</th>
                  <th>REKAM MEDIS & NIK KTP</th>
                  <th>NAMA PASIEN</th>
                  <th>TGL REGISTRASI</th>
                  <th align="right">ACTION</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no =1;
                    $txtkode =$_POST['txtkode'];
                    $qry = mysqli_query($konek,"select `tbl_kunjungan`.`kode` AS `kode`,`tbl_kunjungan`.`kode_pasien` AS `kode_pasien`,`tbl_kunjungan`.`kode_dokter` AS `kode_dokter`,`tbl_kunjungan`.`kode_bayar` AS `kode_bayar`,`tbl_kunjungan`.`tgl_kunjungan` AS `tgl_kunjungan`,`tbl_kunjungan`.`keluhan` AS `keluhan`,`tbl_kunjungan`.`verifikasi` AS `verifikasi`,`tbl_pasien`.`nama` AS `nama`,`tbl_pegawai`.`nama` AS `dokter` from ((`tbl_kunjungan` join `tbl_pasien` on((`tbl_pasien`.`kode` = `tbl_kunjungan`.`kode_pasien`))) join `tbl_pegawai` on((`tbl_pegawai`.`kode` = `tbl_kunjungan`.`kode_dokter`))) order by `tbl_kunjungan`.`tgl_kunjungan, where kode_pasien='$txtkode'");
                    while ($data=mysqli_fetch_array($qry)) {
                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $data['kode'];?>    <a class="btn btn-danger btn-xs"><?php echo $data['nik_ktp'];?></a></td>
                  <td><?php echo $data['nama'];?></td>
                  <td><?php echo $data['tgl_registrasi'];?></td>
                  <td><?php echo $data['keluhan'];?></td>
                </tr>
              <?php } ?>
                </tfoot>
              </table>
              
            </div>
            <!-- /.box-body -->
          </div>
<?php
if (isset($_GET[hapus])){
  $qry=mysqli_query($konek,"delete from tbl_pasien where kode='".$_GET["hapus"]."'");
  if ($qry){
    echo "<script>alert('Data Berhasil di Hapus')</script>";
        echo "<meta http-equiv='refresh' content='0; url=?page=pasien'>";
    } else {
        Echo "Gagal di Hapus".mysqli_error();
        echo "<meta http-equiv='refresh' content='0; url=?page=pasien'>";
    }
  }
?>