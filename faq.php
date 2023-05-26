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
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="page-wrapper">
        <?php
        include_once("./components/commonHF/header.php");;
        ?>
        <main class="main">
            <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
                <div class="container">
                    <h1 class="page-title">F.A.Q<span>Pages</span></h1>
                </div><!-- End .container -->
            </div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <h2 class="title text-center mb-3">Shipping Information</h2><!-- End .title -->
                    <div class="accordion accordion-rounded" id="accordion-1">
                        <div class="card card-box card-sm bg-light">
                            <div class="card-header" id="heading-1">
                                <h2 class="card-title">
                                    <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                        How will my parcel be delivered?
                                    </a>
                                </h2>
                            </div><!-- End .card-header -->
                            <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-1">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.
                                </div><!-- End .card-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .card -->

                        <div class="card card-box card-sm bg-light">
                            <div class="card-header" id="heading-2">
                                <h2 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                        Do I pay for delivery?
                                    </a>
                                </h2>
                            </div><!-- End .card-header -->
                            <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-1">
                                <div class="card-body">
                                    Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                                </div><!-- End .card-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .card -->

                        <div class="card card-box card-sm bg-light">
                            <div class="card-header" id="heading-3">
                                <h2 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                        Will I be charged customs fees?
                                    </a>
                                </h2>
                            </div><!-- End .card-header -->
                            <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-1">
                                <div class="card-body">
                                    Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                                </div><!-- End .card-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .card -->

                        <div class="card card-box card-sm bg-light">
                            <div class="card-header" id="heading-4">
                                <h2 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                        My item has become faulty
                                    </a>
                                </h2>
                            </div><!-- End .card-header -->
                            <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-1">
                                <div class="card-body">
                                    Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                                </div><!-- End .card-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .card -->
                    </div><!-- End .accordion -->

                    <h2 class="title text-center mb-3">Orders and Returns</h2><!-- End .title -->
                    <div class="accordion accordion-rounded" id="accordion-2">
                        <div class="card card-box card-sm bg-light">
                            <div class="card-header" id="heading2-1">
                                <h2 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse2-1" aria-expanded="false" aria-controls="collapse2-1">
                                        Tracking my order
                                    </a>
                                </h2>
                            </div><!-- End .card-header -->
                            <div id="collapse2-1" class="collapse" aria-labelledby="heading2-1" data-parent="#accordion-2">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
                                </div><!-- End .card-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .card -->

                        <div class="card card-box card-sm bg-light">
                            <div class="card-header" id="heading2-2">
                                <h2 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse2-2" aria-expanded="false" aria-controls="collapse2-2">
                                        I haven’t received my order
                                    </a>
                                </h2>
                            </div><!-- End .card-header -->
                            <div id="collapse2-2" class="collapse" aria-labelledby="heading2-2" data-parent="#accordion-2">
                                <div class="card-body">
                                    Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                                </div><!-- End .card-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .card -->

                        <div class="card card-box card-sm bg-light">
                            <div class="card-header" id="heading2-3">
                                <h2 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse2-3" aria-expanded="false" aria-controls="collapse2-3">
                                        How can I return an item?
                                    </a>
                                </h2>
                            </div><!-- End .card-header -->
                            <div id="collapse2-3" class="collapse" aria-labelledby="heading2-3" data-parent="#accordion-2">
                                <div class="card-body">
                                    Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                                </div><!-- End .card-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .card -->
                    </div><!-- End .accordion -->

                    <h2 class="title text-center mb-3">Payments</h2><!-- End .title -->
                    <div class="accordion accordion-rounded" id="accordion-3">
                        <div class="card card-box card-sm bg-light">
                            <div class="card-header" id="heading3-1">
                                <h2 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse3-1" aria-expanded="false" aria-controls="collapse3-1">
                                        What payment types can I use?
                                    </a>
                                </h2>
                            </div><!-- End .card-header -->
                            <div id="collapse3-1" class="collapse" aria-labelledby="heading3-1" data-parent="#accordion-3">
                                <div class="card-body">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
                                </div><!-- End .card-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .card -->

                        <div class="card card-box card-sm bg-light">
                            <div class="card-header" id="heading3-2">
                                <h2 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse3-2" aria-expanded="false" aria-controls="collapse3-2">
                                        Can I pay by Gift Card?
                                    </a>
                                </h2>
                            </div><!-- End .card-header -->
                            <div id="collapse3-2" class="collapse" aria-labelledby="heading3-2" data-parent="#accordion-3">
                                <div class="card-body">
                                    Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                                </div><!-- End .card-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .card -->

                        <div class="card card-box card-sm bg-light">
                            <div class="card-header" id="heading3-3">
                                <h2 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse3-3" aria-expanded="false" aria-controls="collapse3-3">
                                        I can't make a payment
                                    </a>
                                </h2>
                            </div><!-- End .card-header -->
                            <div id="collapse3-3" class="collapse" aria-labelledby="heading3-3" data-parent="#accordion-3">
                                <div class="card-body">
                                    Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                                </div><!-- End .card-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .card -->

                        <div class="card card-box card-sm bg-light">
                            <div class="card-header" id="heading3-4">
                                <h2 class="card-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse3-4" aria-expanded="false" aria-controls="collapse3-4">
                                        Has my payment gone through?
                                    </a>
                                </h2>
                            </div><!-- End .card-header -->
                            <div id="collapse3-4" class="collapse" aria-labelledby="heading3-4" data-parent="#accordion-3">
                                <div class="card-body">
                                    Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros.
                                </div><!-- End .card-body -->
                            </div><!-- End .collapse -->
                        </div><!-- End .card -->
                    </div><!-- End .accordion -->
                </div><!-- End .container -->
            </div><!-- End .page-content -->

            <div class="cta cta-display bg-image pt-4 pb-4" style="background-image: url(assets/images/backgrounds/cta/bg-7.jpg);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-9 col-xl-7">
                            <div class="row no-gutters flex-column flex-sm-row align-items-sm-center">
                                <div class="col">
                                    <h3 class="cta-title text-white">If You Have More Questions</h3><!-- End .cta-title -->
                                    <p class="cta-desc text-white">Quisque volutpat mattis eros</p><!-- End .cta-desc -->
                                </div><!-- End .col -->

                                <div class="col-auto">
                                    <a href="contact.html" class="btn btn-outline-white"><span>CONTACT US</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .col-auto -->
                            </div><!-- End .row no-gutters -->
                        </div><!-- End .col-md-10 col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cta -->
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
        <!-- Main JS File -->
        <script src="assets/js/main.js"></script>
</body>


<!-- molla/faq.html  22 Nov 2019 10:04:04 GMT -->

</html>