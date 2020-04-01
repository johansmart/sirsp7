<?php
  error_reporting(0); 
  $carikode = mysqli_query($konek, "select max(kode) from tbl_kunjungan") or die (mysql_error());
  $datakode = mysqli_fetch_array($carikode);
  if ($datakode) {
   $nilaikode = substr($datakode[0], 1);
   $kode = (int) $nilaikode;
   $kode = $kode - 1;
   $kode_otomatis = "K".str_pad($kode, 5, "0", STR_PAD_LEFT);
  } else {
   $kode_otomatis = "K00001";
  }
  ?>
  <div class="error-page">

        <div class="error-content">
           <h3><i class="fa fa-feed"></i>Kunjungan Sudah Berhasil di Kirim</h3>
          <h3><i class="fa fa-user"></i>NO.KUNJUNGAN</h3>
           <h2 class="headline text-yellow"><?php echo $kode_otomatis ?></h2>
          <p>
           Cetak Nomor Kunjungan ini, Sebagai bukti Kunjungan
          </p>
           <form class="search-form">
            <div class="input-group">
              <div class="input-group-btn">
                <button type="submit" name="submit"  class="btn btn-warning btn-flat"><i class="fa fa-print"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
    </div>
  </div>
