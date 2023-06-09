<?php
$pagename = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
?>
<header class="header">
    <div class="header-top">
        <div class="container">
            <div class="header-left">
                <div class="header-dropdown">
                    <a href="#">Usd</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">Eur</a></li>
                            <li><a href="#">Usd</a></li>
                        </ul>
                    </div><!-- End .header-menu -->
                </div><!-- End .header-dropdown -->

                <div class="header-dropdown">
                    <a href="#">Eng</a>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">English</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </div><!-- End .header-menu -->
                </div><!-- End .header-dropdown -->
            </div><!-- End .header-left -->

            <div class="header-right">
                <ul class="top-menu">
                    <li>
                        <a href="#">Links</a>
                        <ul>
                            <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                            <li><a href="wishlist"><i class="icon-heart-o"></i>Wishlist <span>(3)</span></a></li>
                            <li><a href="about">About Us</a></li>
                            <li><a href="contact">Contact Us</a></li>
                            <?php
                            $pagename = pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME);
                            if ($pagename !== "login") {
                            ?>
                                <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                            <?php
                            }
                            ?>

                        </ul>
                    </li>
                </ul><!-- End .top-menu -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-top -->

    <div class="header-middle sticky-header">
        <div class="container">
            <div class="header-left">
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>

                <a href="./" class="logo">
                    <img src="assets/images/logo.png" alt="Molla Logo" width="105" height="25">
                </a>

                <nav class="main-nav">
                    <ul class="menu sf-arrows">

                        <li class="<?= $pagename == "./" ? "active" : null ?>">
                            <a href="./" style="padding-right: 0;">Home</a>
                        </li>
                        <li>
                            <a href="category" style="padding-right: 0;">Shop</a>
                        </li>
                        <li class="<?= $pagename == "blog-listing" ? "active" : null ?>">
                            <a href="blog-listing" style="padding-right: 0;">Blogs</a>
                        </li>

                        <li class="<?= ($pagename == "about" || $pagename == "contact" || $pagename == "login" ||  $pagename == "faq") ? "active" : null ?>">
                            <a href="javascript:void(0)" class="sf-with-ul">Pages</a>
                            <style>
                                .activeee {
                                    color: #c96 !important;
                                }
                            </style>
                            <ul>
                                <li>
                                    <a href="about" class="<?= $pagename == "about" ? "activeee" : null ?>">About</a>
                                </li>
                                <li>
                                    <a href=" contact" class="<?= $pagename == "contact" ? "activeee" : null ?>">Contact</a>
                                </li>
                                <li><a href=" faq" class="<?= $pagename == "faq" ? "activeee" : null ?>">FAQs</a></li>
                            </ul>
                        </li>

                    </ul><!-- End .menu -->
                </nav><!-- End .main-nav -->
            </div><!-- End .header-left -->

            <div class=" header-right">
                <div class="header-search">
                    <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                    <form action="#" method="get">
                        <div class="header-search-wrapper">
                            <label for="q" class="sr-only">Search</label>
                            <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                        </div><!-- End .header-search-wrapper -->
                    </form>
                </div><!-- End .header-search -->

                <style>
                    .active_cart {
                        color: #bf8040 !important;
                    }
                </style>
                <div class="dropdown cart-dropdown">
                    <a href="cart" class="dropdown-toggle <?= $pagename == "cart" ? "active_cart" : null ?>">
                        <i class="icon-shopping-cart"></i>
                        <span class="cart-count">2</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-cart-products">
                            <div class="product">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="product">Beige knitted elastic runner shoes</a>
                                    </h4>

                                    <span class="cart-product-info">
                                        <span class="cart-product-qty">1</span>
                                        x $84.00
                                    </span>
                                </div><!-- End .product-cart-details -->

                                <figure class="product-image-container">
                                    <a href="product" class="product-image">
                                        <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                    </a>
                                </figure>
                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                            </div><!-- End .product -->

                            <div class="product">
                                <div class="product-cart-details">
                                    <h4 class="product-title">
                                        <a href="product">Blue utility pinafore denim dress</a>
                                    </h4>

                                    <span class="cart-product-info">
                                        <span class="cart-product-qty">1</span>
                                        x $76.00
                                    </span>
                                </div><!-- End .product-cart-details -->

                                <figure class="product-image-container">
                                    <a href="product" class="product-image">
                                        <img src="assets/images/products/cart/product-2.jpg" alt="product">
                                    </a>
                                </figure>
                                <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                            </div><!-- End .product -->
                        </div><!-- End .cart-product -->

                        <div class="dropdown-cart-total">
                            <span>Total</span>

                            <span class="cart-total-price">$160.00</span>
                        </div><!-- End .dropdown-cart-total -->

                        <div class="dropdown-cart-action">
                            <a href="cart" class="btn btn-primary">View Cart</a>
                            <a href="checkout" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .dropdown-cart-total -->
                    </div><!-- End .dropdown-menu -->
                </div><!-- End .cart-dropdown -->
            </div><!-- End .header-right -->
        </div><!-- End .container -->
    </div><!-- End .header-middle -->
</header><!-- End .header -->