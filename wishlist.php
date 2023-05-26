<!DOCTYPE html>
<html lang="en">


<!-- molla/wishlist.html  22 Nov 2019 09:55:05 GMT -->

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
                    <h1 class="page-title">Wishlist<span>Shop</span></h1>
                </div><!-- End .container -->
            </div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <table class="table table-wishlist table-mobile">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Stock Status</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td class="product-col">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="assets/images/products/table/product-1.jpg" alt="Product image">
                                            </a>
                                        </figure>

                                        <h3 class="product-title">
                                            <a href="#">Beige knitted elastic runner shoes</a>
                                        </h3><!-- End .product-title -->
                                    </div><!-- End .product -->
                                </td>
                                <td class="price-col">$84.00</td>
                                <td class="stock-col"><span class="in-stock">In stock</span></td>
                                <td class="action-col">
                                    <div class="dropdown">
                                        <button class="btn btn-block btn-outline-primary-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="icon-list-alt"></i>Select Options
                                        </button>

                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">First option</a>
                                            <a class="dropdown-item" href="#">Another option</a>
                                            <a class="dropdown-item" href="#">The best option</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                            </tr>
                            <tr>
                                <td class="product-col">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="assets/images/products/table/product-2.jpg" alt="Product image">
                                            </a>
                                        </figure>

                                        <h3 class="product-title">
                                            <a href="#">Blue utility pinafore denim dress</a>
                                        </h3><!-- End .product-title -->
                                    </div><!-- End .product -->
                                </td>
                                <td class="price-col">$76.00</td>
                                <td class="stock-col"><span class="in-stock">In stock</span></td>
                                <td class="action-col">
                                    <button class="btn btn-block btn-outline-primary-2"><i class="icon-cart-plus"></i>Add to Cart</button>
                                </td>
                                <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                            </tr>
                            <tr>
                                <td class="product-col">
                                    <div class="product">
                                        <figure class="product-media">
                                            <a href="#">
                                                <img src="assets/images/products/table/product-3.jpg" alt="Product image">
                                            </a>
                                        </figure>

                                        <h3 class="product-title">
                                            <a href="#">Orange saddle lock front chain cross body bag</a>
                                        </h3><!-- End .product-title -->
                                    </div><!-- End .product -->
                                </td>
                                <td class="price-col">$52.00</td>
                                <td class="stock-col"><span class="out-of-stock">Out of stock</span></td>
                                <td class="action-col">
                                    <button class="btn btn-block btn-outline-primary-2 disabled">Out of Stock</button>
                                </td>
                                <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>
                            </tr>
                        </tbody>
                    </table><!-- End .table table-wishlist -->
                    <div class="wishlist-share">
                        <div class="social-icons social-icons-sm mb-2">
                            <label class="social-label">Share on:</label>
                            <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                            <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                            <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                            <a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                            <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                        </div><!-- End .soial-icons -->
                    </div><!-- End .wishlist-share -->
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


<!-- molla/wishlist.html  22 Nov 2019 09:55:06 GMT -->

</html>