<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Увсын өнгө сонин</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Увсын өнгө сонин" name="keywords">
    <meta content="Увсын өнгө сонин" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url(); ?>assets/img/favicon.ico" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/lib/slick/slick.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/lib/slick/slick-theme.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:wght@700&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- Template Stylesheet -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <!-- <link href="<?php echo base_url(); ?>assets/css/animate-css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/animate-css/animate.min.css" rel="stylesheet"> -->

    <link href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css" rel="stylesheet">
    <!-- Customize -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/> -->
        <!-- Google Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/> -->
        <!-- MDB -->
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.css" rel="stylesheet"/> -->

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/slick/slick.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/slick/slick-theme.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/assets1/css/style1.css">

</head>

<body>
<!-- <div id="pageloader">
    <div class="loader-item">
	    <img src="<?php echo base_url(); ?>load.gif" style="width:150px;">
      <div class="loader">
        <div class="spin"></div>
        <div class="bounce"></div>
      </div>
    </div>
  </div> -->
    <!-- <section class="top"> -->

    <div class="top-news" style="background-image: url(<?php echo base_url();?>admin/public/upload/<?php echo $image;?>);">
        <div class="overlay"></div>
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="col-md-4 weather">
                            <a href="/weather/">
                                <div class="text-13 header-top-dailycontainer-calendar-txt">Улаангом</div>
                                <div class="uk-text-bold text-blue uk-text-left text-18"><i class="fas fa-sun uk-text-middle"></i> <span class="uk-text-middle">-15</span></div>
                               
                            </a>
                        </div>
                        <div class="b-logo">
                            <!-- <a href="index.html">
                                    <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Logo">
                                </a> -->
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4" style="text-align: center;">
                        <div class="b-ads">
                            <a href="<?php echo base_url(); ?>">
                                <img src="<?php echo base_url(); ?>assets/img/logo_urt_small.png" alt="Увсын өнгө">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4" style="text-align: -webkit-right;">
                        <div class="b-search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand"></a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                        <!-- animated bounce -->
                            <a href="<?php echo base_url(); ?>" class="nav-item nav-link">Мэдээ</a>
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Sub Item 1</a>
                                    <a href="#" class="dropdown-item">Sub Item 2</a>
                                </div>
                            </div> -->
                            <a href="<?php echo base_url(); ?>index.php/article/index" class="nav-item nav-link">Нийтлэл</a>
                            <a href="<?php echo base_url(); ?>index.php/interview/index" class="nav-item nav-link">Ярилцлага</a>
                            <a href="<?php echo base_url(); ?>index.php/newspaper/index" class="nav-item nav-link">Сонин</a>
                            <a href="<?php echo base_url(); ?>index.php/live/index" class="nav-item nav-link">LIVE</a>
                        </div>
                        <!-- <div class="social ml-auto">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div> -->
                    </div>
                </nav>
            </div>
        </div>
       