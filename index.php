<?php include'header.php'; ?>  
            <section id="hello" class="home bg-mega">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home">
                            <div class="home_text">
                                <h1 class="text-white">REGISTRASI ONLINE</h1>
                            </div>
                            <div class="home_btns m-top-40">
                                <a href="registrasi.php" target="_blank" class="btn btn-primary m-top-20">SEKARANG</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
            <section id="about" class="about roomy-100">
                <div class="container">
                    <div class="row">
                        <div class="main_about">
                            <div class="col-md-6">
                                <div class="about_content">
                                    <h2>Akuntabilitas</h2>
                                    <div class="separator_left"></div>
                                    <img width="100%" src="gambar/rahayu.jpg">
                                    <p align="align">RS. Muji Rahayu merupakan rumah sakit yang berkomitmen memenuhi standar mutu pelayanan dan melaksanakan akreditasi setiap periodenya, RS. Muji Rahayu terakreditasi mutakhir oleh KARS pada bulan Juli 2016</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <H2>Daftar Bed</H2>
                                <div class="about_accordion wow fadeIn">
                                    <div id="faq_main_content" class="faq_main_content">
                                       
                                     <?php
                                        $qry = mysqli_query($konek,"SELECT * FROM tbl_bed");
                                        while ($data=mysqli_fetch_assoc($qry)) {
                                      ?>
                                        <h6><i class="fa fa-angle-right"></i>  <?php echo $data['uraian']; ?> </h6>
                                        <div>
                                            <div class="content">
                                                 <center>  <img src="gambar/bed.png" width="30%"><br> <h2> Total Bed Kosong : <?php echo $data['total']; ?> Bed </h4> <h2> Tersedia : <?php echo $data['tersedia']; ?> Bed </h1>  </center>
                                             </div>
                                        </div> 
                                     <?php } ?>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 
<?php include'footer.php'; ?>
