<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="theme-color" content="#000000">
    <title>Berkah</title>
    <meta name="description" content="Mobilekit HTML Mobile UI Kit">
    <meta name="keywords" content="bootstrap 4, mobile template, cordova, phonegap, mobile, html" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/icon/192x192.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/berkah/berkah.css">
    <link rel="manifest" href="__manifest.json">
</head>

<body class="bg-white">

    <!-- loader -->
    <div id="loader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <?php include "component/modal.php" ?>

    <!-- App Capsule -->
    <div id="splash-screen">
        <div class="carousel-slider owl-carousel owl-theme">
            <div class="item p-2">
                <img src="assets/img/ktp2.png"  alt="alt" class="imaged w-100 square mb-4">
                <h2>Input Data</h2>
                <p>input data tanpa bingung dan memakan waktu </p>
            </div>
            <div class="item p-2">
                <img src="assets/img/ktp.png" alt="alt" class="imaged w-100 square mb-4">
                <h2>Cara Mudah</h2>
                <p>Mengambil data e-ktp hanya dari photo.</p>
            </div>
            <div class="item p-2">
                <img src="assets/img/ktp3.png" alt="alt" class="imaged w-100 square mb-4">
                <h2>Satu Genggaman</h2>
                <p>kelola dan olah semua data dalam satu aplikasi.</p>
            </div>
            <div class="item p-2" style="margin-top:20px;">
                <img src="assets/img/ktp4.png" alt="alt" class="imaged w-100 square mb-4">
                <h2>Our Vision</h2>
                <p>pilih mulai untuk memulai .</p>
            </div>   
        </div>


        <div class="carousel-button-footer">
            <div class="row">
                <div class="col-12">
                    <a  class="btn btn-primary btn-lg btn-block" id="btnMulai" style="width:100% !important"">Mulai </a>
                </div>
            </div>
        </div>
    </div>


    <div id="login" style="display:none;">
        <div class="appHeader no-border transparent position-absolute">
            <div class="left" >
                <a id="btn-back-login" class="headerButton">
                    <ion-icon name="chevron-back-outline"></ion-icon>
                </a>
            </div>
            <div class="pageTitle"></div>
            <div class="right">
            </div>
        </div>

        <div class="login-form" style="margin-top:5em !important">
            <div class="section">
                <h1>Verifikasi Akses</h1>
                <h4>Masukan Dengan 6 Digit Kode Yang Anda Terima</h4>
            </div>
            <div class="section mt-2 mb-5">

                    <div class="form-group boxed">
                        <div class="input-wrapper">
                            <input type="number" name="pin" pattern="\d*" class="form-control verify-input" id="smscode" placeholder="••••••" maxlength="6">
                        </div>
                    </div>

                    <div class="form-button-group">
                        <button type="submit" id="verifikasiBtn" class="btn btn-primary btn-block btn-lg">Verifikasi</button>
                    </div>

            </div>
     </div>
    </div>

    <div id="app-utama" style="display:none">
    <div class="appHeader bg-primary scrolled">
        <div class="left">
            <a href="#" class="headerButton" data-toggle="modal" data-target="#sidebarPanel">
                <ion-icon name="menu-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">
            Pages
        </div>
        <div class="right">
            <a href="javascript:;" class="headerButton toggle-searchbox">
                <ion-icon name="search-outline"></ion-icon>
            </a>
        </div>
    </div>
    <!-- * App Header -->

    <!-- Search Component -->
    <div id="search" class="appHeader">
        <form class="search-form">
            <div class="form-group searchbox">
                <input type="text" class="form-control" placeholder="Search...">
                <i class="input-icon">
                    <ion-icon name="search-outline"></ion-icon>
                </i>
                <a href="javascript:;" class="ml-1 close toggle-searchbox">
                    <ion-icon name="close-circle"></ion-icon>
                </a>
            </div>
        </form>
    </div>
    <!-- * Search Component -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="header-large-title">
            <h1 class="title">Pages</h1>
        </div>
        <div class="section full mt-2">
            <div class="section-title">Block Buttons</div>
            <div class="wide-block pt-2 pb-2">
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#DialogBlockButton">
                    Show
                </button>
            </div>
        </div>

        <!-- Dialog Block Button -->
        
        <ul class="listview image-listview flush transparent mt-3 mb-2">
            <li>
                <a href="page-chat.html" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Chat
                    </div>
                </a>
            </li>
            <li>
                <a href="page-fullpage-slider.html" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="image-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Full Slider
                    </div>
                </a>
            </li>
            <li>
                <a href="page-login.html" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Login
                    </div>
                </a>
            </li>
            <li>
                <a href="page-register.html" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Register
                    </div>
                </a>
            </li>
            <li>
                <a href="page-forgot-password.html" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="refresh-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Forgot Password
                    </div>
                </a>
            </li>
            <li>
                <a href="page-sms-verification.html" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="call-outline"></ion-icon>
                    </div>
                    <div class="in">
                        SMS Verification
                    </div>
                </a>
            </li>
            <li>
                <a href="page-profile.html" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="person-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Profile
                    </div>
                </a>
            </li>
            <li>
                <a href="page-product-page.html" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="golf-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Product Page
                    </div>
                </a>
            </li>
            <li>
                <a href="page-cart.html" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Cart
                    </div>
                </a>
            </li>
            <li>
                <a href="page-blank.html" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="document-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Blank Page
                    </div>
                </a>
            </li>
            <li>
                <a href="page-faq.html" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="help-buoy-outline"></ion-icon>
                    </div>
                    <div class="in">
                        FAQ
                    </div>
                </a>
            </li>
            <li>
                <a href="page-blogpost.html" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="document-text-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Blog Post
                    </div>
                </a>
            </li>
            <li>
                <a href="page-about.html" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="document-text-outline"></ion-icon>
                    </div>
                    <div class="in">
                        About
                    </div>
                </a>
            </li>
            <li>
                <a href="page-contact.html" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="call-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Contact
                    </div>
                </a>
            </li>
            <li>
                <a href="page-maintenance.html" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="hammer-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Maintenance
                    </div>
                </a>
            </li>
            <li>
                <a href="page-under-construction.html" class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="megaphone-outline"></ion-icon>
                    </div>
                    <div class="in">
                        Under Construction
                    </div>
                </a>
            </li>
        </ul>


        <!-- app footer -->
        <div class="appFooter">
            <img src="assets/img/logo.png" alt="icon" class="footer-logo mb-2">
            <div class="footer-title">
                Copyright © Mobilekit 2020. All Rights Reserved.
            </div>
            <div>Mobilekit is PWA ready Mobile UI Kit Template.</div>
            Great way to start your mobile websites and pwa projects.

            <div class="mt-2">
                <a href="javascript:;" class="btn btn-icon btn-sm btn-facebook">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a href="javascript:;" class="btn btn-icon btn-sm btn-twitter">
                    <ion-icon name="logo-twitter"></ion-icon>
                </a>
                <a href="javascript:;" class="btn btn-icon btn-sm btn-linkedin">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
                <a href="javascript:;" class="btn btn-icon btn-sm btn-instagram">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a href="javascript:;" class="btn btn-icon btn-sm btn-whatsapp">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                </a>
                <a href="#" class="btn btn-icon btn-sm btn-secondary goTop">
                    <ion-icon name="arrow-up-outline"></ion-icon>
                </a>
            </div>

        </div>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->
  

    <!-- App Bottom Menu -->
   <div class="appBottomMenu">
                <a href="#" class="item">
                    <div class="col">
                        <ion-icon name="file-tray-full-outline"></ion-icon>
                        <strong>Today</strong>
                    </div>
                </a>
                <a href="#" class="item active">
                    <div class="col">
                        <ion-icon name="calendar-outline"></ion-icon>
                        <strong>Calendar</strong>
                    </div>
                </a>
                <a href="#" class="item">
                    <div class="col">
                        <div class="action-button large" id="scan-button">
                            <ion-icon name="scan-outline"></ion-icon>
                        </div>
                    </div>
                </a>
                <a href="#" class="item">
                    <div class="col">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <strong>Docs</strong>
                    </div>
                </a>
                <a href="javascript:;" class="item">
                    <div class="col">
                        <ion-icon name="people-outline"></ion-icon>
                        <strong>Profile</strong>
                    </div>
                </a>
            </div>

    </div>


    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="assets/berkah/berkah.js"></script>
    <script src="assets/berkah/pure-berkah.js"></script>
    <script src="assets/js/lib/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- jQuery Circle Progress -->
    <script src="assets/js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>


</body>

</html>