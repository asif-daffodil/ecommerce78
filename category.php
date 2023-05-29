<?php
include_once("./components/category/header.php");
?>
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Electronics</li>
            </ol>
        </div>
    </nav>

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-xl-4-5col">
                    <div class="category-banners-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
                                    "nav": false,
                                    "responsive": {
                                        "768": {
                                            "nav": true
                                        }
                                    }
                                }'>
                        <div class="banner banner-poster">

                            <a href="#">
                                <img src="assets/images/demos/demo-13/banners/banner-7.jpg" alt="Banner">
                            </a>

                            <div class="banner-content banner-content-right">
                                <h3 class="banner-subtitle"><a href="#">Amazing Value</a></h3>
                                <h2 class="banner-title"><a href="#">High Performance 4K TVs</a></h2>
                                <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                            </div>
                        </div>

                        <div class="banner banner-poster">
                            <a href="#">
                                <img src="assets/images/demos/demo-13/banners/banner-8.jpg" alt="Banner">
                            </a>

                            <div class="banner-content">
                                <h3 class="banner-subtitle"><a href="#">Weekend Deal</a></h3>
                                <h2 class="banner-title"><a href="#">Apple & Accessories</a></h2>
                                <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3"></div>

                    <div class="owl-carousel owl-simple owl-nav-align" data-toggle="owl" data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 30,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "420": {
                                            "items":3
                                        },
                                        "600": {
                                            "items":4
                                        },
                                        "900": {
                                            "items":5
                                        },
                                        "1024": {
                                            "items":6,
                                            "nav": true, 
                                            "dots": false
                                        }
                                    }
                                }'>

                        <?php
                        $select = $conn->query("SELECT * FROM `brands`");
                        while ($data = $select->fetch_object()) {
                        ?>
                            <a href="javascript:void(0)" class="brand">
                                <img src="<?= $data->image_src ?>" alt="<?= $data->image_alt ?>">
                            </a>

                        <?php
                        }
                        ?>
                    </div>

                    <div class="mb-3 mb-lg-5"></div>

                    <div class="cat-blocks-container">
                        <div class="row">
                            <div class="col-6 col-md-4 col-lg-3">
                                <a href="category.html" class="cat-block">
                                    <figure>
                                        <span>
                                            <img src="assets/images/demos/demo-13/cats/cat-page/1.jpg" alt="Category image">
                                        </span>
                                    </figure>

                                    <h3 class="cat-block-title">Desktop Computers</h3>
                                </a>
                            </div>

                            <div class="col-6 col-md-4 col-lg-3">
                                <a href="category.html" class="cat-block">
                                    <figure>
                                        <span>
                                            <img src="assets/images/demos/demo-13/cats/cat-page/2.jpg" alt="Category image">
                                        </span>
                                    </figure>

                                    <h3 class="cat-block-title">Monitors</h3>
                                </a>
                            </div>

                            <div class="col-6 col-md-4 col-lg-3">
                                <a href="category.html" class="cat-block">
                                    <figure>
                                        <span>
                                            <img src="assets/images/demos/demo-13/cats/cat-page/3.jpg" alt="Category image">
                                        </span>
                                    </figure>

                                    <h3 class="cat-block-title">Laptops</h3>
                                </a>
                            </div>

                            <div class="col-6 col-md-4 col-lg-3">
                                <a href="category.html" class="cat-block">
                                    <figure>
                                        <span>
                                            <img src="assets/images/demos/demo-13/cats/cat-page/4.jpg" alt="Category image">
                                        </span>
                                    </figure>

                                    <h3 class="cat-block-title">iPads & Tablets</h3>
                                </a>
                            </div>

                            <div class="col-6 col-md-4 col-lg-3">
                                <a href="category.html" class="cat-block">
                                    <figure>
                                        <span>
                                            <img src="assets/images/demos/demo-13/cats/cat-page/5.jpg" alt="Category image">
                                        </span>
                                    </figure>

                                    <h3 class="cat-block-title">Hard Drives & Storage</h3>
                                </a>
                            </div>

                            <div class="col-6 col-md-4 col-lg-3">
                                <a href="category.html" class="cat-block">
                                    <figure>
                                        <span>
                                            <img src="assets/images/demos/demo-13/cats/cat-page/6.jpg" alt="Category image">
                                        </span>
                                    </figure>

                                    <h3 class="cat-block-title">Printers & Supplies</h3>
                                </a>
                            </div>

                            <div class="col-6 col-md-4 col-lg-3">
                                <a href="category.html" class="cat-block">
                                    <figure>
                                        <span>
                                            <img src="assets/images/demos/demo-13/cats/cat-page/7.jpg" alt="Category image">
                                        </span>
                                    </figure>

                                    <h3 class="cat-block-title">Computer Accessories</h3>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mb-2"></div>

                    <h2 class="title title-border">Featured Items</h2>

                    <div class="owl-carousel owl-simple owl-nav-top carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                    "nav": true, 
                                    "dots": false,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":2
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "1200": {
                                            "items":4
                                        }
                                    }
                                }'>
                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-top">Top</span>
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-13/products/product-7.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div>

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                </div>
                            </figure>

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Laptops</a>
                                </div>
                                <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3>
                                <div class="product-price">
                                    $1,199.00
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 100%;"></div>
                                    </div>
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div>
                            </div>
                        </div>

                        <div class="product">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-13/products/product-8.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div>

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                </div>
                            </figure>

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Audio</a>
                                </div>
                                <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth Speaker</a></h3>
                                <div class="product-price">
                                    $79.99
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 60%;"></div>
                                    </div>
                                    <span class="ratings-text">( 6 Reviews )</span>
                                </div>
                            </div>
                        </div>

                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-new">New</span>
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-13/products/product-9.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div>

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                </div>
                            </figure>

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Tablets</a>
                                </div>
                                <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro with Wi-Fi 256GB </a></h3>
                                <div class="product-price">
                                    $899.99
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div>
                                    </div>
                                    <span class="ratings-text">( 4 Reviews )</span>
                                </div>

                                <div class="product-nav product-nav-dots">
                                    <a href="#" class="active" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-sale">Sale</span>
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-13/products/product-10.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div>

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                </div>
                            </figure>

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Cell Phone</a>
                                </div>
                                <h3 class="product-title"><a href="product.html">Google - Pixel 3 XL 128GB</a></h3>
                                <div class="product-price">
                                    $899.99
                                    <span class="new-price">$350.00</span>
                                    <span class="old-price">Was $410.00</span>
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div>
                                    </div>
                                    <span class="ratings-text">( 10 Reviews )</span>
                                </div>
                            </div>
                        </div>

                        <div class="product">
                            <figure class="product-media">
                                <span class="product-label label-new">New</span>
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-13/products/product-6.jpg" alt="Product image" class="product-image">
                                </a>

                                <div class="product-action-vertical">
                                    <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                    <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                </div>

                                <div class="product-action">
                                    <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                </div>
                            </figure>

                            <div class="product-body">
                                <div class="product-cat">
                                    <a href="#">Appliances</a>
                                </div>
                                <h3 class="product-title"><a href="product.html">Neato Robotics</a></h3>
                                <div class="product-price">
                                    $399.00
                                </div>
                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div class="ratings-val" style="width: 80%;"></div>
                                    </div>
                                    <span class="ratings-text">( 12 Reviews )</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-4"></div>

                    <div class="toolbox">
                        <div class="toolbox-left">
                            <div class="toolbox-info">
                                10 Products found
                            </div>
                        </div>

                        <div class="toolbox-right">
                            <div class="toolbox-sort">
                                <label for="sortby">Sort by:</label>
                                <div class="select-custom">
                                    <select name="sortby" id="sortby" class="form-control">
                                        <option value="popularity" selected="selected">Most Popular</option>
                                        <option value="rating">Most Rated</option>
                                        <option value="date">Date</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="products mb-3">
                        <div class="row">
                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-media">
                                        <span class="product-label label-new">New</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-13/products/product-6.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Appliances</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Neato Robotics</a></h3>
                                        <div class="product-price">
                                            $399.00
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div>
                                            </div>
                                            <span class="ratings-text">( 12 Reviews )</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-media">
                                        <span class="product-label label-top">Top</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-13/products/product-7.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Laptops</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3>
                                        <div class="product-price">
                                            $1,199.00
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div>
                                            </div>
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-13/products/product-8.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Audio</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Bose - SoundLink Bluetooth Speaker</a></h3>
                                        <div class="product-price">
                                            $79.99
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div>
                                            </div>
                                            <span class="ratings-text">( 6 Reviews )</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-media">
                                        <span class="product-label label-new">New</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-13/products/product-9.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Tablets</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Apple - 11 Inch iPad Pro with Wi-Fi 256GB </a></h3>
                                        <div class="product-price">
                                            $899.99
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div>
                                            </div>
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div>

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #edd2c8;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-media">
                                        <span class="product-label label-sale">Sale</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-13/products/product-10.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Cell Phone</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Google - Pixel 3 XL 128GB</a></h3>
                                        <div class="product-price">
                                            $899.99
                                            <span class="new-price">$350.00</span>
                                            <span class="old-price">Was $410.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div>
                                            </div>
                                            <span class="ratings-text">( 10 Reviews )</span>
                                        </div>

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #eaeaec;"><span class="sr-only">Color name</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-media">
                                        <span class="product-label label-new">New</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-13/products/product-11.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Tables</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Block Side Table/Trolley</a></h3>
                                        <div class="product-price">
                                            $229.00
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div>
                                            </div>
                                            <span class="ratings-text">( 12 Reviews )</span>
                                        </div>

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #e2e2e2;"><span class="sr-only">Color name</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-13/products/product-12.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Sofas</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Roots Sofa Bed</a></h3>
                                        <div class="product-price">
                                            $1,199.99
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div>
                                            </div>
                                            <span class="ratings-text">( 4 Reviews )</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 col-md-4 col-xl-3">
                                <div class="product">
                                    <figure class="product-media">
                                        <span class="product-label label-sale">Sale</span>
                                        <a href="product.html">
                                            <img src="assets/images/demos/demo-13/products/product-13.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                        </div>

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                        </div>
                                    </figure>

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Lighting</a>
                                        </div>
                                        <h3 class="product-title"><a href="product.html">Carronade Large Suspension Lamp</a></h3>
                                        <div class="product-price">
                                            <span class="new-price">$892.00</span>
                                            <span class="old-price">Was $939.00</span>
                                        </div>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 60%;"></div>
                                            </div>
                                            <span class="ratings-text">( 6 Reviews )</span>
                                        </div>

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #dddad5;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #825a45;"><span class="sr-only">Color name</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item disabled">
                                <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1" aria-disabled="true">
                                    <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
                                </a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item-total">of 2</li>
                            <li class="page-item">
                                <a class="page-link page-link-next" href="#" aria-label="Next">
                                    Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <aside class="col-lg-3 col-xl-5col order-lg-first">
                    <div class="sidebar sidebar-shop">
                        <div class="widget widget-categories">
                            <h3 class="widget-title">Electronics</h3>

                            <div class="widget-body">
                                <div class="accordion" id="widget-cat-acc">
                                    <div class="acc-item">
                                        <h5>
                                            <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                                                Laptops & Computers
                                            </a>
                                        </h5>
                                        <div id="collapse-1" class="collapse show" data-parent="#widget-cat-acc">
                                            <div class="collapse-wrap">
                                                <ul>
                                                    <li><a href="#">Desktop Computers</a></li>
                                                    <li><a href="#">Monitors</a></li>
                                                    <li><a href="#">Laptops</a></li>
                                                    <li><a href="#">iPad & Tablets</a></li>
                                                    <li><a href="#">Hard Drives & Storage</a></li>
                                                    <li><a href="#">Printers & Supplies</a></li>
                                                    <li><a href="#">Computer Accessories</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="acc-item">
                                        <h5>
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                                TV & Video
                                            </a>
                                        </h5>
                                        <div id="collapse-2" class="collapse" data-parent="#widget-cat-acc">
                                            <div class="collapse-wrap">
                                                <ul>
                                                    <li><a href="#">AV Receivers & Amplifiers</a></li>
                                                    <li><a href="#">Blu-ray Players & Recorders</a></li>
                                                    <li><a href="#">DVD Players & Recorders</a></li>
                                                    <li><a href="#">HD DVD Players</a></li>
                                                    <li><a href="#">Home Theater Systems</a></li>
                                                    <li><a href="#">Projection Screens</a></li>
                                                    <li><a href="#">Projectors</a></li>
                                                    <li><a href="#">Satellite Television</a></li>
                                                    <li><a href="#">Televisions</a></li>
                                                    <li><a href="#">TV-DVD Combos</a></li>
                                                    <li><a href="#">Streaming Media Players</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="acc-item">
                                        <h5>
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                                Cell Phone
                                            </a>
                                        </h5>
                                        <div id="collapse-3" class="collapse" data-parent="#widget-cat-acc">
                                            <div class="collapse-wrap">
                                                <ul>
                                                    <li><a href="#">Carrier Cell Phones</a></li>
                                                    <li><a href="#">Unlocked Cell Phones</a></li>
                                                    <li><a href="#">Mobile Broadband</a></li>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">Cases, Holsters & Clips</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="acc-item">
                                        <h5>
                                            <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                                Digital Cameras
                                            </a>
                                        </h5>
                                        <div id="collapse-4" class="collapse" data-parent="#widget-cat-acc">
                                            <div class="collapse-wrap">
                                                <ul>
                                                    <li><a href="#">Accessories</a></li>
                                                    <li><a href="#">Bags & Cases</a></li>
                                                    <li><a href="#">Binoculars & Scopes</a></li>
                                                    <li><a href="#">Film Photography</a></li>
                                                    <li><a href="#">Flashes</a></li>
                                                    <li><a href="#">Lenses</a></li>
                                                    <li><a href="#">Lighting & Studio</a></li>
                                                    <li><a href="#">Tripods & Monopods</a></li>
                                                    <li><a href="#">Underwater Photography</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget">
                            <h3 class="widget-title">Brands</h3>

                            <div class="widget-body">
                                <div class="filter-items">
                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="brand-1">
                                            <label class="custom-control-label" for="brand-1">Next</label>
                                        </div>
                                    </div>

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="brand-2">
                                            <label class="custom-control-label" for="brand-2">River Island</label>
                                        </div>
                                    </div>

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="brand-3">
                                            <label class="custom-control-label" for="brand-3">Geox</label>
                                        </div>
                                    </div>

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="brand-4">
                                            <label class="custom-control-label" for="brand-4">New Balance</label>
                                        </div>
                                    </div>

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="brand-5">
                                            <label class="custom-control-label" for="brand-5">UGG</label>
                                        </div>
                                    </div>

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="brand-6">
                                            <label class="custom-control-label" for="brand-6">F&F</label>
                                        </div>
                                    </div>

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="brand-7">
                                            <label class="custom-control-label" for="brand-7">Nike</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="widget">
                            <h3 class="widget-title">Price</h3>

                            <div class="widget-body">
                                <div class="filter-items">
                                    <div class="filter-item">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="price-1" name="filter-price">
                                            <label class="custom-control-label" for="price-1">Under $25</label>
                                        </div>
                                    </div>

                                    <div class="filter-item">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="price-2" name="filter-price">
                                            <label class="custom-control-label" for="price-2">$25 to $50</label>
                                        </div>
                                    </div>

                                    <div class="filter-item">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="price-3" name="filter-price">
                                            <label class="custom-control-label" for="price-3">$50 to $100</label>
                                        </div>
                                    </div>

                                    <div class="filter-item">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="price-4" name="filter-price">
                                            <label class="custom-control-label" for="price-4">$100 to $200</label>
                                        </div>
                                    </div>

                                    <div class="filter-item">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="price-5" name="filter-price">
                                            <label class="custom-control-label" for="price-5">$200 & Above</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="widget">
                            <h3 class="widget-title">Customer Rating</h3>

                            <div class="widget-body">
                                <div class="filter-items">
                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cus-rating-1">
                                            <label class="custom-control-label" for="cus-rating-1">
                                                <span class="ratings-container">
                                                    <span class="ratings">
                                                        <span class="ratings-val" style="width: 100%;"></span>
                                                    </span>
                                                    <span class="ratings-text">( 24 )</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cus-rating-2">
                                            <label class="custom-control-label" for="cus-rating-2">
                                                <span class="ratings-container">
                                                    <span class="ratings">
                                                        <span class="ratings-val" style="width: 80%;"></span>
                                                    </span>
                                                    <span class="ratings-text">( 8 )</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cus-rating-3">
                                            <label class="custom-control-label" for="cus-rating-3">
                                                <span class="ratings-container">
                                                    <span class="ratings">
                                                        <span class="ratings-val" style="width: 60%;"></span>
                                                    </span>
                                                    <span class="ratings-text">( 5 )</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cus-rating-4">
                                            <label class="custom-control-label" for="cus-rating-4">
                                                <span class="ratings-container">
                                                    <span class="ratings">
                                                        <span class="ratings-val" style="width: 40%;"></span>
                                                    </span>
                                                    <span class="ratings-text">( 1 )</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="filter-item">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="cus-rating-5">
                                            <label class="custom-control-label" for="cus-rating-5">
                                                <span class="ratings-container">
                                                    <span class="ratings">
                                                        <span class="ratings-val" style="width: 20%;"></span>
                                                    </span>
                                                    <span class="ratings-text">( 3 )</span>
                                                </span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="widget">
                            <h3 class="widget-title">Colour</h3>

                            <div class="widget-body">
                                <div class="filter-colors">
                                    <a href="#" style="background: #b87145;"><span class="sr-only">Color Name</span></a>
                                    <a href="#" style="background: #f0c04a;"><span class="sr-only">Color Name</span></a>
                                    <a href="#" style="background: #333333;"><span class="sr-only">Color Name</span></a>
                                    <a href="#" class="selected" style="background: #cc3333;"><span class="sr-only">Color Name</span></a>
                                    <a href="#" style="background: #3399cc;"><span class="sr-only">Color Name</span></a>
                                    <a href="#" style="background: #669933;"><span class="sr-only">Color Name</span></a>
                                    <a href="#" style="background: #f2719c;"><span class="sr-only">Color Name</span></a>
                                    <a href="#" style="background: #ebebeb;"><span class="sr-only">Color Name</span></a>
                                </div>
                            </div>
                        </div>

                        <div class="widget widget-banner-sidebar">
                            <div class="banner-sidebar-title">ad banner 218 x 430px</div>

                            <div class="banner-sidebar banner-overlay">
                                <a href="#">
                                    <img src="assets/images/demos/demo-13/banners/banner-6.jpg" alt="banner">
                                </a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <div class="cta cta-horizontal cta-horizontal-box bg-primary">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <h3 class="cta-title text-white">Join Our Newsletter</h3>
                    <p class="cta-desc text-white">Subcribe to get information about products and coupons</p>
                </div>

                <div class="col-lg-7">
                    <form action="#">
                        <div class="input-group">
                            <input type="email" class="form-control form-control-white" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                            <div class="input-group-append">
                                <button class="btn btn-outline-white-2" type="submit"><span>Subscribe</span><i class="icon-long-arrow-right"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<?php

include_once("./components/category/footer.php");
?>