<?php
// session_start();
// error_reporting(E_ALL ^ E_NOTICE);
include_once 'controllers/c_login.php';
if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] == "admin ") {
        header("location:views/home.php");
    } else if ($_SESSION['role'] == "user") {
        header("location:views/home_user.php");
    } else {
        echo '';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Website Filem - Login</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Ayo Login!!</h1>
                            </div>
                            <form action="routers/r_login.php?aksi=login" method="POST" class="user">
                                
                                <!-- ini form email yang menerima inputan email dari user  -->
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="email"
                                        placeholder="Email Address" name="email">
                                </div>

                                <!-- ini form password yang menerima inputan password dari user  -->
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password"
                                        placeholder="password" name="password">
                                </div>

                                <div class="input-field">
                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Login" id="" name="login">
                                </div>

                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="register.php">Belum punya akun? Register dulu</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

</body>

</html>