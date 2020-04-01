<?php include'header.php';?>
<?php
$id = base64_decode($_GET["id"]);
$sqlku = mysqli_query($konek,"SELECT * FROM tbl_pegawai WHERE kode='$id'");
$data  = mysqli_fetch_array($sqlku);
?>
<section id="about" class="about roomy-100">
                <div class="container">
                    <div class="row">
                        <div class="main_about">
                            <div class="col-md-6">
                                <div class="about_content">
                                    <h4>Detail Dokter</h4>
                                    <div class="separator_left"></div>
                                    <img width="340x" height="315px" src="gambar/pegawai/<?php echo $data['gambar']; ?>"><br>
                                   <h4> <?php echo $data['nama']; ?></h4> <br>
                                   Tgl Update Jadwal : <?php echo $data['tgl_update']; ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <H4>Jadwal Dokter</H4>
                                <div class="about_accordion wow fadeIn">
                                    <div id="faq_main_content" class="faq_main_content">
                                        <h6><i class="fa fa-angle-right"></i>Senin</h6>
                                        <div>
                                            <div class="content">
                                                 <center>  <img src="gambar/jam.png" width="30%"><br><br> <h2> <?php echo $data['hari_senin']; ?> </h2>
                                             </div>
                                        </div> 

                                        <h6><i class="fa fa-angle-right"></i>Selasa</h6>
                                        <div>
                                            <div class="content">
                                                 <center>  <img src="gambar/jam.png" width="30%"><br><br> <h2> <?php echo $data['hari_selasa']; ?> </h2>
                                             </div>
                                        </div> 


                                        <h6><i class="fa fa-angle-right"></i>Rabu</h6>
                                        <div>
                                            <div class="content">
                                                 <center>  <img src="gambar/jam.png" width="30%"><br><br> <h2>  <?php echo $data['hari_rabu']; ?> </h2>
                                             </div>
                                        </div> 


                                        <h6><i class="fa fa-angle-right"></i>Kamis</h6>
                                        <div>
                                            <div class="content">
                                                 <center>  <img src="gambar/jam.png" width="30%"><br><br> <h2> <?php echo $data['hari_kamis']; ?> </h2>
                                             </div>
                                        </div> 


                                        <h6><i class="fa fa-angle-right"></i>Jumat</h6>
                                        <div>
                                            <div class="content">
                                                 <center>  <img src="gambar/jam.png" width="30%"><br><br> <h2> <?php echo $data['hari_jumat']; ?> </h2>
                                             </div>
                                        </div> 


                                        <h6><i class="fa fa-angle-right"></i>Sabtu</h6>
                                        <div>
                                            <div class="content">
                                                 <center>  <img src="gambar/jam.png" width="30%"><br><br> <h2> <?php echo $data['hari_sabtu']; ?> </h2>
                                             </div>
                                        </div> 

                                        <h6><i class="fa fa-angle-right"></i>Minggu</h6>
                                        <div>
                                            <div class="content">
                                                 <center>  <img src="gambar/jam.png" width="30%"><br><br> <h2>  <?php echo $data['hari_minggu']; ?> </h2>
                                             </div>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
<?php include'footer.php';?>