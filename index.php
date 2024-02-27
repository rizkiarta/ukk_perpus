<?php
include "koneksi.php";
if(!isset($_SESSION['user'])) {
    header('location:login.php');
}
?>

<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Perpustakaan Digital</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Typography CSS -->
    <link rel="stylesheet" href="css/typography.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
                <a href="index.html" class="header-logo">
                    <img src="images/logo.png" class="img-fluid rounded-normal" alt="">
                    <div class="logo-title">
                        <span class="text-danger text-uppercase">Perpus<span
                                class="text-primary ml-1">Digital</span></span>
                    </div>
                </a>
                <div class="iq-menu-bt-sidebar">
                    <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                            <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                            <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="sidebar-scrollbar">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class="active active-menu">
                            <a href="?"><i class="las la-house-damage"></i>Dashboard</a>

                        </li>
                        <li>
                            <a href=" ?" class="iq-waves-effect ">
                                <span>Navigasi</span>
                            </a>
                        </li>
                        <?php
                        if($_SESSION['user']['Role']!='Peminjam'){
                        ?>
                        <li>
                            <a href="?page=kategori" class="iq-waves-effect">
                                <i class="las la-th-large"></i><span>Kategori</span>
                            </a>
                        </li>
                        <li>
                            <a href="?page=buku" class="iq-waves-effect">
                                <i class="las la-book"></i><span>Buku</span>
                            </a>
                        </li>
                        <li>
                            <a href="?page=laporan" class="iq-waves-effect">
                                <i class="las la-book-reader"></i><span>Laporan Peminjaman</span>
                            </a>
                        </li>
                        <?php
                        }else{
                        ?>
                        <li>
                            <a href="?page=peminjaman" class="iq-waves-effect">
                                <i class="las la-book-reader"></i><span>Peminjaman</span>
                            </a>
                        </li>
                        <?php
                          }
                             ?>
                        <li>
                            <a href="?page=ulasan" class="iq-waves-effect">
                                <i class="las la-comment"></i><span>Ulasan</span>
                            </a>
                        </li>
                        <?php
                        if($_SESSION['user']['Role']!='Peminjam'){
                            
                            if($_SESSION['user']['Role']=='Administrator'){
                        ?>

                        <li>
                            <a href=" ?" class="iq-waves-effect ">
                                <span>Akun</span>
                            </a>
                        </li>

                        <li>
                            <a href="?page=petugas" class="iq-waves-effect">
                                <i class="las la-user"></i><span>Data Petugas</span>
                            </a>
                        </li>
                        <?php
                          }
                             ?>
                        <li>
                            <a href="?page=peminjam" class="iq-waves-effect">
                                <i class="las la-book-reader"></i><span>Data Peminjam</span>
                            </a>
                        </li>
                        <?php
                          }
                             ?>
                        <li>
                            <a href="logout.php">
                                <i class="las la-power-off"></i>Logout
                            </a>
                        </li>
                    </ul>
                    </li>
                    </ul>
                </nav>
                <div id="sidebar-bottom" class="p-3 position-relative">
                    <div class="iq-card bg-primary rounded">
                        <div class="iq-card-body">
                            <div class="sidebarbottom-content">
                                <div class="image"><img src="images/page-img/book-side.png" alt=""></div>
                                <h5 class="mb-3 text-white"></h5>
                                <p class="mb-0 text-light">Login Sebgai</p>
                                <?php 
                                echo $_SESSION['user']['NamaLengkap'];
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TOP Nav Bar -->
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light p-0">

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-label="Toggle navigation">
                        <i class="ri-menu-3-line"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list">
                            <li class="nav-item nav-icon">
                                <div class="iq-search-bar">
                                    <form action="#" class="searchbox">
                                        <input type="text" class="text search-input"
                                            placeholder="Type here to search...">
                                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <ul class="navbar-list">
                        <li class="line-height">
                            <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                                <img src="images/user/user.png" class="img-fluid rounded-circle" alt="user">
                            </a>
                            <div class="iq-card shadow-none m-0">
                                <div class="iq-card-body p-0 ">
                                    <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- TOP Nav Bar END -->
        <!-- Page Content  -->
        <div id="content-page" class="content-page">
            <div class="container-fluid">
                <div class="row content-body">
                    <!-- Wrapper END -->
                    <!-- Footer -->
                    <div class="container-fluid">
                        <?php
                            $page = isset($_GET['page']) ? $_GET['page'] : 'home';
                            if(file_exists($page . '.php')){
                                include $page . '.php';
                            }else{
                                include '404.php';
                            }
                            ?>
                        <div class="row">
                            <div class="col-lg-6 text-right">
                                Copyright 2024 <a href="?">PerpustakaanDigital</a>
                            </div>
                        </div>
                    </div>
                    <!-- Footer END -->
                </div>
            </div>
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <!-- Appear JavaScript -->
        <script src="js/jquery.appear.js"></script>
        <!-- Countdown JavaScript -->
        <script src="js/countdown.min.js"></script>
        <!-- Counterup JavaScript -->
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <!-- Wow JavaScript -->
        <script src="js/wow.min.js"></script>
        <!-- Apexcharts JavaScript -->
        <script src="js/apexcharts.js"></script>
        <!-- Slick JavaScript -->
        <script src="js/slick.min.js"></script>
        <!-- Select2 JavaScript -->
        <script src="js/select2.min.js"></script>
        <!-- Owl Carousel JavaScript -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- Magnific Popup JavaScript -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <!-- Smooth Scrollbar JavaScript -->
        <script src="js/smooth-scrollbar.js"></script>
        <!-- lottie JavaScript -->
        <script src="js/lottie.js"></script>
        <!-- am core JavaScript -->
        <script src="js/core.js"></script>
        <!-- am charts JavaScript -->
        <script src="js/charts.js"></script>
        <!-- am animated JavaScript -->
        <script src="js/animated.js"></script>
        <!-- am kelly JavaScript -->
        <script src="js/kelly.js"></script>
        <!-- am maps JavaScript -->
        <script src="js/maps.js"></script>
        <!-- am worldLow JavaScript -->
        <script src="js/worldLow.js"></script>
        <!-- Raphael-min JavaScript -->
        <script src="js/raphael-min.js"></script>
        <!-- Morris JavaScript -->
        <script src="js/morris.js"></script>
        <!-- Morris min JavaScript -->
        <script src="js/morris.min.js"></script>
        <!-- Flatpicker Js -->
        <script src="js/flatpickr.js"></script>
        <!-- Style Customizer -->
        <script src="js/style-customizer.js"></script>
        <!-- Chart Custom JavaScript -->
        <script src="js/chart-custom.js"></script>
        <!-- Custom JavaScript -->
        <script src="js/custom.js"></script>
</body>

</html>