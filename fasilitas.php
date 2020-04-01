<?php include'header.php'; ?>
<head>
	<style type="text/css">
	img { transition: all .2s ease-in-out; }
img:hover { transform: scale(1.5); }
</style>
</head>
<section id="blog" class="blog">
                <div class="container">
                    <div class="row">
                        <BR>
                        <div class="main_blog text-center roomy-100">
                        		<h2>FASILITAS</h2>
                             <?php
                			 $qry = mysqli_query($konek,"SELECT * FROM tbl_fasilitas");
                				while ($data=mysqli_fetch_assoc($qry)) {
                			 ?>
                            <div class="col-md-4">
                                <div class="blog_item m-top-20">
                                    <div class="blog_item_img">
                                        <img height="200px" src="gambar/fasilitas/<?php echo $data['gambar']; ?>" alt="Gambar" />
                                    </div>
                                    <div class="blog_text roomy-40">
                                        <h6><?php echo $data['uraian']; ?></h6>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                        </div>
                    </div><!--End off row -->
                </div><!--End off container -->
            </section><!-- End off Blog section-->








<?php include'footer.php'; ?>