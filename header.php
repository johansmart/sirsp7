<!doctype html>
<head>
    <?php include'koneksi.php'; ?>
        <meta charset="utf-8">
        <title>RS-MUJI-RAHAYU</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/slick-theme.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/fonticons.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/bootsnav.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css" />
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body data-spy="scroll" data-target=".navbar-collapse">
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div>
        <div class="culmn">
            <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">
                <div class="container">    
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.php">
                        <H1>RS Muji Rahayu</H1>
                        </a>
                    </div>
                    <H6>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                          
                            <li class="dropdown">
                                <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" >Beranda</a>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >PROFIL</a>
                                <ul class="dropdown-menu cart-list">
                                    <li>
                                        <h6><a href="sejarah.php">Sejarah</a></h6>
                                    </li>
                                    <li>
                                        <h6><a href="visi_misi.php">Visi Misi</a></h6>
                                    </li>
                                </ul>
                            </li>
                              <li class="dropdown">
                                <a href="fasilitas.php" class="dropdown-toggle" data-toggle="dropdown" >FASILITAS</a>
                            </li>
                            <li class="dropdown">
                                <a href="kegiatan.php" class="dropdown-toggle" data-toggle="dropdown" >BERITA</a>
                            </li>

                           
                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >DOKTER</a>
                                <ul class="dropdown-menu cart-list">
                                    <li>
                                        <h6><a href="dokter.php">Daftar Dokter & Jadwal</a></h6>
                                    </li>
                                </ul>
                            </li>

                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >SISTEM</a>
                                <ul class="dropdown-menu cart-list">
                                    <li>
                                        <h6><a href="login_dokter.php">Login Dokter</a></h6>
                                    </li>
                                    <li>
                                        <h6><a href="login_admin.php">Login Admin</a></h6>
                                    </li>
                                </ul>
                            </li>
                            <li>
                               <div class="about_btns m-top-20">
                                 <a href="login_pasien.php" target="_blank" class="btn btn-primary">LOGIN</a>
                               </div> 
                            </li>        
                        </ul>
                    </div>
                    <H6>
                </div>  
            </nav>
