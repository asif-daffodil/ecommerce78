<?php
include_once("./db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Molla - Bootstrap eCommerce Template</title>
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Molla - Bootstrap eCommerce Template">
    <meta name="author" content="p-themes">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body></body>
<div class="page-wrapper">
    <?php
    include_once("./components/commonHF/header.php");;
    ?>
    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">About us</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <style>
                        .breadcrumb-item a.active {
                            color: #c96;
                        }
                    </style>
                    <li class="breadcrumb-item"><a href="./">Home</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                    <li class="breadcrumb-item"><a href="about" class="<?= substr(basename($_SERVER['PHP_SELF']), 0, -4) == "about" ? "active" : null ?>">About us</a></li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="about-text text-center mt-3">
                            <h2 class="title text-center mb-2">Who We Are</h2><!-- End .title text-center mb-2 -->
                            <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse potenti. Sed egestas, ante et vulputate volutpat, uctus metus libero eu augue. Morbi purus libero, faucibus adipiscing, commodo quis, gravida id, est. Sed lectus. Praesent elementum hendrerit tortor. Sed semper lorem at felis. </p>
                            <img src="assets/images/about/about-2/signature.png" alt="signature" class="mx-auto mb-5">

                            <img src="assets/images/about/about-2/img-1.jpg" alt="image" class="mx-auto mb-6">
                        </div><!-- End .about-text -->
                    </div><!-- End .col-lg-10 offset-1 -->
                </div><!-- End .row -->
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box icon-box-sm text-center">
                            <span class="icon-box-icon">
                                <i class="icon-puzzle-piece"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Design Quality</h3><!-- End .icon-box-title -->
                                <p>Sed egestas, ante et vulputate volutpat, eros pede semper est, vitae luctus metus libero <br>eu augue.</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->

                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box icon-box-sm text-center">
                            <span class="icon-box-icon">
                                <i class="icon-life-ring"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Professional Support</h3><!-- End .icon-box-title -->
                                <p>Praesent dapibus, neque id cursus faucibus, <br>tortor neque egestas augue, eu vulputate <br>magna eros eu erat. </p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->

                    <div class="col-lg-4 col-sm-6">
                        <div class="icon-box icon-box-sm text-center">
                            <span class="icon-box-icon">
                                <i class="icon-heart-o"></i>
                            </span>
                            <div class="icon-box-content">
                                <h3 class="icon-box-title">Made With Love</h3>
                                <p>Pellentesque a diam sit amet mi ullamcorper <br>vehicula. Nullam quis massa sit amet <br>nibh viverra malesuada.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-2"></div><!-- End .mb-2 -->

            <?php include_once("./components/about/statistics.php"); ?>

            <?php include_once("./components/about/team.php");

            $query = "SELECT * FROM `brands`";
            $brands = $conn->query($query);
            ?>

            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="brands-text text-center mx-auto mb-6">
                            <h2 class="title">The world's premium design brands in one destination.</h2>
                            <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nis</p>
                        </div>
                        <div class="brands-display">
                            <div class="row justify-content-center">
                                <?php
                                while ($brand = $brands->fetch_object()) {
                                ?>
                                    <div class="col-6 col-sm-4 col-md-3">
                                        <a href="#" class="brand">
                                            <img src="<?= $brand->image_src ?>" alt="<?= $brand->image_alt ?>">
                                        </a>
                                    </div>
                                <?php
                                }
                                ?>

                            </div><!-- End .row -->
                        </div><!-- End .brands-display -->
                    </div><!-- End .col-lg-10 offset-lg-1 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->

    <?php
    include_once("./components/commonHF/footer.php");
    ?>

    <!-- Plugins JS File -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.hoverIntent.min.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/superfish.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>
    </body>


    <!-- molla/about-2.html  22 Nov 2019 10:04:01 GMT -->

</html>