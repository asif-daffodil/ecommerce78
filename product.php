<?php

// redirect to the home page ....😁😁
(!isset($_GET['id']) || $_GET['id'] == "" || $_GET['id'] <= 0 || !is_numeric($_GET['id'])) ? header("location: ./") : null;
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
</head>

<body>
    <div class="page-wrapper">
        <?php
        include_once("./components/commonHF/header.php");
        ?>
        <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container d-flex align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Products</a></li>
                        <li class="breadcrumb-item active" aria-current="page">With Sidebar</li>
                    </ol>

                    <nav class="product-pager ml-auto" aria-label="Product">
                        <a class="product-pager-link product-pager-prev" href="#" aria-label="Previous" tabindex="-1">
                            <i class="icon-angle-left"></i>
                            <span>Prev</span>
                        </a>

                        <a class="product-pager-link product-pager-next" href="#" aria-label="Next" tabindex="-1">
                            <span>Next</span>
                            <i class="icon-angle-right"></i>
                        </a>
                    </nav><!-- End .pager-nav -->
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="product-details-top">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="product-gallery">
                                            <figure class="product-main-image">
                                                <span class="product-label label-top">Top</span>
                                                <img id="product-zoom" src="assets/images/products/single/sidebar-gallery/1.jpg" data-zoom-image="assets/images/products/single/sidebar-gallery/1-big.jpg" alt="product image">

                                                <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                                    <i class="icon-arrows"></i>
                                                </a>
                                            </figure><!-- End .product-main-image -->

                                            <div id="product-zoom-gallery" class="product-image-gallery">
                                                <a class="product-gallery-item active" href="#" data-image="assets/images/products/single/sidebar-gallery/1.jpg" data-zoom-image="assets/images/products/single/sidebar-gallery/1-big.jpg">
                                                    <img src="assets/images/products/single/sidebar-gallery/1-small.jpg" alt="product side">
                                                </a>

                                                <a class="product-gallery-item" href="#" data-image="assets/images/products/single/sidebar-gallery/2.jpg" data-zoom-image="assets/images/products/single/sidebar-gallery/2-big.jpg">
                                                    <img src="assets/images/products/single/sidebar-gallery/2-small.jpg" alt="product cross">
                                                </a>

                                                <a class="product-gallery-item" href="#" data-image="assets/images/products/single/sidebar-gallery/3.jpg" data-zoom-image="assets/images/products/single/sidebar-gallery/3-big.jpg">
                                                    <img src="assets/images/products/single/sidebar-gallery/3-small.jpg" alt="product with model">
                                                </a>

                                                <a class="product-gallery-item" href="#" data-image="assets/images/products/single/sidebar-gallery/4.jpg" data-zoom-image="assets/images/products/single/sidebar-gallery/4-big.jpg">
                                                    <img src="assets/images/products/single/sidebar-gallery/4-small.jpg" alt="product back">
                                                </a>
                                            </div><!-- End .product-image-gallery -->
                                        </div><!-- End .product-gallery -->
                                    </div><!-- End .col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="product-details product-details-sidebar">
                                            <h1 class="product-title">Black faux leather chain trim sandals</h1><!-- End .product-title -->

                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                </div><!-- End .ratings -->
                                                <a class="ratings-text" href="#product-review-link" id="review-link">( 2 Reviews )</a>
                                            </div><!-- End .rating-container -->

                                            <div class="product-price">
                                                $90.00
                                            </div><!-- End .product-price -->

                                            <div class="product-content">
                                                <p>Sed egestas, ante et vulputate volutpat, eros semper est, vitae luctus metus libero eu augue.</p>
                                            </div><!-- End .product-content -->

                                            <div class="details-filter-row details-row-size">
                                                <label>Color:</label>

                                                <div class="product-nav product-nav-dots">
                                                    <a href="#" class="active" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                                    <a href="#" style="background: #efe7db;"><span class="sr-only">Color name</span></a>
                                                </div><!-- End .product-nav -->
                                            </div><!-- End .details-filter-row -->

                                            <div class="details-filter-row details-row-size">
                                                <label for="size">Size:</label>
                                                <div class="select-custom">
                                                    <select name="size" id="size" class="form-control">
                                                        <option value="#" selected="selected">Select a size</option>
                                                        <option value="s">Small</option>
                                                        <option value="m">Medium</option>
                                                        <option value="l">Large</option>
                                                        <option value="xl">Extra Large</option>
                                                    </select>
                                                </div><!-- End .select-custom -->

                                                <a href="#" class="size-guide"><i class="icon-th-list"></i>size guide</a>
                                            </div><!-- End .details-filter-row -->

                                            <div class="product-details-action">
                                                <div class="details-action-col">
                                                    <label for="qty">Qty:</label>
                                                    <div class="product-details-quantity">
                                                        <input type="number" id="qty" class="form-control" value="1" min="1" max="10" step="1" data-decimals="0" required>
                                                    </div><!-- End .product-details-quantity -->

                                                    <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                                </div><!-- End .details-action-col -->

                                                <div class="details-action-wrapper">
                                                    <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                                                    <a href="#" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a>
                                                </div><!-- End .details-action-wrapper -->
                                            </div><!-- End .product-details-action -->

                                            <div class="product-details-footer details-footer-col">
                                                <div class="product-cat">
                                                    <span>Category:</span>
                                                    <a href="#">Women</a>,
                                                    <a href="#">Dresses</a>,
                                                    <a href="#">Yellow</a>
                                                </div><!-- End .product-cat -->

                                                <div class="social-icons social-icons-sm">
                                                    <span class="social-label">Share:</span>
                                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                                    <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                                </div>
                                            </div><!-- End .product-details-footer -->
                                        </div><!-- End .product-details -->
                                    </div><!-- End .col-md-6 -->
                                </div><!-- End .row -->
                            </div><!-- End .product-details-top -->

                            <div class="product-details-tab">
                                <ul class="nav nav-pills justify-content-center" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Shipping & Returns</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (2)</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                                        <div class="product-desc-content">
                                            <h3>Product Information</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>
                                            <ul>
                                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>
                                                <li>Vivamus finibus vel mauris ut vehicula.</li>
                                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>
                                            </ul>

                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>
                                        </div><!-- End .product-desc-content -->
                                    </div><!-- .End .tab-pane -->
                                    <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                                        <div class="product-desc-content">
                                            <h3>Information</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>

                                            <h3>Fabric & care</h3>
                                            <ul>
                                                <li>Faux suede fabric</li>
                                                <li>Gold tone metal hoop handles.</li>
                                                <li>RI branding</li>
                                                <li>Snake print trim interior </li>
                                                <li>Adjustable cross body strap</li>
                                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>
                                            </ul>

                                            <h3>Size</h3>
                                            <p>one size</p>
                                        </div><!-- End .product-desc-content -->
                                    </div><!-- .End .tab-pane -->
                                    <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
                                        <div class="product-desc-content">
                                            <h3>Delivery & returns</h3>
                                            <p>We deliver to over 100 countries around the world. For full details of the delivery options we offer, please view our <a href="#">Delivery information</a><br>
                                                We hope you’ll love every purchase, but if you ever need to return an item you can do so within a month of receipt. For full details of how to make a return, please view our <a href="#">Returns information</a></p>
                                        </div><!-- End .product-desc-content -->
                                    </div><!-- .End .tab-pane -->
                                    <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                                        <div class="reviews">
                                            <h3>Reviews (2)</h3>
                                            <div class="review">
                                                <div class="row no-gutters">
                                                    <div class="col-auto">
                                                        <h4><a href="#">Samanta J.</a></h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .rating-container -->
                                                        <span class="review-date">6 days ago</span>
                                                    </div><!-- End .col -->
                                                    <div class="col">
                                                        <h4>Good, perfect size</h4>

                                                        <div class="review-content">
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cum dolores assumenda asperiores facilis porro reprehenderit animi culpa atque blanditiis commodi perspiciatis doloremque, possimus, explicabo, autem fugit beatae quae voluptas!</p>
                                                        </div><!-- End .review-content -->

                                                        <div class="review-action">
                                                            <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                                            <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                                        </div><!-- End .review-action -->
                                                    </div><!-- End .col-auto -->
                                                </div><!-- End .row -->
                                            </div><!-- End .review -->

                                            <div class="review">
                                                <div class="row no-gutters">
                                                    <div class="col-auto">
                                                        <h4><a href="#">John Doe</a></h4>
                                                        <div class="ratings-container">
                                                            <div class="ratings">
                                                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                                            </div><!-- End .ratings -->
                                                        </div><!-- End .rating-container -->
                                                        <span class="review-date">5 days ago</span>
                                                    </div><!-- End .col -->
                                                    <div class="col">
                                                        <h4>Very good</h4>

                                                        <div class="review-content">
                                                            <p>Sed, molestias, tempore? Ex dolor esse iure hic veniam laborum blanditiis laudantium iste amet. Cum non voluptate eos enim, ab cumque nam, modi, quas iure illum repellendus, blanditiis perspiciatis beatae!</p>
                                                        </div><!-- End .review-content -->

                                                        <div class="review-action">
                                                            <a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>
                                                            <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                                        </div><!-- End .review-action -->
                                                    </div><!-- End .col-auto -->
                                                </div><!-- End .row -->
                                            </div><!-- End .review -->
                                        </div><!-- End .reviews -->
                                    </div><!-- .End .tab-pane -->
                                </div><!-- End .tab-content -->
                            </div><!-- End .product-details-tab -->

                            <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->
                            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                    "nav": false, 
                                    "dots": true,
                                    "margin": 20,
                                    "loop": false,
                                    "responsive": {
                                        "0": {
                                            "items":1
                                        },
                                        "480": {
                                            "items":2
                                        },
                                        "768": {
                                            "items":3
                                        },
                                        "992": {
                                            "items":4
                                        },
                                        "1200": {
                                            "items":4,
                                            "nav": true,
                                            "dots": false
                                        }
                                    }
                                }'>
                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-new">New</span>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-4.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Women</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Brown paperbag waist pencil skirt</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $60.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 2 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #cc9966;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #7fc5ed;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #e8c97a;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-out">Out of Stock</span>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-6.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Jackets</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Khaki utility boiler jumpsuit</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            <span class="out-price">$120.00</span>
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 6 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <span class="product-label label-top">Top</span>
                                        <a href="product.html">
                                            <img src="assets/images/products/product-11.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Shoes</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Light brown studded Wide fit wedges</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $110.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 1 Reviews )</span>
                                        </div><!-- End .rating-container -->

                                        <div class="product-nav product-nav-dots">
                                            <a href="#" class="active" style="background: #8b513d;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                                            <a href="#" style="background: #d2b99a;"><span class="sr-only">Color name</span></a>
                                        </div><!-- End .product-nav -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->

                                <div class="product product-7 text-center">
                                    <figure class="product-media">
                                        <a href="product.html">
                                            <img src="assets/images/products/product-10.jpg" alt="Product image" class="product-image">
                                        </a>

                                        <div class="product-action-vertical">
                                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                        </div><!-- End .product-action-vertical -->

                                        <div class="product-action">
                                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                        </div><!-- End .product-action -->
                                    </figure><!-- End .product-media -->

                                    <div class="product-body">
                                        <div class="product-cat">
                                            <a href="#">Jumpers</a>
                                        </div><!-- End .product-cat -->
                                        <h3 class="product-title"><a href="product.html">Yellow button front tea top</a></h3><!-- End .product-title -->
                                        <div class="product-price">
                                            $56.00
                                        </div><!-- End .product-price -->
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                            <span class="ratings-text">( 0 Reviews )</span>
                                        </div><!-- End .rating-container -->
                                    </div><!-- End .product-body -->
                                </div><!-- End .product -->
                            </div><!-- End .owl-carousel -->
                        </div><!-- End .col-lg-9 -->

                        <aside class="col-lg-3">
                            <div class="sidebar sidebar-product">
                                <div class="widget widget-products">
                                    <h4 class="widget-title">Related Product</h4><!-- End .widget-title -->

                                    <div class="products">
                                        <div class="product product-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="assets/images/products/single/sidebar/1.jpg" alt="Product image" class="product-image">
                                                </a>
                                            </figure>

                                            <div class="product-body">
                                                <h5 class="product-title"><a href="product.html">Light brown studded Wide fit wedges</a></h5><!-- End .product-title -->
                                                <div class="product-price">
                                                    <span class="new-price">$50.00</span>
                                                    <span class="old-price">$110.00</span>
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product product-sm -->

                                        <div class="product product-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="assets/images/products/single/sidebar/2.jpg" alt="Product image" class="product-image">
                                                </a>
                                            </figure>

                                            <div class="product-body">
                                                <h5 class="product-title"><a href="product.html">Yellow button front tea top</a></h5><!-- End .product-title -->
                                                <div class="product-price">
                                                    $56.00
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product product-sm -->

                                        <div class="product product-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="assets/images/products/single/sidebar/3.jpg" alt="Product image" class="product-image">
                                                </a>
                                            </figure>

                                            <div class="product-body">
                                                <h5 class="product-title"><a href="product.html">Beige metal hoop tote bag</a></h5><!-- End .product-title -->
                                                <div class="product-price">
                                                    $50.00
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product product-sm -->

                                        <div class="product product-sm">
                                            <figure class="product-media">
                                                <a href="product.html">
                                                    <img src="assets/images/products/single/sidebar/4.jpg" alt="Product image" class="product-image">
                                                </a>
                                            </figure>

                                            <div class="product-body">
                                                <h5 class="product-title"><a href="product.html">Black soft RI weekend travel bag</a></h5><!-- End .product-title -->
                                                <div class="product-price">
                                                    $75.00
                                                </div><!-- End .product-price -->
                                            </div><!-- End .product-body -->
                                        </div><!-- End .product product-sm -->
                                    </div><!-- End .products -->

                                    <a href="category.html" class="btn btn-outline-dark-3"><span>View More Products</span><i class="icon-long-arrow-right"></i></a>
                                </div><!-- End .widget widget-products -->

                                <div class="widget widget-banner-sidebar">
                                    <div class="banner-sidebar-title">ad box 280 x 280</div><!-- End .ad-title -->

                                    <div class="banner-sidebar banner-overlay">
                                        <a href="#">
                                            <img src="assets/images/blog/sidebar/banner.jpg" alt="banner">
                                        </a>
                                    </div><!-- End .banner-ad -->
                                </div><!-- End .widget -->
                            </div><!-- End .sidebar sidebar-product -->
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
        <script src="assets/js/bootstrap-input-spinner.js"></script>
        <script src="assets/js/jquery.elevateZoom.min.js"></script>
        <script src="assets/js/bootstrap-input-spinner.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Main JS File -->
        <script src="assets/js/main.js"></script>
</body>


<!-- molla/product-sidebar.html  22 Nov 2019 10:03:37 GMT -->

</html>