<?php
include_once("./db.php");
include_once("./components/about/header.php");
?>
<div class="page-wrapper">
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
                                <li><a href="wishlist.html"><i class="icon-heart-o"></i>Wishlist <span>(3)</span></a></li>
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="#signin-modal" data-toggle="modal"><i class="icon-user"></i>Login</a></li>
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
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="Molla Logo" width="105" height="25">
                    </a>

                    <nav class="main-nav">
                        <ul class="menu sf-arrows">
                            <li class="megamenu-container active">
                                <a href="index.html" class="sf-with-ul">Home</a>

                                <div class="megamenu demo">
                                    <div class="menu-col">
                                        <div class="menu-title">Choose your demo</div><!-- End .menu-title -->

                                        <div class="demo-list">
                                            <div class="demo-item">
                                                <a href="index-1.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/1.jpg);"></span>
                                                    <span class="demo-title">01 - furniture store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-2.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/2.jpg);"></span>
                                                    <span class="demo-title">02 - furniture store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-3.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/3.jpg);"></span>
                                                    <span class="demo-title">03 - electronic store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-4.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/4.jpg);"></span>
                                                    <span class="demo-title">04 - electronic store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-5.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/5.jpg);"></span>
                                                    <span class="demo-title">05 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-6.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/6.jpg);"></span>
                                                    <span class="demo-title">06 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-7.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/7.jpg);"></span>
                                                    <span class="demo-title">07 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-8.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/8.jpg);"></span>
                                                    <span class="demo-title">08 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-9.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/9.jpg);"></span>
                                                    <span class="demo-title">09 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item">
                                                <a href="index-10.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/10.jpg);"></span>
                                                    <span class="demo-title">10 - shoes store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-11.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/11.jpg);"></span>
                                                    <span class="demo-title">11 - furniture simple store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-12.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/12.jpg);"></span>
                                                    <span class="demo-title">12 - fashion simple store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-13.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/13.jpg);"></span>
                                                    <span class="demo-title">13 - market</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-14.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/14.jpg);"></span>
                                                    <span class="demo-title">14 - market fullwidth</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-15.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/15.jpg);"></span>
                                                    <span class="demo-title">15 - lookbook 1</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-16.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/16.jpg);"></span>
                                                    <span class="demo-title">16 - lookbook 2</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-17.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/17.jpg);"></span>
                                                    <span class="demo-title">17 - fashion store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-18.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/18.jpg);"></span>
                                                    <span class="demo-title">18 - fashion store (with sidebar)</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-19.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/19.jpg);"></span>
                                                    <span class="demo-title">19 - games store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-20.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/20.jpg);"></span>
                                                    <span class="demo-title">20 - book store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-21.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/21.jpg);"></span>
                                                    <span class="demo-title">21 - sport store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-22.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/22.jpg);"></span>
                                                    <span class="demo-title">22 - tools store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-23.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/23.jpg);"></span>
                                                    <span class="demo-title">23 - fashion left navigation store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                            <div class="demo-item hidden">
                                                <a href="index-24.html">
                                                    <span class="demo-bg" style="background-image: url(assets/images/menu/demos/24.jpg);"></span>
                                                    <span class="demo-title">24 - extreme sport store</span>
                                                </a>
                                            </div><!-- End .demo-item -->

                                        </div><!-- End .demo-list -->

                                        <div class="megamenu-action text-center">
                                            <a href="#" class="btn btn-outline-primary-2 view-all-demos"><span>View All Demos</span><i class="icon-long-arrow-right"></i></a>
                                        </div><!-- End .text-center -->
                                    </div><!-- End .menu-col -->
                                </div><!-- End .megamenu -->
                            </li>
                            <li>
                                <a href="category.html" class="sf-with-ul">Shop</a>

                                <div class="megamenu megamenu-md">
                                    <div class="row no-gutters">
                                        <div class="col-md-8">
                                            <div class="menu-col">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="menu-title">Shop with sidebar</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="category-list.html">Shop List</a></li>
                                                            <li><a href="category-2cols.html">Shop Grid 2 Columns</a></li>
                                                            <li><a href="category.html">Shop Grid 3 Columns</a></li>
                                                            <li><a href="category-4cols.html">Shop Grid 4 Columns</a></li>
                                                            <li><a href="category-market.html"><span>Shop Market<span class="tip tip-new">New</span></span></a></li>
                                                        </ul>

                                                        <div class="menu-title">Shop no sidebar</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="category-boxed.html"><span>Shop Boxed No Sidebar<span class="tip tip-hot">Hot</span></span></a></li>
                                                            <li><a href="category-fullwidth.html">Shop Fullwidth No Sidebar</a></li>
                                                        </ul>
                                                    </div><!-- End .col-md-6 -->

                                                    <div class="col-md-6">
                                                        <div class="menu-title">Product Category</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="product-category-boxed.html">Product Category Boxed</a></li>
                                                            <li><a href="product-category-fullwidth.html"><span>Product Category Fullwidth<span class="tip tip-new">New</span></span></a></li>
                                                        </ul>
                                                        <div class="menu-title">Shop Pages</div><!-- End .menu-title -->
                                                        <ul>
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="dashboard.html">My Account</a></li>
                                                            <li><a href="#">Lookbook</a></li>
                                                        </ul>
                                                    </div><!-- End .col-md-6 -->
                                                </div><!-- End .row -->
                                            </div><!-- End .menu-col -->
                                        </div><!-- End .col-md-8 -->

                                        <div class="col-md-4">
                                            <div class="banner banner-overlay">
                                                <a href="category.html" class="banner banner-menu">
                                                    <img src="assets/images/menu/banner-1.jpg" alt="Banner">

                                                    <div class="banner-content banner-content-top">
                                                        <div class="banner-title text-white">Last <br>Chance<br><span><strong>Sale</strong></span></div><!-- End .banner-title -->
                                                    </div><!-- End .banner-content -->
                                                </a>
                                            </div><!-- End .banner banner-overlay -->
                                        </div><!-- End .col-md-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .megamenu megamenu-md -->
                            </li>
                            <li>
                                <a href="product.html" class="sf-with-ul">Product</a>

                                <div class="megamenu megamenu-sm">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <div class="menu-col">
                                                <div class="menu-title">Product Details</div><!-- End .menu-title -->
                                                <ul>
                                                    <li><a href="product.html">Default</a></li>
                                                    <li><a href="product-centered.html">Centered</a></li>
                                                    <li><a href="product-extended.html"><span>Extended Info<span class="tip tip-new">New</span></span></a></li>
                                                    <li><a href="product-gallery.html">Gallery</a></li>
                                                    <li><a href="product-sticky.html">Sticky Info</a></li>
                                                    <li><a href="product-sidebar.html">Boxed With Sidebar</a></li>
                                                    <li><a href="product-fullwidth.html">Full Width</a></li>
                                                    <li><a href="product-masonry.html">Masonry Sticky Info</a></li>
                                                </ul>
                                            </div><!-- End .menu-col -->
                                        </div><!-- End .col-md-6 -->

                                        <div class="col-md-6">
                                            <div class="banner banner-overlay">
                                                <a href="category.html">
                                                    <img src="assets/images/menu/banner-2.jpg" alt="Banner">

                                                    <div class="banner-content banner-content-bottom">
                                                        <div class="banner-title text-white">New Trends<br><span><strong>spring 2019</strong></span></div><!-- End .banner-title -->
                                                    </div><!-- End .banner-content -->
                                                </a>
                                            </div><!-- End .banner -->
                                        </div><!-- End .col-md-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .megamenu megamenu-sm -->
                            </li>
                            <li>
                                <a href="#" class="sf-with-ul">Pages</a>

                                <ul>
                                    <li>
                                        <a href="about.html" class="sf-with-ul">About</a>

                                        <ul>
                                            <li><a href="about.html">About 01</a></li>
                                            <li><a href="about-2.html">About 02</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="contact.html" class="sf-with-ul">Contact</a>

                                        <ul>
                                            <li><a href="contact.html">Contact 01</a></li>
                                            <li><a href="contact-2.html">Contact 02</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="faq.html">FAQs</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="blog.html" class="sf-with-ul">Blog</a>

                                <ul>
                                    <li><a href="blog.html">Classic</a></li>
                                    <li><a href="blog-listing.html">Listing</a></li>
                                    <li>
                                        <a href="#">Grid</a>
                                        <ul>
                                            <li><a href="blog-grid-2cols.html">Grid 2 columns</a></li>
                                            <li><a href="blog-grid-3cols.html">Grid 3 columns</a></li>
                                            <li><a href="blog-grid-4cols.html">Grid 4 columns</a></li>
                                            <li><a href="blog-grid-sidebar.html">Grid sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Masonry</a>
                                        <ul>
                                            <li><a href="blog-masonry-2cols.html">Masonry 2 columns</a></li>
                                            <li><a href="blog-masonry-3cols.html">Masonry 3 columns</a></li>
                                            <li><a href="blog-masonry-4cols.html">Masonry 4 columns</a></li>
                                            <li><a href="blog-masonry-sidebar.html">Masonry sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Mask</a>
                                        <ul>
                                            <li><a href="blog-mask-grid.html">Blog mask grid</a></li>
                                            <li><a href="blog-mask-masonry.html">Blog mask masonry</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Single Post</a>
                                        <ul>
                                            <li><a href="single.html">Default with sidebar</a></li>
                                            <li><a href="single-fullwidth.html">Fullwidth no sidebar</a></li>
                                            <li><a href="single-fullwidth-sidebar.html">Fullwidth with sidebar</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="elements-list.html" class="sf-with-ul">Elements</a>

                                <ul>
                                    <li><a href="elements-products.html">Products</a></li>
                                    <li><a href="elements-typography.html">Typography</a></li>
                                    <li><a href="elements-titles.html">Titles</a></li>
                                    <li><a href="elements-banners.html">Banners</a></li>
                                    <li><a href="elements-product-category.html">Product Category</a></li>
                                    <li><a href="elements-video-banners.html">Video Banners</a></li>
                                    <li><a href="elements-buttons.html">Buttons</a></li>
                                    <li><a href="elements-accordions.html">Accordions</a></li>
                                    <li><a href="elements-tabs.html">Tabs</a></li>
                                    <li><a href="elements-testimonials.html">Testimonials</a></li>
                                    <li><a href="elements-blog-posts.html">Blog Posts</a></li>
                                    <li><a href="elements-portfolio.html">Portfolio</a></li>
                                    <li><a href="elements-cta.html">Call to Action</a></li>
                                    <li><a href="elements-icon-boxes.html">Icon Boxes</a></li>
                                </ul>
                            </li>
                        </ul><!-- End .menu -->
                    </nav><!-- End .main-nav -->
                </div><!-- End .header-left -->

                <div class="header-right">
                    <div class="header-search">
                        <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                        <form action="#" method="get">
                            <div class="header-search-wrapper">
                                <label for="q" class="sr-only">Search</label>
                                <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                            </div><!-- End .header-search-wrapper -->
                        </form>
                    </div><!-- End .header-search -->
                    <div class="dropdown compare-dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static" title="Compare Products" aria-label="Compare Products">
                            <i class="icon-random"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <ul class="compare-products">
                                <li class="compare-product">
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    <h4 class="compare-product-title"><a href="product.html">Blue Night Dress</a></h4>
                                </li>
                                <li class="compare-product">
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                    <h4 class="compare-product-title"><a href="product.html">White Long Skirt</a></h4>
                                </li>
                            </ul>

                            <div class="compare-actions">
                                <a href="#" class="action-link">Clear All</a>
                                <a href="#" class="btn btn-outline-primary-2"><span>Compare</span><i class="icon-long-arrow-right"></i></a>
                            </div>
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .compare-dropdown -->

                    <div class="dropdown cart-dropdown">
                        <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <i class="icon-shopping-cart"></i>
                            <span class="cart-count">2</span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-cart-products">
                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="product.html">Beige knitted elastic runner shoes</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span>
                                            x $84.00
                                        </span>
                                    </div><!-- End .product-cart-details -->

                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
                                            <img src="assets/images/products/cart/product-1.jpg" alt="product">
                                        </a>
                                    </figure>
                                    <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                                </div><!-- End .product -->

                                <div class="product">
                                    <div class="product-cart-details">
                                        <h4 class="product-title">
                                            <a href="product.html">Blue utility pinafore denim dress</a>
                                        </h4>

                                        <span class="cart-product-info">
                                            <span class="cart-product-qty">1</span>
                                            x $76.00
                                        </span>
                                    </div><!-- End .product-cart-details -->

                                    <figure class="product-image-container">
                                        <a href="product.html" class="product-image">
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
                                <a href="cart.html" class="btn btn-primary">View Cart</a>
                                <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                            </div><!-- End .dropdown-cart-total -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .cart-dropdown -->
                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-middle -->
    </header><!-- End .header -->

    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">About us</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About us 2</li>
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
                                <h3 class="icon-box-title">Made With Love</h3><!-- End .icon-box-title -->
                                <p>Pellentesque a diam sit amet mi ullamcorper <br>vehicula. Nullam quis massa sit amet <br>nibh viverra malesuada.</p>
                            </div><!-- End .icon-box-content -->
                        </div><!-- End .icon-box -->
                    </div><!-- End .col-lg-4 col-sm-6 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-2"></div><!-- End .mb-2 -->

            <?php include_once("./components/about/statistics.php"); ?>

            <?php include_once("./components/about/team.php"); ?>

            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="brands-text text-center mx-auto mb-6">
                            <h2 class="title">The world's premium design brands in one destination.</h2><!-- End .title -->
                            <p>Phasellus hendrerit. Pellentesque aliquet nibh nec urna. In nisi neque, aliquet vel, dapibus id, mattis vel, nis</p>
                        </div><!-- End .brands-text -->
                        <div class="brands-display">
                            <div class="row justify-content-center">
                                <div class="col-6 col-sm-4 col-md-3">
                                    <a href="#" class="brand">
                                        <img src="assets/images/brands/1.png" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-md-3 -->

                                <div class="col-6 col-sm-4 col-md-3">
                                    <a href="#" class="brand">
                                        <img src="assets/images/brands/2.png" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-md-3 -->

                                <div class="col-6 col-sm-4 col-md-3">
                                    <a href="#" class="brand">
                                        <img src="assets/images/brands/3.png" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-md-3 -->

                                <div class="col-6 col-sm-4 col-md-3">
                                    <a href="#" class="brand">
                                        <img src="assets/images/brands/7.png" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-md-3 -->

                                <div class="col-6 col-sm-4 col-md-3">
                                    <a href="#" class="brand">
                                        <img src="assets/images/brands/4.png" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-md-3 -->

                                <div class="col-6 col-sm-4 col-md-3">
                                    <a href="#" class="brand">
                                        <img src="assets/images/brands/5.png" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-md-3 -->

                                <div class="col-6 col-sm-4 col-md-3">
                                    <a href="#" class="brand">
                                        <img src="assets/images/brands/6.png" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-md-3 -->

                                <div class="col-6 col-sm-4 col-md-3">
                                    <a href="#" class="brand">
                                        <img src="assets/images/brands/9.png" alt="Brand Name">
                                    </a>
                                </div><!-- End .col-md-3 -->
                            </div><!-- End .row -->
                        </div><!-- End .brands-display -->
                    </div><!-- End .col-lg-10 offset-lg-1 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End .page-content -->
    </main><!-- End .main -->

    <?php
    include_once("./components/about/footer.php")
    ?>