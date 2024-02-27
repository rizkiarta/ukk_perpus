<?php
include "koneksi.php";

if(isset($_POST['register'])){
    $namalengkap = $_POST['namalengkap'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];
    $role = 'Peminjam';
    $password = md5($_POST['password']);
    
    $insert = mysqli_query($koneksi, "INSERT INTO user(namalengkap,email,alamat,username,password,role) VALUES('$namalengkap','$email','$alamat','$username','$password','$role')");

    if($insert){
        echo'<script>alert("Selamat, register berhasil. Silahkan Login"); location.href="login.php";</script>';
    }else{
        echo'<script>alert("Oops! Register gagal. Silahkan coba lagi.");</script>';
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Perpustakaan Digital - Register</title>
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
                    <div class="sign-in-from w-100 m-auto ">
                        <h2 class="mb-3 text-center"><b>Register</b>
                        </h2>
                        <p class="text-center text-dark">Register akun anda untuk mengaskses Perpustakaan
                            Digital
                        </p>
                        <form class="mt-4" method="post">
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" required name="namalengkap" class="form-control mb-0"
                                    placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" required name="email" class="form-control mb-0" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label> <input type="text" required name="alamat"
                                    class="form-control mb-0" placeholder="alamat">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" required name="username" class="form-control mb-0"
                                    placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" required name="password" class="form-control mb-0"
                                    id="exampleInputPassword2" placeholder="Password">
                            </div>
                            <div class="sign-info">
                                <button type="submit" name="register" class="btn btn-primary mb-2"
                                    value="register">Register</button>
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
                        <p>Masuk Jika Sudah Memiliki Akun</p>
                        <a href="login.php"><button class="btn iq-border-primary mt-2" id="signUp">Login</button></a>
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
</body>

</html>