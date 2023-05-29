<?php
$select = $conn->query("SELECT p.name, p.title, p.regular_price, p.discount_price, p.featured_img, p.type ,p.offer_time, c.name AS category_name, AVG(r.rating) AS average_rating, COUNT(r.id) AS review_count
          FROM Products p 
          INNER JOIN Product_Categories c ON p.category_id = c.id
          LEFT JOIN Reviews r ON p.id = r.product_id
          GROUP BY p.id ORDER BY RAND()");
?>
<div class="bg-lighter trending-products">
    <div class="heading heading-flex mb-3">
        <div class="heading-left">
            <h2 class="title">Trending Today</h2>
        </div>

        <div class="heading-right">
            <ul class="nav nav-pills justify-content-center" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="trending-all-link" data-toggle="tab" href="#trending-all-tab" role="tab" aria-controls="trending-all-tab" aria-selected="true">All</a>
                </li>
                <?php
                $select_categories = $conn->query("SELECT * FROM `product_categories`");
                if ($select_categories) {
                    while ($data = $select_categories->fetch_object()) {
                ?>
                        <li class="nav-item">
                            <a class="nav-link" id="<?= $data->name == "Electronics" ? "trending-elec-link" : null ?><?= $data->name == "Furniture" ? "trending-furn-link" : null ?><?= $data->name == "Clothing" ? "trending-cloth-link" : null ?><?= $data->name == "Cooking" ? "trending-acc-link" : null ?>" data-toggle="tab" href="<?= $data->name == "Electronics" ? "#trending-elec-tab" : null ?><?= $data->name == "Furniture" ? "#trending-furn-tab" : null ?><?= $data->name == "Clothing" ? "#trending-cloth-tab" : null ?><?= $data->name == "Cooking" ? "#trending-acc-tab" : null ?>" role="tab" aria-controls="<?= $data->name == "Electronics" ? "trending-elec-tab" : null ?><?= $data->name == "Furniture" ? "trending-furn-tab" : null ?><?= $data->name == "Clothing" ? "trending-cloth-tab" : null ?><?= $data->name == "Cooking" ? "trending-acc-tab" : null ?>" aria-selected="false"><?= $data->name ?></a>
                        </li>
                <?php

                    }
                }
                ?>
            </ul>
        </div>
    </div>

    <div class="tab-content tab-content-carousel">
        <div class="tab-pane p-0 fade show active" id="trending-all-tab" role="tabpanel" aria-labelledby="trending-all-link">

            <!-- all products -->
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
                                                    "items":3,
                                                    "nav": true
                                                },
                                                "1600": {
                                                    "items":5,
                                                    "nav": true
                                                }
                                            }
                                        }'>
                <?php
                if ($select->num_rows > 0) {
                    while ($data = ($select->fetch_object())) {
                        if ($data->average_rating >= 2.5) { ?>
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
                                        <span class="ratings-text">( <?= $data->review_count ?> Reviews )</span>
                                    </div>
                                </div>
                            </div>
                <?php }
                    }
                } ?>
            </div>
        </div>

        <!-- Electronics -->
        <div class="tab-pane p-0 fade" id="trending-elec-tab" role="tabpanel" aria-labelledby="trending-elec-link">
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
                                                    "items":3,
                                                    "nav": true
                                                },
                                                "1600": {
                                                    "items":5,
                                                    "nav": true
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
                    if ($data->category_name == "Electronics") {
                        if ($data->average_rating >= 2.5) {
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
                <?php }
                    }
                }
                ?>
            </div>
        </div>

        <!-- Furniture -->
        <div class="tab-pane p-0 fade" id="trending-furn-tab" role="tabpanel" aria-labelledby="trending-furn-link">
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
                                                    "items":3,
                                                    "nav": true
                                                },
                                                "1600": {
                                                    "items":5,
                                                    "nav": true
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
                        if ($data->average_rating >= 2.5) {
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
                }
                ?>
            </div>
        </div>

        <!-- Clothing -->
        <div class="tab-pane p-0 fade" id="trending-cloth-tab" role="tabpanel" aria-labelledby="trending-cloth-link">
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
                                                    "items":3,
                                                    "nav": true
                                                },
                                                "1600": {
                                                    "items":5,
                                                    "nav": true
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
                        if ($data->average_rating >= 2.5) {
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
                <?php }
                    }
                }
                ?>
            </div>
        </div>

        <!-- Cooking -->
        <div class="tab-pane p-0 fade" id="trending-acc-tab" role="tabpanel" aria-labelledby="trending-acc-link">
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
                                                    "items":3,
                                                    "nav": true
                                                },
                                                "1600": {
                                                    "items":5,
                                                    "nav": true
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
                        if ($data->average_rating >= 2.5) {
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
                }
                ?>
            </div>
        </div>
    </div>
</div>