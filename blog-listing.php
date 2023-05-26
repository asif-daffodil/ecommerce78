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
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
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
                    <h1 class="page-title">Blog Listing<span>Blog</span></h1>
                </div><!-- End .container -->
            </div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Blog</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Listing</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->
            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <article class="entry entry-list">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <figure class="entry-media">
                                            <a href="single.html">
                                                <img src="assets/images/blog/listing/post-1.jpg" alt="image desc">
                                            </a>
                                        </figure><!-- End .entry-media -->
                                    </div><!-- End .col-md-5 -->

                                    <div class="col-md-7">
                                        <div class="entry-body">
                                            <div class="entry-meta">
                                                <span class="entry-author">
                                                    by <a href="#">John Doe</a>
                                                </span>
                                                <span class="meta-separator">|</span>
                                                <a href="#">Nov 22, 2018</a>
                                                <span class="meta-separator">|</span>
                                                <a href="#">2 Comments</a>
                                            </div><!-- End .entry-meta -->

                                            <h2 class="entry-title">
                                                <a href="single.html">Cras ornare tristique elit.</a>
                                            </h2><!-- End .entry-title -->

                                            <div class="entry-cats">
                                                in <a href="#">Lifestyle</a>,
                                                <a href="#">Shopping</a>
                                            </div><!-- End .entry-cats -->

                                            <div class="entry-content">
                                                <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse potenti. Sed egestas ... </p>
                                                <a href="single.html" class="read-more">Continue Reading</a>
                                            </div><!-- End .entry-content -->
                                        </div><!-- End .entry-body -->
                                    </div><!-- End .col-md-7 -->
                                </div><!-- End .row -->
                            </article><!-- End .entry -->

                            <article class="entry entry-list">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <figure class="entry-media entry-video">
                                            <a href="single.html">
                                                <img src="assets/images/blog/listing/post-2.jpg" alt="image desc">
                                            </a>
                                        </figure><!-- End .entry-media -->
                                    </div><!-- End .col-md-5 -->

                                    <div class="col-md-7">
                                        <div class="entry-body">
                                            <div class="entry-meta">
                                                <span class="entry-author">
                                                    by <a href="#">John Doe</a>
                                                </span>
                                                <span class="meta-separator">|</span>
                                                <a href="#">Nov 20, 2018</a>
                                                <span class="meta-separator">|</span>
                                                <a href="#">3 Comments</a>
                                            </div><!-- End .entry-meta -->

                                            <h2 class="entry-title">
                                                <a href="single.html">Facilisis aliquam porttitor mauris sit amet orci.</a>
                                            </h2><!-- End .entry-title -->

                                            <div class="entry-cats">
                                                in <a href="#">Lifestyle</a>
                                            </div><!-- End .entry-cats -->

                                            <div class="entry-content">
                                                <p>Morbi purus libero, faucibus commodo quis, gravida id, est. Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui ... </p>
                                                <a href="single.html" class="read-more">Continue Reading</a>
                                            </div><!-- End .entry-content -->
                                        </div><!-- End .entry-body -->
                                    </div><!-- End .col-md-7 -->
                                </div><!-- End .row -->
                            </article><!-- End .entry -->

                            <article class="entry entry-list">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <figure class="entry-media">
                                            <div class="owl-carousel owl-simple owl-light owl-nav-inside" data-toggle="owl">
                                                <a href="single.html">
                                                    <img src="assets/images/blog/listing/post-3.jpg" alt="image desc">
                                                </a>
                                                <a href="single.html">
                                                    <img src="assets/images/blog/listing/post-1.jpg" alt="image desc">
                                                </a>
                                            </div><!-- End .owl-carousel -->
                                        </figure><!-- End .entry-media -->
                                    </div><!-- End .col-md-5 -->

                                    <div class="col-md-7">
                                        <div class="entry-body">
                                            <div class="entry-meta">
                                                <span class="entry-author">
                                                    by <a href="#">John Doe</a>
                                                </span>
                                                <span class="meta-separator">|</span>
                                                <a href="#">Nov 17, 2018</a>
                                                <span class="meta-separator">|</span>
                                                <a href="#">0 Comments</a>
                                            </div><!-- End .entry-meta -->

                                            <h2 class="entry-title">
                                                <a href="single.html">Utaliquam sollicitudin leo.</a>
                                            </h2><!-- End .entry-title -->

                                            <div class="entry-cats">
                                                in <a href="#">Lifestyle</a>,
                                                <a href="#">Shopping</a>
                                            </div><!-- End .entry-cats -->

                                            <div class="entry-content">
                                                <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc tortor eu nibh. Suspendisse potenti. Sed egestas ... </p>
                                                <a href="single.html" class="read-more">Continue Reading</a>
                                            </div><!-- End .entry-content -->
                                        </div><!-- End .entry-body -->
                                    </div><!-- End .col-md-7 -->
                                </div><!-- End .row -->
                            </article><!-- End .entry -->

                            <article class="entry entry-list">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <figure class="entry-media">
                                            <a href="single.html">
                                                <img src="assets/images/blog/listing/post-4.jpg" alt="image desc">
                                            </a>
                                        </figure><!-- End .entry-media -->
                                    </div><!-- End .col-md-5 -->

                                    <div class="col-md-7">
                                        <div class="entry-body">
                                            <div class="entry-meta">
                                                <span class="entry-author">
                                                    by <a href="#">Jane Doe</a>
                                                </span>
                                                <span class="meta-separator">|</span>
                                                <a href="#">Nov 12, 2018</a>
                                                <span class="meta-separator">|</span>
                                                <a href="#">4 Comments</a>
                                            </div><!-- End .entry-meta -->

                                            <h2 class="entry-title">
                                                <a href="single.html">Fusce pellentesque suscipit.</a>
                                            </h2><!-- End .entry-title -->

                                            <div class="entry-cats">
                                                in <a href="#">Travel</a>
                                            </div><!-- End .entry-cats -->

                                            <div class="entry-content">
                                                <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas auguae, eu vulputate magna eros eu erat. Aliquam erat volutpat eget felis ... </p>
                                                <a href="single.html" class="read-more">Continue Reading</a>
                                            </div><!-- End .entry-content -->
                                        </div><!-- End .entry-body -->
                                    </div><!-- End .col-md-7 -->
                                </div><!-- End .row -->
                            </article><!-- End .entry -->

                            <article class="entry entry-list">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <figure class="entry-media">
                                            <a href="single.html">
                                                <img src="assets/images/blog/listing/post-5.jpg" alt="image desc">
                                            </a>
                                        </figure><!-- End .entry-media -->
                                    </div><!-- End .col-md-5 -->

                                    <div class="col-md-7">
                                        <div class="entry-body">
                                            <div class="entry-meta">
                                                <span class="entry-author">
                                                    by <a href="#">John Doe</a>
                                                </span>
                                                <span class="meta-separator">|</span>
                                                <a href="#">Nov 11, 2018</a>
                                                <span class="meta-separator">|</span>
                                                <a href="#">0 Comments</a>
                                            </div><!-- End .entry-meta -->

                                            <h2 class="entry-title">
                                                <a href="single.html">Donec nec justo eget felis facilisis fermentum.</a>
                                            </h2><!-- End .entry-title -->

                                            <div class="entry-cats">
                                                in <a href="#">Hobbies</a>
                                            </div><!-- End .entry-cats -->

                                            <div class="entry-content">
                                                <p>Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. Phasellus ultrices nulla quis nibh. Quisque lectus. Donec consectetuer ligula vulputate sem ...</p>
                                                <a href="single.html" class="read-more">Continue Reading</a>
                                            </div><!-- End .entry-content -->
                                        </div><!-- End .entry-body -->
                                    </div><!-- End .col-md-7 -->
                                </div><!-- End .row -->
                            </article><!-- End .entry -->

                            <article class="entry entry-list">
                                <div class="row align-items-center">
                                    <div class="col-md-5">
                                        <figure class="entry-media">
                                            <a href="single.html">
                                                <img src="assets/images/blog/listing/post-6.jpg" alt="image desc">
                                            </a>
                                        </figure><!-- End .entry-media -->
                                    </div><!-- End .col-md-5 -->

                                    <div class="col-md-7">
                                        <div class="entry-body">
                                            <div class="entry-meta">
                                                <span class="entry-author">
                                                    by <a href="#">Hans Doe</a>
                                                </span>
                                                <span class="meta-separator">|</span>
                                                <a href="#">Nov 10, 2018</a>
                                                <span class="meta-separator">|</span>
                                                <a href="#">0 Comments</a>
                                            </div><!-- End .entry-meta -->

                                            <h2 class="entry-title">
                                                <a href="single.html">Quisque volutpat mattiseros.</a>
                                            </h2><!-- End .entry-title -->

                                            <div class="entry-cats">
                                                in <a href="#">Travel</a>,
                                                <a href="#">Hobbies</a>
                                            </div><!-- End .entry-cats -->

                                            <div class="entry-content">
                                                <p>Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus. Phasellus ultrices nulla quis nibh. Quisque lectus. Donec consectetuer ...</p>
                                                <a href="single.html" class="read-more">Continue Reading</a>
                                            </div><!-- End .entry-content -->
                                        </div><!-- End .entry-body -->
                                    </div><!-- End .col-md-7 -->
                                </div><!-- End .row -->
                            </article><!-- End .entry -->


                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                            <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                        </a>
                                    </li>
                                    <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item">
                                        <a class="page-link page-link-next" href="#" aria-label="Next">
                                            Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- End .col-lg-9 -->

                        <aside class="col-lg-3">
                            <div class="sidebar">
                                <div class="widget widget-search">
                                    <h3 class="widget-title">Search</h3><!-- End .widget-title -->

                                    <form action="#">
                                        <label for="ws" class="sr-only">Search in blog</label>
                                        <input type="search" class="form-control" name="ws" id="ws" placeholder="Search in blog" required>
                                        <button type="submit" class="btn"><i class="icon-search"></i><span class="sr-only">Search</span></button>
                                    </form>
                                </div><!-- End .widget -->

                                <div class="widget widget-cats">
                                    <h3 class="widget-title">Categories</h3><!-- End .widget-title -->

                                    <ul>
                                        <li><a href="#">Lifestyle<span>3</span></a></li>
                                        <li><a href="#">Shopping<span>3</span></a></li>
                                        <li><a href="#">Fashion<span>1</span></a></li>
                                        <li><a href="#">Travel<span>3</span></a></li>
                                        <li><a href="#">Hobbies<span>2</span></a></li>
                                    </ul>
                                </div><!-- End .widget -->

                                <div class="widget">
                                    <h3 class="widget-title">Popular Posts</h3><!-- End .widget-title -->

                                    <ul class="posts-list">
                                        <li>
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/images/blog/sidebar/post-1.jpg" alt="post">
                                                </a>
                                            </figure>

                                            <div>
                                                <span>Nov 22, 2018</span>
                                                <h4><a href="#">Aliquam tincidunt mauris eurisus.</a></h4>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/images/blog/sidebar/post-2.jpg" alt="post">
                                                </a>
                                            </figure>

                                            <div>
                                                <span>Nov 19, 2018</span>
                                                <h4><a href="#">Cras ornare tristique elit.</a></h4>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/images/blog/sidebar/post-3.jpg" alt="post">
                                                </a>
                                            </figure>

                                            <div>
                                                <span>Nov 12, 2018</span>
                                                <h4><a href="#">Vivamus vestibulum ntulla nec ante.</a></h4>
                                            </div>
                                        </li>
                                        <li>
                                            <figure>
                                                <a href="#">
                                                    <img src="assets/images/blog/sidebar/post-4.jpg" alt="post">
                                                </a>
                                            </figure>

                                            <div>
                                                <span>Nov 25, 2018</span>
                                                <h4><a href="#">Donec quis dui at dolor tempor interdum.</a></h4>
                                            </div>
                                        </li>
                                    </ul><!-- End .posts-list -->
                                </div><!-- End .widget -->

                                <div class="widget widget-banner-sidebar">
                                    <div class="banner-sidebar-title">ad box 280 x 280</div><!-- End .ad-title -->

                                    <div class="banner-sidebar banner-overlay">
                                        <a href="#">
                                            <img src="assets/images/blog/sidebar/banner.jpg" alt="banner">
                                        </a>
                                    </div><!-- End .banner-ad -->
                                </div><!-- End .widget -->

                                <div class="widget">
                                    <h3 class="widget-title">Browse Tags</h3><!-- End .widget-title -->

                                    <div class="tagcloud">
                                        <a href="#">fashion</a>
                                        <a href="#">style</a>
                                        <a href="#">women</a>
                                        <a href="#">photography</a>
                                        <a href="#">travel</a>
                                        <a href="#">shopping</a>
                                        <a href="#">hobbies</a>
                                    </div><!-- End .tagcloud -->
                                </div><!-- End .widget -->

                                <div class="widget widget-text">
                                    <h3 class="widget-title">About Blog</h3><!-- End .widget-title -->

                                    <div class="widget-text-content">
                                        <p>Vestibulum volutpat, lacus a ultrices sagittis, mi neque euismod dui, pulvinar nunc sapien ornare nisl.</p>
                                    </div><!-- End .widget-text-content -->
                                </div><!-- End .widget -->
                            </div><!-- End .sidebar -->
                        </aside><!-- End .col-lg-3 -->
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
        <!-- Main JS File -->
        <script src="assets/js/main.js"></script>
</body>


<!-- molla/blog-listing.html  22 Nov 2019 10:04:12 GMT -->

</html>