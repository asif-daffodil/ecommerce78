<div class="col-xl-9 col-xxl-10">
    <?php
    include_once("./components/main/home-promo.php");
    ?>

    <div class="mb-3"></div>

    <?php
    include_once("./components/main/brand.php");
    ?>

    <div class="mb-5"></div>

    <?php include_once("./components/main/trending.php") ?>
    <div class="mb-5"></div>

    <!-- electronics section -->
    <div class="row cat-banner-row electronics">
        <div class="col-xl-3 col-xxl-4">
            <div class="cat-banner row no-gutters">
                <div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex" style="background-image: url(assets/images/demos/demo-14/banners/banner-bg-1.jpg);">
                    <div class="banner-list-content">
                        <h2><a href="#">Electronics</a></h2>

                        <ul>
                            <li><a href="#">Cell Phones</a></li>
                            <li><a href="#">Computers</a></li>
                            <li><a href="#">TV & Video</a></li>
                            <li><a href="#">Smart Home</a></li>
                            <li><a href="#">Audi</a></li>
                            <li><a href="#">Home Audio & Theater</a></li>
                            <li class="list-all-link"><a href="#">See All Departments</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-12 col-xxl-6">
                    <div class="banner banner-overlay">
                        <a href="#">
                            <img src="assets/images/demos/demo-14/banners/banner-5.jpg" alt="Banner img desc">
                        </a>

                        <div class="banner-content">
                            <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4>

                            <h3 class="banner-title text-white"><a href="#">Canon EOS <br>Mega Sale <br><span>Up To 20%
                                        Off</span></a></h3>
                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-9 col-xxl-8">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
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
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":3
                                            },
                                            "1600": {
                                                "items":4
                                            }
                                        }
                                    }'>
                <?php
                $select = $conn->query("SELECT p.id, p.name, p.title, p.regular_price, p.discount_price, p.featured_img, p.type ,p.offer_time, c.name AS category_name, AVG(r.rating) AS average_rating, COUNT(r.id) AS review_count
                FROM Products p 
                INNER JOIN Product_Categories c ON p.category_id = c.id
                LEFT JOIN Reviews r ON p.id = r.product_id
                GROUP BY p.id ORDER BY RAND()");
                while ($data = $select->fetch_object()) {
                    if ($data->category_name == "Electronics") {
                ?>
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
                                    <form action="" class="m-auto" style="width: max-content" onsubmit="return addToCart(event)">
                                        <input type="hidden" value="<?= $data->id ?>" name="proId">
                                        <input type="hidden" value="<?= $data->name ?>" name="proName">
                                        <input type="hidden" value="<?= $data->title ?>" name="proTitle">
                                        <input type="hidden" value="<?= $data->discount_price ?? $data->regular_price ?>" name="proPrice">
                                        <input type="hidden" value="<?= $data->featured_img ?>" name="proImg">
                                        <button class="btn-product btn-cart" title="Add to cart" type="submit"><span>add to cart</span></button>
                                    </form>
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
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="mb-3"></div>

    <!-- furniture section -->
    <div class="row cat-banner-row furniture">
        <div class="col-xl-3 col-xxl-4">
            <div class="cat-banner row no-gutters">
                <div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex" style="background-image: url(assets/images/demos/demo-14/banners/banner-bg-2.jpg);">
                    <div class="banner-list-content">
                        <h2><a href="#">Furniture </a></h2>

                        <ul>
                            <li><a href="#">Bedroom </a></li>
                            <li><a href="#">Office</a></li>
                            <li><a href="#">Living Room</a></li>
                            <li><a href="#">Kitchen & Dining</a></li>
                            <li><a href="#">Decoration</a></li>
                            <li><a href="#">Outdoor</a></li>
                            <li class="list-all-link"><a href="#">See All Departments</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-12 col-xxl-6">
                    <div class="banner banner-overlay">
                        <a href="#">
                            <img src="assets/images/demos/demo-14/banners/banner-6.jpg" alt="Banner img desc">
                        </a>

                        <div class="banner-content">
                            <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4>

                            <h3 class="banner-title text-white"><a href="#">Furniture Sets <br><span>Up To 30%
                                        Off</span></a></h3>
                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-9 col-xxl-8">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
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
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":3
                                            },
                                            "1600": {
                                                "items":4
                                            }
                                        }
                                    }'>
                <?php
                $select = $conn->query("SELECT p.name, p.title, p.regular_price, p.discount_price, p.featured_img, p.type ,p.offer_time, c.name AS category_name, AVG(r.rating) AS average_rating, COUNT(r.id) AS review_count
                FROM Products p 
                INNER JOIN Product_Categories c ON p.category_id = c.id
                LEFT JOIN Reviews r ON p.id = r.product_id
                GROUP BY p.id ORDER BY RAND()");
                while ($data = $select->fetch_object()) {
                    if ($data->category_name == "Furniture") {
                ?>
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
                <?php

                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="mb-3"></div>

    <!-- banners section -->
    <div class="row">
        <?php
        $select = $conn->query("SELECT * FROM `banners`");
        if ($select->num_rows > 0) {
            // Fetching only 2 rows of data
            $count = 0;
            while ($banner = $select->fetch_object()) {
                if ($banner->subtitle != "Hottest Deals" && $banner->subtitle != "Deal of the Day") {
        ?>
                    <div class="col-md-6">
                        <div class="banner banner-overlay">
                            <a href="javascript:void(0)">
                                <img src="<?= $banner->image_src ?>" alt="<?= $banner->image_alt ?>">
                            </a>

                            <div class="banner-content">
                                <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="javascrit:void(0)"><?= $banner->subtitle ?></a></h4>

                                <h3 class="banner-title text-white"><a href="javascrit:void(0)">
                                        <?php
                                        // make the text into array and divide it using (,) coma 
                                        $title_array = explode(",", $banner->title);
                                        for ($i = 0; $i < count($title_array); $i++) {
                                            if ($i == 0) {
                                                echo $title_array[$i];
                                            } else {
                                                echo "<br><span>" . $title_array[$i] . "</span>";
                                            }
                                        }
                                        ?></a></h3>
                                <a href="<?= $banner->link ?>" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
        <?php
                    $count++;
                    if ($count >= 2) {
                        break; // Exit the loop once 2 valid rows are processed
                    }
                }
            }
        }

        ?>
    </div>

    <div class="mb-3"></div>

    <!-- clothing section -->
    <div class="row cat-banner-row clothing">
        <div class="col-xl-3 col-xxl-4">
            <div class="cat-banner row no-gutters">
                <div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex" style="background-image: url(assets/images/demos/demo-14/banners/banner-bg-3.jpg);">
                    <div class="banner-list-content">
                        <h2><a href="#">Clothing </a></h2>

                        <ul>
                            <li><a href="#">Best Sellers</a></li>
                            <li><a href="#">Trending</a></li>
                            <li><a href="#">Women</a></li>
                            <li><a href="#">Man</a></li>
                            <li><a href="#">Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li class="list-all-link"><a href="#">See All Departments</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-12 col-xxl-6">
                    <div class="banner banner-overlay">
                        <a href="#">
                            <img src="assets/images/demos/demo-14/banners/banner-9.jpg" alt="Banner img desc">
                        </a>

                        <div class="banner-content">
                            <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4>

                            <h3 class="banner-title text-white"><a href="#">Clearance <br>Outerwear<br><span>Up To 70%
                                        Off</span></a></h3>
                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-9 col-xxl-8">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
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
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":3
                                            },
                                            "1600": {
                                                "items":4
                                            }
                                        }
                                    }'>
                <?php
                $select = $conn->query("SELECT p.name, p.title, p.regular_price, p.discount_price, p.featured_img, p.type ,p.offer_time, c.name AS category_name, AVG(r.rating) AS average_rating, COUNT(r.id) AS review_count
                FROM Products p 
                INNER JOIN Product_Categories c ON p.category_id = c.id
                LEFT JOIN Reviews r ON p.id = r.product_id
                GROUP BY p.id ORDER BY RAND()");
                while ($data = $select->fetch_object()) {
                    if ($data->category_name == "Clothing") {
                ?>
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
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="mb-3"></div>

    <!-- cooking section -->
    <div class="row cat-banner-row cooking">
        <div class="col-xl-3 col-xxl-4">
            <div class="cat-banner row no-gutters">
                <div class="cat-banner-list col-sm-6 d-xl-none d-xxl-flex" style="background-image: url(assets/images/demos/demo-14/banners/banner-bg-4.jpg);">
                    <div class="banner-list-content">
                        <h2><a href="#">Cooking </a></h2>

                        <ul>
                            <li><a href="#">Cookware</a></li>
                            <li><a href="#">Dinnerware</a></li>
                            <li><a href="#">Cups</a></li>
                            <li><a href="#">Microwaves</a></li>
                            <li><a href="#">Toasters</a></li>
                            <li><a href="#">Coffee Makers</a></li>
                            <li class="list-all-link"><a href="#">See All Departments</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-xl-12 col-xxl-6">
                    <div class="banner banner-overlay">
                        <a href="#">
                            <img src="assets/images/demos/demo-14/banners/banner-10.jpg" alt="Banner img desc">
                        </a>

                        <div class="banner-content">
                            <h4 class="banner-subtitle text-white"><a href="#">Best Deals</a></h4>

                            <h3 class="banner-title text-white"><a href="#">Cooking <br>Appliances <br><span>Up To 30%
                                        Off</span></a></h3>
                            <a href="#" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-9 col-xxl-8">
            <div class="owl-carousel owl-full carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
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
                                            "992": {
                                                "items":4
                                            },
                                            "1200": {
                                                "items":3
                                            },
                                            "1600": {
                                                "items":4
                                            }
                                        }
                                    }'>
                <?php
                $select = $conn->query("SELECT p.name, p.title, p.regular_price, p.discount_price, p.featured_img, p.type ,p.offer_time, c.name AS category_name, AVG(r.rating) AS average_rating, COUNT(r.id) AS review_count
                FROM Products p 
                INNER JOIN Product_Categories c ON p.category_id = c.id
                LEFT JOIN Reviews r ON p.id = r.product_id
                GROUP BY p.id ORDER BY RAND()");
                while ($data = $select->fetch_object()) {
                    if ($data->category_name == "Cooking") {
                ?>
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
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="mb-3"></div>

    <div class="icon-boxes-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-rocket"></i>
                        </span>
                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Free Shipping</h3>
                            <p>Orders $50 or more</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-rotate-left"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Free Returns</h3>
                            <p>Within 30 days</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-info-circle"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">Get 20% Off 1 Item</h3>
                            <p>When you sign up</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="icon-box icon-box-side">
                        <span class="icon-box-icon text-dark">
                            <i class="icon-life-ring"></i>
                        </span>

                        <div class="icon-box-content">
                            <h3 class="icon-box-title">We Support</h3>
                            <p>24/7 amazing services</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mb-5"></div>
</div>