<?php
include "koneksi.php";

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    $data = mysqli_query($koneksi, "SELECT*FROM user where username='$username' and password='$password'");
    $cek = mysqli_num_rows($data);
    if($cek > 0){
        $_SESSION['user'] = mysqli_fetch_array($data);
        echo '<script>alert("Selamat datang, Login Berhasil"); location.href="index.php";</script>';
    }else{
        echo '<script>alert("Maaf, Username/Password Salah");</script>';
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Perpustakaan Digital - Login</title>
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
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Sign in Start -->
    <section class="sign-in-page">
        <div class="container p-0" id="sign-in-page-box">
            <div class="bg-white form-container sign-in-container">
                <div class="sign-in-page-data">
                    <div class="sign-in-from w-100 m-auto">
                        <h1 class="mb-3 text-center"><b>Login</b>
                        </h1>
                        <p class="text-center text-dark">Masukkan Username dan Password untuk masuk Perpustakaan
                            Digital
                        </p>
                        <form class="mt-4" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail2">Username</label>
                                <input type="text" name="username" class="form-control mb-0" id="exampleInputEmail2"
                                    placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword2">Password</label>
                                <input type="password" name="password" class="form-control mb-0"
                                    id="exampleInputPassword2" placeholder="Password">
                            </div>
                            <div class="sign-info">
                                <button type="submit" name="login" class="btn btn-primary mb-2">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-right">
                        <img src="images/PerpustakaanDiigital.png" class="img-fluid" alt="logo">
                        <br>
                        <p>Belum punya akun? Registrasi dulu yaa!</p>
                        <a href="register.php"><button class="btn iq-border-primary mt-2"
                                id="signUp">Register</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sign in END -->

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
    <!-- <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script> -->
    <!-- Wow JavaScript -->
    <script src="js/wow.min.js"></script>
    <!-- Apexcharts JavaScript -->
    <script src="js/apexcharts.js"></script>
    <!-- lottie JavaScript -->
    <script src="js/lottie.js"></script>
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
    <!-- Style Customizer -->
    <script src="js/style-customizer.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="js/chart-custom.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!-- Include SweetAlert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>