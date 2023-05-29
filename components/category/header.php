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
    <meta name="apple-mobile-web-app-title" content="Molla">
    <meta name="application-name" content="Molla">
    <meta name="msapplication-TileColor" content="#cc9966">
    <meta name="msapplication-config" content="assets/images/icons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup/magnific-popup.css">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/plugins/nouislider/nouislider.css">
    <link rel="stylesheet" href="assets/css/skins/skin-demo-13.css">
    <link rel="stylesheet" href="assets/css/demos/demo-13.css">
</head>

<body>
    <div class="page-wrapper">
        <header class="header header-10">
            <div class="header-top">
                <div class="container">
                    <div class="header-left">
                        <ul class="top-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li><a href="tel:#"><i class="icon-phone"></i>Call: +0123 456 789</a></li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->
                    </div><!-- End .header-left -->

                    <div class="header-right">
                        <ul class="top-menu top-link-menu">
                            <li>
                                <a href="#">Links</a>
                                <ul>
                                    <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
                                    <li class="d-none d-md-block"><a href="about">About Us</a></li>
                                    <li class="d-none d-md-block"><a href="contact">Contact Us</a></li>
                                </ul>
                            </li>
                        </ul><!-- End .top-menu -->

                        <div class="header-dropdown">
                            <a href="#">USD</a>
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
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle">
                <div class="container">
                    <div class="header-left">
                        <button class="mobile-menu-toggler">
                            <span class="sr-only">Toggle mobile menu</span>
                            <i class="icon-bars"></i>
                        </button>

                        <a href="./" class="logo">
                            <img src="assets/images/demos/demo-13/logo.png" alt="Molla Logo" width="110" height="25">
                        </a>
                    </div>

                    <div class="header-right">
                        <div class="header-search header-search-extended header-search-visible header-search-no-radius d-none d-lg-block">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper search-wrapper-wide">
                                    <div class="select-custom">
                                        <select id="cat" name="cat">
                                            <option value="">All Departments</option>
                                            <option value="1">Fashion</option>
                                            <option value="2">- Women</option>
                                            <option value="3">- Men</option>
                                            <option value="4">- Jewellery</option>
                                            <option value="5">- Kids Fashion</option>
                                            <option value="6">Electronics</option>
                                            <option value="7">- Smart TVs</option>
                                            <option value="8">- Cameras</option>
                                            <option value="9">- Games</option>
                                            <option value="10">Home &amp; Garden</option>
                                            <option value="11">Motors</option>
                                            <option value="12">- Cars and Trucks</option>
                                            <option value="15">- Boats</option>
                                            <option value="16">- Auto Tools &amp; Supplies</option>
                                        </select>
                                    </div><!-- End .select-custom -->
                                    <label for="q" class="sr-only">Search</label>
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search product ..." required>
                                    <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->

                        <a href="wishlist" class="wishlist-link">
                            <i class="icon-heart-o"></i>
                            <span class="wishlist-count">2</span>
                        </a>

                        <div class="dropdown cart-dropdown">
                            <a href="cart" class="dropdown-toggle">
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

            <div class="header-bottom sticky-header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="dropdown category-dropdown">
                                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Browse Categories">
                                    Browse Categories
                                </a>

                                <div class="dropdown-menu">
                                    <nav class="side-nav">
                                        <ul class="menu-vertical sf-arrows">
                                            <li class="megamenu-container">
                                                <a class="sf-with-ul" href="#">Electronics</a>

                                                <div class="megamenu">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-8">
                                                            <div class="menu-col">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="menu-title">Laptops & Computers</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Desktop Computers</a></li>
                                                                            <li><a href="#">Monitors</a></li>
                                                                            <li><a href="#">Laptops</a></li>
                                                                            <li><a href="#">iPad & Tablets</a></li>
                                                                            <li><a href="#">Hard Drives & Storage</a></li>
                                                                            <li><a href="#">Printers & Supplies</a></li>
                                                                            <li><a href="#">Computer Accessories</a></li>
                                                                        </ul>

                                                                        <div class="menu-title">TV & Video</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">TVs</a></li>
                                                                            <li><a href="#">Home Audio Speakers</a></li>
                                                                            <li><a href="#">Projectors</a></li>
                                                                            <li><a href="#">Media Streaming Devices</a></li>
                                                                        </ul>
                                                                    </div><!-- End .col-md-6 -->

                                                                    <div class="col-md-6">
                                                                        <div class="menu-title">Cell Phones</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Carrier Phones</a></li>
                                                                            <li><a href="#">Unlocked Phones</a></li>
                                                                            <li><a href="#">Phone & Cellphone Cases</a></li>
                                                                            <li><a href="#">Cellphone Chargers </a></li>
                                                                        </ul>

                                                                        <div class="menu-title">Digital Cameras</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Digital SLR Cameras</a></li>
                                                                            <li><a href="#">Sports & Action Cameras</a></li>
                                                                            <li><a href="#">Camcorders</a></li>
                                                                            <li><a href="#">Camera Lenses</a></li>
                                                                            <li><a href="#">Photo Printer</a></li>
                                                                            <li><a href="#">Digital Memory Cards</a></li>
                                                                            <li><a href="#">Camera Bags, Backpacks & Cases</a></li>
                                                                        </ul>
                                                                    </div><!-- End .col-md-6 -->
                                                                </div><!-- End .row -->
                                                            </div><!-- End .menu-col -->
                                                        </div><!-- End .col-md-8 -->

                                                        <div class="col-md-4">
                                                            <div class="banner banner-overlay">
                                                                <a href="category.html" class="banner banner-menu">
                                                                    <img src="assets/images/demos/demo-13/menu/banner-1.jpg" alt="Banner">
                                                                </a>
                                                            </div><!-- End .banner banner-overlay -->
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .megamenu -->
                                            </li>
                                            <li class="megamenu-container">
                                                <a class="sf-with-ul" href="#">Furniture</a>

                                                <div class="megamenu">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-8">
                                                            <div class="menu-col">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="menu-title">Bedroom</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Beds, Frames & Bases</a></li>
                                                                            <li><a href="#">Dressers</a></li>
                                                                            <li><a href="#">Nightstands</a></li>
                                                                            <li><a href="#">Kids' Beds & Headboards</a></li>
                                                                            <li><a href="#">Armoires</a></li>
                                                                        </ul>

                                                                        <div class="menu-title">Living Room</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Coffee Tables</a></li>
                                                                            <li><a href="#">Chairs</a></li>
                                                                            <li><a href="#">Tables</a></li>
                                                                            <li><a href="#">Futons & Sofa Beds</a></li>
                                                                            <li><a href="#">Cabinets & Chests</a></li>
                                                                        </ul>
                                                                    </div><!-- End .col-md-6 -->

                                                                    <div class="col-md-6">
                                                                        <div class="menu-title">Office</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Office Chairs</a></li>
                                                                            <li><a href="#">Desks</a></li>
                                                                            <li><a href="#">Bookcases</a></li>
                                                                            <li><a href="#">File Cabinets</a></li>
                                                                            <li><a href="#">Breakroom Tables</a></li>
                                                                        </ul>

                                                                        <div class="menu-title">Kitchen & Dining</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#">Dining Sets</a></li>
                                                                            <li><a href="#">Kitchen Storage Cabinets</a></li>
                                                                            <li><a href="#">Bakers Racks</a></li>
                                                                            <li><a href="#">Dining Chairs</a></li>
                                                                            <li><a href="#">Dining Room Tables</a></li>
                                                                            <li><a href="#">Bar Stools</a></li>
                                                                        </ul>
                                                                    </div><!-- End .col-md-6 -->
                                                                </div><!-- End .row -->
                                                            </div><!-- End .menu-col -->
                                                        </div><!-- End .col-md-8 -->

                                                        <div class="col-md-4">
                                                            <div class="banner banner-overlay">
                                                                <a href="category" class="banner banner-menu">
                                                                    <img src="assets/images/demos/demo-13/menu/banner-2.jpg" alt="Banner">
                                                                </a>
                                                            </div><!-- End .banner banner-overlay -->
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->
                                                </div><!-- End .megamenu -->
                                            </li>
                                            <li class="megamenu-container">
                                                <a class="sf-with-ul" href="#">Cooking</a>

                                                <div class="megamenu">
                                                    <div class="menu-col">
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="menu-title">Cookware</div><!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="#">Cookware Sets</a></li>
                                                                    <li><a href="#">Pans, Griddles & Woks</a></li>
                                                                    <li><a href="#">Pots</a></li>
                                                                    <li><a href="#">Skillets & Grill Pans</a></li>
                                                                    <li><a href="#">Kettles</a></li>
                                                                    <li><a href="#">Soup & Stockpots</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-4 -->

                                                            <div class="col-md-4">
                                                                <div class="menu-title">Dinnerware & Tabletop</div><!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="#">Plates</a></li>
                                                                    <li><a href="#">Cups & Mugs</a></li>
                                                                    <li><a href="#">Trays & Platters</a></li>
                                                                    <li><a href="#">Coffee & Tea Serving</a></li>
                                                                    <li><a href="#">Salt & Pepper Shaker</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-4 -->

                                                            <div class="col-md-4">
                                                                <div class="menu-title">Cooking Appliances</div><!-- End .menu-title -->
                                                                <ul>
                                                                    <li><a href="#">Microwaves</a></li>
                                                                    <li><a href="#">Coffee Makers</a></li>
                                                                    <li><a href="#">Mixers & Attachments</a></li>
                                                                    <li><a href="#">Slow Cookers</a></li>
                                                                    <li><a href="#">Air Fryers</a></li>
                                                                    <li><a href="#">Toasters & Ovens</a></li>
                                                                </ul>
                                                            </div><!-- End .col-md-4 -->
                                                        </div><!-- End .row -->

                                                        <div class="row menu-banners">
                                                            <div class="col-md-4">
                                                                <div class="banner">
                                                                    <a href="#">
                                                                        <img src="assets/images/demos/demo-13/menu/1.jpg" alt="image">
                                                                    </a>
                                                                </div><!-- End .banner -->
                                                            </div><!-- End .col-md-4 -->

                                                            <div class="col-md-4">
                                                                <div class="banner">
                                                                    <a href="#">
                                                                        <img src="assets/images/demos/demo-13/menu/2.jpg" alt="image">
                                                                    </a>
                                                                </div><!-- End .banner -->
                                                            </div><!-- End .col-md-4 -->

                                                            <div class="col-md-4">
                                                                <div class="banner">
                                                                    <a href="#">
                                                                        <img src="assets/images/demos/demo-13/menu/3.jpg" alt="image">
                                                                    </a>
                                                                </div><!-- End .banner -->
                                                            </div><!-- End .col-md-4 -->
                                                        </div><!-- End .row -->
                                                    </div><!-- End .menu-col -->
                                                </div><!-- End .megamenu -->
                                            </li>
                                            <li class="megamenu-container">
                                                <a class="sf-with-ul" href="#">Clothing</a>

                                                <div class="megamenu">
                                                    <div class="row no-gutters">
                                                        <div class="col-md-8">
                                                            <div class="menu-col">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="menu-title">Women</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#"><strong>New Arrivals</strong></a></li>
                                                                            <li><a href="#"><strong>Best Sellers</strong></a></li>
                                                                            <li><a href="#"><strong>Trending</strong></a></li>
                                                                            <li><a href="#">Clothing</a></li>
                                                                            <li><a href="#">Shoes</a></li>
                                                                            <li><a href="#">Bags</a></li>
                                                                            <li><a href="#">Accessories</a></li>
                                                                            <li><a href="#">Jewlery & Watches</a></li>
                                                                            <li><a href="#"><strong>Sale</strong></a></li>
                                                                        </ul>
                                                                    </div><!-- End .col-md-6 -->

                                                                    <div class="col-md-6">
                                                                        <div class="menu-title">Men</div><!-- End .menu-title -->
                                                                        <ul>
                                                                            <li><a href="#"><strong>New Arrivals</strong></a></li>
                                                                            <li><a href="#"><strong>Best Sellers</strong></a></li>
                                                                            <li><a href="#"><strong>Trending</strong></a></li>
                                                                            <li><a href="#">Clothing</a></li>
                                                                            <li><a href="#">Shoes</a></li>
                                                                            <li><a href="#">Bags</a></li>
                                                                            <li><a href="#">Accessories</a></li>
                                                                            <li><a href="#">Jewlery & Watches</a></li>
                                                                        </ul>
                                                                    </div><!-- End .col-md-6 -->
                                                                </div><!-- End .row -->
                                                            </div><!-- End .menu-col -->
                                                        </div><!-- End .col-md-8 -->

                                                        <div class="col-md-4">
                                                            <div class="banner banner-overlay">
                                                                <a href="category.html" class="banner banner-menu">
                                                                    <img src="assets/images/demos/demo-13/menu/banner-3.jpg" alt="Banner">
                                                                </a>
                                                            </div><!-- End .banner banner-overlay -->
                                                        </div><!-- End .col-md-4 -->
                                                    </div><!-- End .row -->

                                                    <div class="menu-col menu-brands">
                                                        <div class="row">
                                                            <div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="assets/images/brands/1.png" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="assets/images/brands/2.png" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="assets/images/brands/3.png" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="assets/images/brands/4.png" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="assets/images/brands/5.png" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->

                                                            <div class="col-lg-2">
                                                                <a href="#" class="brand">
                                                                    <img src="assets/images/brands/6.png" alt="Brand Name">
                                                                </a>
                                                            </div><!-- End .col-lg-2 -->
                                                        </div><!-- End .row -->
                                                    </div><!-- End .menu-brands -->
                                                </div><!-- End .megamenu -->
                                            </li>
                                            <li><a href="#">Home Appliances</a></li>
                                            <li><a href="#">Healthy & Beauty</a></li>
                                            <li><a href="#">Shoes & Boots</a></li>
                                            <li><a href="#">Travel & Outdoor</a></li>
                                            <li><a href="#">Smart Phones</a></li>
                                            <li><a href="#">TV & Audio</a></li>
                                            <li><a href="#">Gift Ideas</a></li>
                                        </ul><!-- End .menu-vertical -->
                                    </nav><!-- End .side-nav -->
                                </div><!-- End .dropdown-menu -->
                            </div><!-- End .category-dropdown -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-lg-9">
                            <nav class="main-nav">
                                <ul class="menu sf-arrows" style="justify-content: center;
    align-items: center; ">
                                    <li class="<?= pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME) == "./" ? "active" : null ?>">
                                        <a href="./">Home</a>
                                    </li>
                                    <li class="<?= pathinfo($_SERVER['PHP_SELF'], PATHINFO_FILENAME) == "category" ? "active" : null ?>">
                                        <a href="category">Shop</a>
                                    </li>
                                </ul><!-- End .menu -->
                            </nav><!-- End .main-nav -->
                        </div><!-- End .col-lg-9 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->