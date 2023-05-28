<!doctype html>
<html lang="en">
<?php session_start(); ?>
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

    <div id="anggota-baru-slide" style="display:none">
            <div class="item p-2">
                <img src="assets/img/hmm.png"  alt="alt" class="imaged w-100 square mb-4">
                <h2>Hmm....</h2>
                <p>sepertinya kamu baru pertama kali menggunakan aplikasi ini boleh aku mengenalmu?</p>
            </div>


        <div class="carousel-button-footer">
            <div class="row">
                <div class="col-12">
                    <a class="btn btn-primary btn-lg btn-block" id="btn-pengenalan" style="width:100% !important"">Lanjutkan </a>
                </div>
            </div>
        </div>
    </div>



    <div id="name-form" style="display:none">
            <div class="section"style="margin-top:9em !important">
                <h2>Ngomong Ngomong,Nama Kamu Siapa?</h2>
            </div>
            <div class="section mt-2 mb-5" >
              
                   
                    <div class="form-group basic">
                        <div class="input-wrapper" style="margin-top:2em">
                          
                            <input type="text" class="form-control" style="font-size:20px;" id="name-register">
                            <i class="clear-input">
                                <ion-icon name="close-circle"></ion-icon>
                            </i>
                        </div>
                    </div>
                 

                    <div class="form-button-group">
                        <button type="submit" class="btn btn-primary btn-block btn-lg" id="save-register">Lanjutkan</button>
                    </div>

            </div>
        </div>

    <div id="selamat-bergabung" style="display:none">
            <div class="item p-2">
                <img src="assets/img/selamat.png"  alt="alt" class="imaged w-100 square mb-4">
                <h2>Hai Selamat Bergabung...</h2>
                <p>selamat bergabung bersama kami,untuk keamanan kamu bisa mengubah kode pin mu atau kamu juga bisa mengubahnya lain kali.</p>
            </div>


        <div class="carousel-button-footer">
        
            <div class="row">
                <div class="col-12 mb-5">
                <a class="btn btn-primary btn-lg btn-block" id="btn-ubah-pin" style="width:100% !important"">Ubah Sekarang </a>
                    <a class="btn btn-danger btn-lg btn-block" id="btn-ubah-lain-kali" style="width:100% !important"">Ubah Lain kali </a>
                </div>
            </div>
          
        </div>
    </div>

    <div id="app-utama" style="display:none">
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
            <h1 class="title">Data KTP</h1>
        </div>


        <!-- Dialog Block Button -->
         <?php include "kecamatan-ktp/argapura.php" ?>
         <?php include "kecamatan-ktp/banjaran.php" ?>
         <?php include "kecamatan-ktp/baturejeg.php" ?>
         <?php include "kecamatan-ktp/cigasong.php" ?>
         <?php include "kecamatan-ktp/cikijing.php" ?>
         <?php include "kecamatan-ktp/cingambul.php" ?>
         <?php include "kecamatan-ktp/dawuan.php" ?>
         <?php include "kecamatan-ktp/jatitujuh.php" ?>
         <?php include "kecamatan-ktp/jatiwangi.php" ?>
         <?php include "kecamatan-ktp/kadipaten.php" ?>
         <?php include "kecamatan-ktp/kasakondel.php" ?>
         <?php include "kecamatan-ktp/kertajati.php" ?>
         <?php include "kecamatan-ktp/lemahsugih.php" ?>
         <?php include "kecamatan-ktp/leuwimunding.php" ?>
         <?php include "kecamatan-ktp/ligung.php" ?>
         <?php include "kecamatan-ktp/maja.php" ?>
         <?php include "kecamatan-ktp/majalengka.php" ?>
         <?php include "kecamatan-ktp/malausama.php" ?>
         <?php include "kecamatan-ktp/palasah.php" ?>
         <?php include "kecamatan-ktp/panyingkiran.php" ?>
         <?php include "kecamatan-ktp/rajagaluh.php" ?>
         <?php include "kecamatan-ktp/sindang.php" ?>
         <?php include "kecamatan-ktp/sindangwangi.php" ?>
         <?php include "kecamatan-ktp/sukahaji.php" ?>
         <?php include "kecamatan-ktp/sumberjaya.php" ?>
         <?php include "kecamatan-ktp/talaga.php" ?>
        <!-- * app footer -->

    </div>
    <!-- * App Capsule -->
  

    <!-- App Bottom Menu -->
   <div class="appBottomMenu">
                <a  class="item">
                    <div class="col">
                    <ion-icon name="apps-outline"></ion-icon>
                        <strong>Utama</strong>
                    </div>
                </a>
                <a class="item">
                    <div class="col">
                        <ion-icon name="calendar-outline"></ion-icon>
                        <strong>Calendar</strong>
                    </div>
                </a>
                <a  class="item">
                    <div class="col">
                        <div class="action-button large" id="scan-button">
                            <ion-icon name="scan-outline"></ion-icon>
                        </div>
                    </div>
                </a>
                <a  class="item">
                    <div class="col">
                        <ion-icon name="document-text-outline"></ion-icon>
                        <strong>Histori</strong>
                    </div>
                </a>
                <a class="item">
                    <div class="col">
                    <ion-icon name="settings-outline"></ion-icon>
                    <strong>Pengaturan</strong>
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