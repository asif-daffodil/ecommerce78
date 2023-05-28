<aside class="col-xl-3 col-xxl-2 order-xl-first">
    <div class="sidebar sidebar-home">
        <div class="row">
            <div class="col-sm-6 col-xl-12">
                <div class="widget widget-banner">
                    <div class="banner banner-overlay">
                        <a href="#">
                            <img src="assets/images/demos/demo-14/banners/banner-11.jpg" alt="Banner img desc">
                        </a>

                        <div class="banner-content banner-content-top banner-content-right text-right">
                            <h3 class="banner-title text-white"><a href="#">Maximum Comfort <span>Sofas -20% Off</span></a></h3><!-- End .banner-title -->
                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner banner-overlay -->
                </div><!-- End .widget widget-banner -->
            </div><!-- End .col-sm-6 col-xl-12 -->

            <div class="col-sm-6 col-xl-12 mb-2">
                <div class="widget widget-products">
                    <h4 class="widget-title"><span>Bestsellers</span></h4><!-- End .widget-title -->

                    <div class="products">
                        <div class="product product-sm">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-14/products/small/product-1.jpg" alt="Product image" class="product-image">
                                </a>
                            </figure>

                            <div class="product-body">
                                <h5 class="product-title"><a href="product.html">Sceptre 50" Class FHD (1080P) LED TV</a></h5><!-- End .product-title -->
                                <div class="product-price">
                                    $199.99
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product product-sm -->

                        <div class="product product-sm">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-14/products/small/product-2.jpg" alt="Product image" class="product-image">
                                </a>
                            </figure>

                            <div class="product-body">
                                <h5 class="product-title"><a href="product.html">Red Cookware Set, 9 Piece</a></h5><!-- End .product-title -->
                                <div class="product-price">
                                    $24.95
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product product-sm -->

                        <div class="product product-sm">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-14/products/small/product-3.jpg" alt="Product image" class="product-image">
                                </a>
                            </figure>

                            <div class="product-body">
                                <h5 class="product-title"><a href="product.html">Epson WorkForce WF-2750 All-in-One Wireless</a></h5><!-- End .product-title -->
                                <div class="product-price">
                                    $49.99
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product product-sm -->

                        <div class="product product-sm">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-14/products/small/product-4.jpg" alt="Product image" class="product-image">
                                </a>
                            </figure>

                            <div class="product-body">
                                <h5 class="product-title"><a href="product.html">Stainless Steel Microwave Oven</a></h5><!-- End .product-title -->
                                <div class="product-price">
                                    $64.84
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product product-sm -->

                        <div class="product product-sm">
                            <figure class="product-media">
                                <a href="product.html">
                                    <img src="assets/images/demos/demo-14/products/small/product-5.jpg" alt="Product image" class="product-image">
                                </a>
                            </figure>

                            <div class="product-body">
                                <h5 class="product-title"><a href="product.html">Fatboy Original Beanbag</a></h5><!-- End .product-title -->
                                <div class="product-price">
                                    $49.99
                                </div><!-- End .product-price -->
                            </div><!-- End .product-body -->
                        </div><!-- End .product product-sm -->
                    </div><!-- End .products -->
                </div><!-- End .widget widget-products -->
            </div><!-- End .col-sm-6 col-xl-12 -->

            <div class="col-12">
                <div class="widget widget-deals">
                    <h4 class="widget-title"><span>Special Offer</span></h4><!-- End .widget-title -->
                    <div class="row">
                        <?php
                        $select = $conn->query("SELECT p.name, p.title, p.regular_price, p.discount_price, p.featured_img, p.type ,p.offer_time, c.name AS category_name, AVG(r.rating) AS average_rating, COUNT(r.id) AS review_count
                        FROM Products p 
                        INNER JOIN Product_Categories c ON p.category_id = c.id
                        LEFT JOIN Reviews r ON p.id = r.product_id
                        GROUP BY p.id ORDER BY RAND()");
                        while ($data = $select->fetch_object()) {
                            if ($data->type == "Deal of the week") {
                        ?>
                                <div class="col-sm-6 col-xl-12">

                                    <div class="product text-center">
                                        <figure class="product-media">

                                            <?php
                                            if (($data->type !== null && $data->type !== "") && ($data->type !== "Deal of the week")) {
                                            ?>
                                                <span style="text-transform: capitalize;" class="product-label label-<?= $data->type ?>"><?= $data->type ?></span>
                                            <?php
                                            } elseif ($data->type == "Deal of the week") {
                                            ?>
                                                <span style="text-transform: capitalize;" class="product-label label-sale"><?= $data->type ?></span>
                                            <?php
                                            }
                                            ?>

                                            <a href="product">
                                                <img src="<?= $data->featured_img ?>" alt="Product image" class="product-image">
                                            </a>

                                            <?php
                                            if ($data->offer_time == 1) {
                                            ?>
                                                <div class="product-countdown" data-until="+55h" data-relative="true" data-labels-short="true"></div>
                                            <?php
                                            }
                                            ?>

                                            <div class="product-action-vertical">
                                                <a href="#" class="btn-product-icon btn-wishlist" title="Add to wishlist"><span>add to wishlist</span></a>
                                                <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                                                <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                                            </div>

                                            <div class="product-action">
                                                <a href="#" class="btn-product btn-cart" title="Add to cart"><span>add to cart</span></a>
                                            </div>
                                        </figure>

                                        <div class="product-body">
                                            <div class="product-cat">
                                                <a href="#"><?= $data->name; ?></a>
                                            </div>
                                            <h3 class="product-title"><a href="product.html"><?= $data->title ?></a></h3>
                                            <div class="product-price">
                                                <?php
                                                if ($data->discount_price !== null) {
                                                ?>
                                                    <span class="new-price" style="color: green;">$<?= $data->discount_price ?></span>
                                                <?php
                                                }
                                                ?>
                                                <?php
                                                if ($data->discount_price !== null) {
                                                ?>
                                                    <span class="old-price">Was <span class="text-danger" style="text-decoration: line-through;">$<?= $data->regular_price ?></span>
                                                    <?php
                                                } else {
                                                    ?>
                                                        <span>$<?= $data->regular_price ?></span>
                                                    <?php
                                                }
                                                    ?>

                                            </div>
                                            <div class="ratings-container">
                                                <div class="ratings">
                                                    <div class="ratings-val" style="width: <?php echo ($data->average_rating * 20); ?>%;"></div>
                                                </div>
                                                <span class="ratings-text">( <?= $data->review_count ?? 0 ?> Reviews )</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End .col-sm-6 col-xl-12 -->
                        <?php }
                        }
                        ?>
                    </div><!-- End .row -->
                </div><!-- End .widget widget-deals -->
            </div><!-- End .col-sm-6 col-lg-xl -->

            <div class="col-sm-6 col-xl-12">
                <div class="widget widget-banner">
                    <div class="banner banner-overlay">
                        <a href="#">
                            <img src="assets/images/demos/demo-14/banners/banner-12.jpg" alt="Banner img desc">
                        </a>

                        <div class="banner-content banner-content-top">
                            <h3 class="banner-title text-white"><a href="#">Take Better Photos <br><span>With</span> Canon EOS <br><span>Up To 20% Off</span></a></h3><!-- End .banner-title -->
                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                        </div><!-- End .banner-content -->
                    </div><!-- End .banner banner-overlay -->
                </div><!-- End .widget widget-banner -->
            </div><!-- End .col-sm-6 col-lg-12 -->

            <div class="col-sm-6 col-xl-12">
                <div class="widget widget-posts">
                    <h4 class="widget-title"><span>Latest Blog Posts</span></h4><!-- End .widget-title -->

                    <div class="owl-carousel owl-simple" data-toggle="owl" data-owl-options='{
                                                "nav":false, 
                                                "dots": true, 
                                                "loop": false,
                                                "autoHeight": true
                                            }'>
                        <article class="entry">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="assets/images/demos/demo-14/blog/post-1.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                    <a href="#">Nov 22, 2018</a>, 0 Comments
                                </div><!-- End .entry-meta -->

                                <h5 class="entry-title">
                                    <a href="single.html">Sed adipiscing ornare.</a>
                                </h5><!-- End .entry-title -->

                                <div class="entry-content">
                                    <p>Lorem ipsum dolor consectetuer adipiscing elit. Phasellus hendrerit. Pelletesque aliquet nibh ...</p>
                                    <a href="single.html" class="read-more">Read More</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <article class="entry">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="assets/images/demos/demo-14/blog/post-2.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                    <a href="#">Nov 22, 2018</a>, 0 Comments
                                </div><!-- End .entry-meta -->

                                <h5 class="entry-title">
                                    <a href="single.html">Vivamus vestibulum ntulla.</a>
                                </h5><!-- End .entry-title -->

                                <div class="entry-content">
                                    <p>Phasellus hendrerit. Pelletesque aliquet nibh necurna In nisi neque, aliquet vel, dapibus id ... </p>
                                    <a href="single.html" class="read-more">Read More</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <article class="entry">
                            <figure class="entry-media">
                                <a href="single.html">
                                    <img src="assets/images/demos/demo-14/blog/post-3.jpg" alt="image desc">
                                </a>
                            </figure><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-meta">
                                    <a href="#">Nov 22, 2018</a>, 0 Comments
                                </div><!-- End .entry-meta -->

                                <h5 class="entry-title">
                                    <a href="single.html">Praesent placerat risus.</a>
                                </h5><!-- End .entry-title -->

                                <div class="entry-content">
                                    <p>Sed pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget blandit nunc ...</p>
                                    <a href="single.html" class="read-more">Read More</a>
                                </div><!-- End .entry-content -->
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->
                    </div><!-- End .owl-carousel -->
                </div><!-- End .widget widget-posts -->
            </div><!-- End .col-sm-6 col-xl-12 -->
        </div><!-- End .row -->
    </div><!-- End .sidebar sidebar-home -->
</aside>