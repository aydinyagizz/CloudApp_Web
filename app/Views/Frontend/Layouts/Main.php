<!doctype html>
    <html class="no-js" lang="en">
    
    <!-- Mirrored from themebeyond.com/html/hosbit/hosbit/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Oct 2021 20:27:26 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ARHA</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('assets/Frontend/img/favicon.png'); ?>">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS here -->
        <link rel="stylesheet" href="<?= base_url('assets/Frontend/css/bootstrap.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/Frontend/css/animate.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/Frontend/css/magnific-popup.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/Frontend/css/fontawesome-all.min.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/Frontend/css/nice-select.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/Frontend/css/flaticon.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/Frontend/css/odometer.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/Frontend/css/slick.cs'); ?>s">
        <link rel="stylesheet" href="<?= base_url('assets/Frontend/css/default.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/Frontend/css/style.css'); ?>">
        <link rel="stylesheet" href="<?= base_url('assets/Frontend/css/responsive.css'); ?>">
    </head>
    <body>

        <!-- Preloader -->
        <div id="preloader">
            <div class="preloader-wrapper">
                <div class="spinner"></div>
            </div>
        </div>
        <!-- Preloader-end -->

        <!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header class="header-style-two">
           <!--  <div class="header-top-wrap">
                <div class="container custom-container">
                    <div class="row align-items-center">
                        <div class="col-md-4 d-none d-md-block">
                            <div class="header-top-offer">
                                <p>%30 İndirim Kazanın! Teklif</p>
                                <span class="coming-time" data-countdown="2021/11/30"></span>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="header-top-right-list">
                                <ul>
                                    <li><i class="fas fa-headphones"></i><a href="tel:01926849357">+6969 69 6969</a></li>
                                    <li><i class="far fa-envelope"></i><a href="#">Destek</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div id="sticky-header" class="main-header menu-area transparent-header">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                         <a href="index.html" class="main-logo"><img src="<?php echo base_url('assets/Frontend/pragron_logo.png') ?>"  style="width: 200px;" alt=""></a>
<!--                                        <p style="color: white; font-size: 30px; "><b>PRAGRON</b>CLOUD</p>-->

                                        <a href="./" class="sticky-logo"><img src="<?php echo base_url('assets/Frontend/pragron_logo.png') ?>"  style="width: 255px;" alt=""></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li class="active dropdown"><a href="./">Anasayfa</a>
                                                
                                            </li>
                                            <li><a href="#">Hizmetlerimiz</a></li>
                                            <li><a href="#">Kurumsal</a></li>
                                            <li><a href="#">İletişim</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <li class="header-search"><a href="#" data-toggle="modal" data-target="#search-modal"><i class="fas fa-search"></i></a></li>
                                            <li class="header-btn"><a href="login" class="btn green-btn"><i class="fas fa-unlock-alt"></i> Giriş Yap</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="menu-backdrop"></div>
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="index.php"><img src="<?= base_url('assets/Frontend/img/logo1.png'); ?>" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- End Mobile Menu -->
                            <!-- Modal Search -->
                            <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <form>
                                            <input type="text" placeholder="Arama">
                                            <button><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-area-end -->







<?php echo $this->renderSection('content') ?>





 <!-- footer-area -->
 <footer class="footer-style-two">
            <div class="footer-top-wrap dark-bg pt-90 pb-40">
                <div class="container">
                    <div class="footer-newsletter">
                        <div class="row justify-content-between align-items-center">
                      
                            <div class="col-xl-6 col-lg-7">
                                <form action="#" class="newsletter-form">
                                    <input type="email" name="email" placeholder="Enter Your Email....">
                                    <button class="btn green-btn"><i class="flaticon-startup"></i>Abone Ol</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6">
                            
                        </div>
                        <div class="col-xl-3 col-lg-2 col-md-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-logo mb-40">
                                    <a href="./"><img src="<?php echo base_url('assets/Frontend/pragron_logo.png') ?>"  style="width: 200px;" alt=""></a>
                                </div>
                                <div class="fw-address">
                                    <ul>
                                        <li class="phone">
                                            <h3>Sorunuz mu var? 7/24 hızlı ulaşım</h3>
                                            <h5>458-965-3224</h5>
                                        </li>
                                        <li class="address">
                                            <p>Üniversite mh. Hayat Sk.,
                                            Elazığ/Merkez</p>
                                        </li>
                                    </ul>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                             <div class="footer-widget mb-35">
                                <div class="fw-title fw-title-two mb-25">
                                    <h4 class="title">Social Media</h4>
                                </div>
                                <div class="fw-social">
                                    <ul>
                                        <li><a href="#" class="fb"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" class="tw"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" class="pin"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#" class="lik"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-widget mb-50">
                                <div class="fw-title fw-title-two mb-25">
                                    <h4 class="title">Solutions</h4>
                                </div>
                                <div class="fw-solutions">
                                    <ul>
                                        <li><img src="<?= base_url('assets/Frontend/img/images/solutions_logo01.png'); ?>" alt=""></li>
                                        <li><img src="<?= base_url('assets/Frontend/img/images/solutions_logo02.png'); ?>" alt=""></li>
                                        <li><img src="<?= base_url('assets/Frontend/img/images/solutions_logo03.png'); ?>" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap-two">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <div class="copyright-text">
                                <p>&copy; COPYRIGHT TÜM HAKLARI SAKLIDIR 2015 ~ <?= date('Y'); ?></p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="payment-method-img">
                                <img src="<?= base_url('assets/Frontend/img/images/payment_method.png'); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->



        <!-- JS here -->
        <script src="<?= base_url('assets/Frontend/js/vendor/jquery-3.5.0.min.js'); ?>"></script>
        <script src="<?= base_url('assets/Frontend/js/popper.min.js'); ?>"></script>
        <script src="<?= base_url('assets/Frontend/js/bootstrap.min.js'); ?>"></script>
        <script src="<?= base_url('assets/Frontend/js/isotope.pkgd.min.js'); ?>"></script>
        <script src="<?= base_url('assets/Frontend/js/imagesloaded.pkgd.min.js'); ?>"></script>
        <script src="<?= base_url('assets/Frontend/js/jquery.magnific-popup.min.js'); ?>"></script>
        <script src="<?= base_url('assets/Frontend/js/jquery.nice-select.min.js'); ?>"></script>
        <script src="<?= base_url('assets/Frontend/js/jquery.odometer.min.js'); ?>"></script>
        <script src="<?= base_url('assets/Frontend/js/jquery.countdown.min.js'); ?>"></script>
        <script src="<?= base_url('assets/Frontend/js/jquery.appear.js'); ?>"></script>
        <script src="<?= base_url('assets/Frontend/js/slick.min.js'); ?>"></script>
        <script src="<?= base_url('assets/Frontend/js/ajax-form.js'); ?>"></script>
        <script src="<?= base_url('assets/Frontend/js/wow.min.js'); ?>"></script>
        <script src="<?= base_url('assets/Frontend/js/plugins.js'); ?>"></script>
        <script src="<?= base_url('assets/Frontend/js/main.js'); ?>"></script>
    </body>

    <!-- Mirrored from themebeyond.com/html/hosbit/hosbit/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 Oct 2021 20:30:01 GMT -->
    </html>

