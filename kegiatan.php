<?php include'header.php'; ?>
<head>
<style type="text/css">
img { transition: all .2s ease-in-out; }
img:hover { transform: scale(1.6); }
</style>

</head>
  			<section id="about" class="about roomy-100">
                <div class="container">
                	<h3>BERITA / NEWS</h3>
                  <br>
                    <div class="row">
                        <div class="main_about">
							             <div class="col-md-8">
                                <div class="about_accordion wow fadeIn">
                                    <div id="faq_main_content" class="faq_main_content">
                							         <?php
                							            $qry = mysqli_query($konek,"SELECT * FROM tbl_news order by tanggal asc");
                							            while ($data=mysqli_fetch_assoc($qry)) {
                							          ?>
                                        <h6><i class="fa fa-angle-right"></i>  <?php echo $data['judul']; ?> | Tanggal : <?php echo $data['tanggal']; ?></h6>
                                        <div>
                                            <div class="content">
                                                 <P <h1><?php echo $data['konten']; ?></P>
                                             </div>
                                        </div> 
                                     <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about_accordion wow fadeIn">
                                    <div id="faq_main_content" class="faq_main_content">
                                        <div class="open">
                                              <h4>Populer</h4>
                                                <?php
                                          $qry = mysqli_query($konek,"SELECT * FROM tbl_news order by tanggal ASC");
                                          while ($data=mysqli_fetch_assoc($qry)) {
                                        ?>

                                          <p><button class="btn btn-primary">#</button> <?php echo $data['judul']; ?> </p>
                                          <?php } ?>
                                        </div> 
                                  
                                    </div>
                                </div>
                            </div>
                   		</div>
                   	</div>
                </div>
            </section>  	
<?php include'footer.php'; ?>