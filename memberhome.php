<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Health & Fitness | Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

	<!-- CSS here -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php
        require_once __DIR__ . "/conMod.php";
        $db = new DB();
        $con = $db->getConnection(); 
        ?>
    <?php
      session_start();
      if($_SESSION['role']=='admin')
      {$hpg="./web/adminhome.php";}
      else if($_SESSION['role']=='staff')
      {$hpg="./web/stfhomepg.php";}
      else if($_SESSION['role']=='student')
      {$hpg="./web/stuhomepg.php";}
       else if($_SESSION['role']=='company')
      {$hpg="./web/comhome.php";}
      ?>
    
    
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!--? Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                          
                                            <li><a href="schV.php">schedule</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <div class="header-right-btn f-right d-none d-lg-block ml-30">
                                    <a href="logout.php" class="btn header-btn">Logout</a>
                                </div>
                            </div>
                        </div>    
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay="0.1s">with patrick potter</span>
                                    <h1 data-animation="fadeInLeft" data-delay="0.4s">Build Perfect body Shape for good and Healthy life.</h1>
                                    <a href="from.html" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.8s">became a member</a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                    <span data-animation="fadeInLeft" data-delay="0.1s">with patrick potter</span>
                                    <h1 data-animation="fadeInLeft" data-delay="0.4s">Build Perfect body Shape for good and Healthy life.</h1>
                                    <a href="from.html" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.8s">became a member</a>
                                </div>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
            <!-- Video icon -->
            <div class="video-icon">
                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0"><i class="fas fa-play"></i></a>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? About Area Start -->
        <section class="about-area section-padding30">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <!-- about-img -->
                        <div class="about-img ">
                            <img src="assets/img/gallery/about.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle3 mb-35">
                                <span>ABOUT oUR GYM</span>
                                <h2>Safe Body building proper Solutions That Saves our Valuable Time!</h2>
                            </div>
                            <p class="pera-top">Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replication of the designers is intended.</p>
                            <p class="mb-65 pera-bottom">Brook presents your services with flexible, convefnient and chient anipurpose layouts. You can select your favorite layouts.</p>
                          
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-2 Area End -->
        <!--? Services Area Start -->
        <section class="services-area pt-100 pb-150 section-bg" data-background="assets/img/gallery/section_bg01.png">
            <!--? Want To work -->
            <section class="wantToWork-area w-padding">
                <div class="container">
                    <div class="row align-items-end justify-content-between">
                        <div class="col-lg-6 col-md-10 col-sm-10">
                            <div class="section-tittle section-tittle2">
                                <span>oUR sERVICES FOR YOU</span>
                                <h2>PUSH YOUR LIMITS FORWARD We Offer to you</h2>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2 col-md-3">
                            <a href="services.html" class="btn wantToWork-btn f-right">More Services</a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Want To work End -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <i class="flaticon-fitness"></i>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">QUALITY EQUIPMENT</a></h5>
                                <p>The sea freight service has grown consider ably in recent years. We spend timetting to kn.</p>
                            </div>
                            <div class="img-cap">
                                <a href="services.html" class="">Discover More About Us <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <i class="flaticon-healthcare-and-medical"></i>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">health caring</a></h5>
                                <p>The sea freight service has grown consider ably in recent years. We spend timetting to kn.</p>
                            </div>
                            <div class="img-cap">
                                <a href="services.html" class="">Discover More About Us <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <div class="single-cat text-center mb-50">
                            <div class="cat-icon">
                                <i class="flaticon-clock"></i>
                            </div>
                            <div class="cat-cap">
                                <h5><a href="services.html">gym strategies</a></h5>
                                <p>The sea freight service has grown consider ably in recent years. We spend timetting to kn.</p>
                            </div>
                            <div class="img-cap">
                                <a href="services.html" class="">Discover More About Us <i class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services Area End -->
        <!--? About-2 Area Start -->
        <section class="about-area2 testimonial-area section-padding30 fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-11 col-sm-11">
                        <!-- about-img -->
                        <div class="about-img2">
                            <img src="assets/img/gallery/about2.png" alt="">
                            <!-- Shape -->
                            <div class="shape-qutaion d-none d-sm-block">
                                <img src="assets/img//gallery/qutaion.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-9 col-sm-9">
                        <div class="about-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-55">
                                <span>Client Feedback</span>
                                <h2>What Our Client thik about our gym</h2>
                            </div>
                            <!-- Testimonial Start -->
                            <div class="h1-testimonial-active">
                                <!-- Single Testimonial -->
                                <div class="single-testimonial">
                                    <div class="testimonial-caption">
                                        <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls intended csents your se.</p>
                                        <div class="rattiong-caption">
                                            <span>Jhon Smith<span>Gym Trainer</span> </span>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Testimonial -->
                                <div class="single-testimonial">
                                    <div class="testimonial-caption">
                                        <p>Brook presents your services with flexible, convenient and cdpose layouts. You can select your favorite layouts & elements for cular ts with unlimited ustomization possibilities. Pixel-perfect replica;ition of thei designers ijtls intended csents your se.</p>
                                        <div class="rattiong-caption">
                                            <span>Jhon Smith<span>Gym Trainer</span> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Testimonial End -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-2 Area End -->
        <!--? Gallery Area Start -->
        <div class="gallery-area">
            <div class="container-fluid p-0 fix">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box snake mb-30">
                            <div class="gallery-img big-img" style="background-image: url(assets/img/gallery/gallery1.png);"></div>
                            <div class="overlay">
                                <div class="overlay-content">
                                    <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                    <h3>Best fitness gallery</h3>
                                    <p>Fitness, Body</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery2.png);"></div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                            <h3>Best fitness gallery</h3>
                                            <p>Fitness, Body</p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery3.png);"></div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                            <h3>Best fitness gallery</h3>
                                            <p>Fitness, Body</p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery4.png);"></div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                            <h3>Best fitness gallery</h3>
                                            <p>Fitness, Body</p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="box snake mb-30">
                                    <div class="gallery-img small-img" style="background-image: url(assets/img/gallery/gallery5.png);"></div>
                                    <div class="overlay">
                                        <div class="overlay-content">
                                            <a href="gallery.html"><i class="ti-arrow-top-right"></i></a>
                                            <h3>Best fitness gallery</h3>
                                            <p>Fitness, Body</p>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery Area End -->
        <!--? Want To work -->
        <section class="wantToWork-area w-padding">
            <div class="container">
                <div class="row align-items-end justify-content-between">
                    <div class="col-lg-6 col-md-9 col-sm-9">
                        <div class="section-tittle">
                            <span>oUR TEAM MAMBERS</span>
                            <h2>Our Most Exprienced Trainers</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <a href="services.html" class="btn wantToWork-btn f-right">More Services</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->
        <!--? Team Ara Start -->
        <div class="team-area pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/gallery/team1.png" alt="">
                                <div class="team-caption">
                                    <span>Creative derector</span>
                                    <h3><a href="#">Jhon Sunsaev</a></h3>
                                    <!-- Blog Social -->
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/gallery/team2.png" alt="">
                                <div class="team-caption">
                                    <span>Creative derector</span>
                                    <h3><a href="#">Jhon Sunsaev</a></h3>
                                    <!-- Blog Social -->
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="single-team mb-30">
                            <div class="team-img">
                                <img src="assets/img/gallery/team3.png" alt="">
                                <div class="team-caption">
                                    <span>Creative derector</span>
                                    <h3><a href="#">Jhon Sunsaev</a></h3>
                                    <!-- Blog Social -->
                                    <div class="team-social">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team Ara End -->
        <!--? Want To work -->
        <section class="wantToWork-area w-padding section-bg" data-background="assets/img/gallery/section_bg02.png">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10">
                        <div class="wantToWork-caption">
                            <h2>April membership offer available Now</h2>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3">
                        <a href="services.html" class="btn wantToWork-btn f-right">More Services</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Want To work End -->
        <!--? Date Tabs Start -->
        <section class="date-tabs section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-8">
                        <div class="section-tittle text-center mb-100">
                            <span>OUR tIME SCHEDULE</span>
                            <h2>SELECT THE pERFECT TIME YOU NEED NOW</h2>
                        </div>
                    </div>
                </div>
                <!-- Heading & Nav Button -->
                <div class="row justify-content-center mb-10">
                    <div class="col-lg-11">
                        <div class="properties__button">
                            <!--Nav Button  -->                                            
                            <nav>      
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Saturday</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Sunday</a>
                                    <a class="nav-item nav-link active" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Monday</a>
                                    <a class="nav-item nav-link" id="nav-last-tab" data-toggle="tab" href="#nav-last" role="tab" aria-controls="nav-contact" aria-selected="false">Tuesday</a>
                                    <a class="nav-item nav-link" id="nav-Sports" data-toggle="tab" href="#nav-nav-Sport" role="tab" aria-controls="nav-contact" aria-selected="false">Language</a>
                                    <a class="nav-item nav-link" id="nav-six" data-toggle="tab" href="#nav-nav-six" role="tab" aria-controls="nav-contact" aria-selected="false">Thursday</a>
                                    <a class="nav-item nav-link" id="nav-seven" data-toggle="tab" href="#nav-nav-seven" role="tab" aria-controls="nav-seven" aria-selected="false">Friday</a>
                                </div>
                            </nav>
                            <!--End Nav Button  -->
                        </div>
                    </div>
                </div>
                <!-- Tab content -->
                <div class="row justify-content-center">
                    <div class="col-lg-11">
                        <!-- Nav Card -->
                        <div class="tab-content" id="nav-tabContent">
                            <!--  one -->
                            <div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">       
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-wrapper">
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                    <div class="caption">
                                                        <span>6am - 8am</span>
                                                        <h3>Kick Boxing</h3>
                                                        <p><span>by</span> Jhos Kusam</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div> 
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption active text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                            </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  Two -->
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-wrapper">
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption active text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  Three -->
                            <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-wrapper">
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption active text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  Fur -->
                            <div class="tab-pane fade" id="nav-last" role="tabpanel" aria-labelledby="nav-last-tab">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-wrapper">
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption active text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  Five -->
                            <div class="tab-pane fade" id="nav-nav-Sport" role="tabpanel" aria-labelledby="nav-Sports">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-wrapper">
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption active text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  Six -->
                            <div class="tab-pane fade" id="nav-nav-six" role="tabpanel" aria-labelledby="nav-six">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-wrapper">
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption active text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--  seven -->
                            <div class="tab-pane fade" id="nav-nav-seven" role="tabpanel" aria-labelledby="nav-seven">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="tab-wrapper">
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                            <!-- single -->
                                            <div class="single-box">
                                                <div class="single-caption active text-center">
                                                <div class="caption">
                                                    <span>6am - 8am</span>
                                                    <h3>Kick Boxing</h3>
                                                    <p><span>by</span> Jhos Kusam</p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- End Nav Card -->
                    </div>
                </div>
            </div>
            
        </section>
        <!-- Date Tabs End -->
        <!--? Contact form Start -->
        <section class="contact-form-main">
            <div class="container">
                <div class="row justify-content-end">
                    <div class="col-xl-7 col-lg-7">
                        <div class="form-wrapper">
                            <!--Section Tittle  -->
                            <div class="form-tittle">
                                <div class="row ">
                                    <div class="col-lg-11 col-md-10 col-sm-10">
                                        <div class="section-tittle">
                                            <span>Contact Form</span>
                                            <h2>Feel Free to contact with us!</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End Section Tittle  -->
                            <form id="contact-form" action="#" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box user-icon mb-30">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box email-icon mb-30">
                                            <input type="text" name="email" placeholder="Phone">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 mb-30">
                                        <div class="select-itms">
                                            <select name="select" id="select2">
                                                <option value="">Boxing</option>
                                                <option value="">saiful islam</option>
                                                <option value="">Arafath Miya</option>
                                                <option value="">Shakil Miya</option>
                                                <option value="">Tamim Sharker</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-box subject-icon mb-30">
                                            <input type="Email" name="subject" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-box message-icon mb-65">
                                            <textarea name="message" id="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="submit-info">
                                            <button class="btn" type="submit">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- contact left Img-->
            <div class="from-left d-none d-lg-block">
                <img src="assets/img/gallery/contact_form.png" alt="">
            </div>
        </section>
        <!-- Contact form End -->
        <!--? Blog Area Start -->
        <section class="home-blog-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9 col-sm-10">
                        <div class="section-tittle text-center mb-100">
                            <span>rECENT NEWS FORM BLOG</span>
                            <h2>gYM TIPS news fOR YOU THAT selected by us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/blog1.png" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <span>Creative derector</span>
                                    <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <div class="home-blog-single mb-30">
                            <div class="blog-img-cap">
                                <div class="blog-img">
                                    <img src="assets/img/gallery/blog2.png" alt="">
                                    <!-- Blog date -->
                                    <div class="blog-date text-center">
                                        <span>24</span>
                                        <p>Now</p>
                                    </div>
                                </div>
                                <div class="blog-cap">
                                    <span>Creative derector</span>
                                    <h3><a href="blog_details.html">Footprints in Time is perfect House in Kurashiki</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>
    <footer>
        <!--? Footer Start-->
        <div class="footer-area section-bg" data-background="assets/img/gallery/section_bg03.png">
            <div class="container">
                <div class="footer-top footer-padding">
                    <!-- Footer Menu -->
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>COMPANY</h4>
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Company</a></li>
                                        <li><a href="#"> Press & Blog</a></li>
                                        <li><a href="#"> Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Open hour</h4>
                                    <ul>
                                        <li><a href="#">Monday 11am-7pm</a></li>
                                        <li><a href="#"> Tuesday-Friday 11am-8pm</a></li>
                                        <li><a href="#"> Saturday 10am-6pm</a></li>
                                        <li><a href="#"> Sunday 11am-6pm</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>RESOURCES</h4>
                                    <ul>
                                        <li><a href="#">Home Insurance</a></li>
                                        <li><a href="#">Travel Insurance</a></li>
                                        <li><a href="#"> Car Insurance</a></li>
                                        <li><a href="#"> Business Insurance</a></li>
                                        <li><a href="#"> Heal Insurance</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <!-- logo -->
                                <div class="footer-logo">
                                    <a href="index.html"><img src="assets/img/logo/logo2_footer.png" alt=""></a>
                                </div>
                                <div class="footer-tittle">
                                    <div class="footer-pera">
                                        <p class="info1">GThe trade war currently ensuing between te US anfd several natxions around thdhe globe, most fiercely with.</p>
                                    </div>
                                </div>
                                <!-- Footer Social -->
                                <div class="footer-social ">
                                    <a href="https://www.facebook.com/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fas fa-globe"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Bottom -->
                <div class="footer-bottom">
                    <div class="row d-flex align-items-center">
                        <div class="col-lg-12">
                            <div class="footer-copy-right text-center">
                                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    
    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
    </body>
</html>