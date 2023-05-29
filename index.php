<?php
include_once("./components/main/header.php");
?>

<body>
    <div class="page-wrapper">
        <?php
        include_once("./components/main/nav.php");
        ?>

        <main class="main">
            <div class="mb-lg-2"></div><!-- End .mb-lg-2 -->
            <div class="container-fluid">
                <div class="row">
                    <?php
                    include_once("./components/main/slider.php");
                    ?>

                    <div class="col-xl-3 col-xxl-2 d-none d-xxl-block">
                        <div class="banner banner-overlay  banner-content-stretch ">
                            <a href="#">
                                <img src="assets/images/demos/demo-14/banners/banner-1.png" alt="Banner img desc">
                            </a>
                            <div class="banner-content text-right">
                                <div class="price text-center">
                                    <sup class="text-white">from</sup>
                                    <span class="text-white">
                                        <strong>$199</strong><sup class="text-white">,99</sup>
                                    </span>
                                </div>
                                <a href="#" class="banner-link">Discover Now <i class="icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <?php include_once("./main.php") ?>
                    <?php include_once("./components/main/sidebar.php") ?>
                </div>
            </div>
        </main>
        <?php
        include_once("./components/main/footer.php")
        ?>