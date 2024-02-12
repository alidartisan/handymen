<?php session_start();?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Sales Dashboard | Dashonic - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Pichforest" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- plugin css -->
        <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    </head>
    
    <body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?php

            
            require './config.php';

            if(isset($_POST['logmit'])){
                $user = $_POST['username'];
                $pass = sha1(md5($_POST['password']));

                $check = mysqli_query($conn, "SELECT * FROM users WHERE username = '$user' AND password = '$pass'");
                if(mysqli_num_rows($check)){
                    while($row = mysqli_fetch_assoc($check)){
                        $_SESSION['login'] = $row['id'];
                    }
                }
            }

            if(!isset($_SESSION['login'])){
                include "./login.php";
            }
            else{
                include "./dashboard.php";
            }

        ?>

    </div>
    <!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

    <script src="assets/js/pages/dashboard-sales.init.js"></script>

    <script src="assets/js/app.js"></script>
    <script src="assets/js/custom.js"></script>

    </body>
</html>