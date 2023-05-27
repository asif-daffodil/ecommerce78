<?php
$select = $conn->query("SELECT p.title, p.regular_price, p.discount_price, p.featured_img, p.sale,p.offer, c.name AS category_name, AVG(r.rating) AS average_rating, COUNT(r.id) AS review_count
          FROM Products p
          INNER JOIN Product_Categories c ON p.category_id = c.id
          LEFT JOIN Reviews r ON p.id = r.product_id
          GROUP BY p.id");
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
                <li class="nav-item">
                    <a class="nav-link" id="trending-elec-link" data-toggle="tab" href="#trending-elec-tab" role="tab" aria-controls="trending-elec-tab" aria-selected="false">Electronics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="trending-furn-link" data-toggle="tab" href="#trending-furn-tab" role="tab" aria-controls="trending-furn-tab" aria-selected="false">Furniture</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="trending-cloth-link" data-toggle="tab" href="#trending-cloth-tab" role="tab" aria-controls="trending-cloth-tab" aria-selected="false">Clothes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="trending-acc-link" data-toggle="tab" href="#trending-acc-tab" role="tab" aria-controls="trending-acc-tab" aria-selected="false">Accessories</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="tab-content tab-content-carousel">
        <div class="tab-pane p-0 fade show active" id="trending-all-tab" role="tabpanel" aria-labelledby="trending-all-link">
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
                <?php while ($data = $select->fetch_object()) { ?>
                    <div class="product text-center">
                        <figure class="product-media">
                            <?php
                            if ($data->sale == 1) {
                            ?>
                                <span class="product-label label-sale">Sale</span>
                            <?php } elseif ($data->sale == 2) { ?>
                                <span class="product-label label-sale">Top</span>
                            <?php } ?>
                            <a href="product.html">
                                <img src="<?= $data->featured_img ?>" alt="Product image" class="product-image">
                            </a>

                            <?php
                            if ($data->offer == 1) {
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
                                <a href="#"><?= $data->category_name; ?></a>
                            </div>
                            <h3 class="product-title"><a href="product.html"><?= $data->title ?></a></h3>
                            <div class="product-price">
                                <span class="new-price">$<?= $data->discount_price ?></span>
                                <span class="old-price">Was $<?= $data->regular_price ?></span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: <?php echo ($data->average_rating * 20); ?>%;"></div>
                                </div>
                                <span class="ratings-text">( <?= $data->review_count ?> Reviews )</span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
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
                while ($data = $select->fetch_object()) { ?>
                    <div class="product text-center">
                        <figure class="product-media">
                            <?php
                            if ($data->sale == 1) {
                            ?>
                                <span class="product-label label-sale">Sale</span>
                            <?php } elseif ($data->sale == 2) { ?>
                                <span class="product-label label-sale">Top</span>
                            <?php } ?>
                            <a href="product.html">
                                <img src="<?= $data->featured_img ?>" alt="Product image" class="product-image">
                            </a>

                            <?php
                            if ($data->offer == 1) {
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
                                <a href="#"><?= $data->category_name; ?></a>
                            </div>
                            <h3 class="product-title"><a href="product.html"><?= $data->title ?></a></h3>
                            <div class="product-price">
                                <span class="new-price">$<?= $data->discount_price ?></span>
                                <span class="old-price">Was $<?= $data->regular_price ?></span>
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
                ?>
            </div>
        </div>
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
                <div class="product text-center">
                    <figure class="product-media">
                        <span class="product-label label-top">Top</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image">
                        </a>

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
                            <a href="#">Laptops</a>
                        </div>
                        <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3>
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

                <div class="product text-center">
                    <figure class="product-media">
                        <span class="product-label label-sale">Sale</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-14/products/product-2.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-countdown" data-until="+55h" data-relative="true" data-labels-short="true"></div>

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
                            <a href="#">Electronics</a>
                        </div>
                        <h3 class="product-title"><a href="product.html">Bose - SoundSport wireless headphones</a></h3>
                        <div class="product-price">
                            <span class="new-price">$179.99</span>
                            <span class="old-price">Was $199.00</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div>
                            </div>
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div>

                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div>
                    </div>
                </div>

                <div class="product text-center">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="assets/images/demos/demo-14/products/product-3.jpg" alt="Product image" class="product-image">
                        </a>

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
                            <a href="#">Furniture</a>
                        </div>
                        <h3 class="product-title"><a href="product.html">Can 2-Seater Sofa frame charcoal</a></h3>
                        <div class="product-price">
                            $3,050.00
                        </div>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 60%;"></div>
                            </div>
                            <span class="ratings-text">( 8 Reviews )</span>
                        </div>

                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                        </div>
                    </div>
                </div>

                <div class="product text-center">
                    <figure class="product-media">
                        <span class="product-label label-sale">Sale</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-14/products/product-1.jpg" alt="Product image" class="product-image">
                        </a>

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
                            <a href="#">Furniture</a>
                        </div>
                        <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3>
                        <div class="product-price">
                            <span class="new-price">$251.99</span>
                            <span class="old-price">Was $290.00</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div>
                            </div>
                            <span class="ratings-text">( 2 Reviews )</span>
                        </div>
                    </div>
                </div>

                <div class="product text-center">
                    <figure class="product-media">
                        <span class="product-label label-top">Top</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-14/products/product-5.jpg" alt="Product image" class="product-image">
                        </a>

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
                            <a href="#">Electronics</a>
                        </div>
                        <h3 class="product-title"><a href="product.html">Sony - Class LED 2160p Smart <br>4K Ultra HD</a></h3>
                        <div class="product-price">
                            $1,699.99
                        </div>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div>
                            </div>
                            <span class="ratings-text">( 10 Reviews )</span>
                        </div>
                    </div>
                </div>

                <div class="product text-center">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="assets/images/demos/demo-14/products/product-4.jpg" alt="Product image" class="product-image">
                        </a>

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
                            <a href="#">Clothes</a>
                        </div>
                        <h3 class="product-title"><a href="product.html">Tan suede biker jacket</a></h3>
                        <div class="product-price">
                            $240.00
                        </div>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div>
                            </div>
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <div class="product text-center">
                    <figure class="product-media">
                        <span class="product-label label-sale">Sale</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-14/products/product-1.jpg" alt="Product image" class="product-image">
                        </a>

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
                            <a href="#">Furniture</a>
                        </div>
                        <h3 class="product-title"><a href="product.html">Butler Stool Ladder</a></h3>
                        <div class="product-price">
                            <span class="new-price">$251.99</span>
                            <span class="old-price">Was $290.00</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div>
                            </div>
                            <span class="ratings-text">( 2 Reviews )</span>
                        </div>
                    </div>
                </div>

                <div class="product text-center">
                    <figure class="product-media">
                        <span class="product-label label-top">Top</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-14/products/product-5.jpg" alt="Product image" class="product-image">
                        </a>

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
                            <a href="#">Electronics</a>
                        </div>
                        <h3 class="product-title"><a href="product.html">Sony - Class LED 2160p Smart <br>4K Ultra HD</a></h3>
                        <div class="product-price">
                            $1,699.99
                        </div>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div>
                            </div>
                            <span class="ratings-text">( 10 Reviews )</span>
                        </div>
                    </div>
                </div>

                <div class="product text-center">
                    <figure class="product-media">
                        <span class="product-label label-top">Top</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image">
                        </a>

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
                            <a href="#">Laptops</a>
                        </div>
                        <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3>
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

                <div class="product text-center">
                    <figure class="product-media">
                        <span class="product-label label-sale">Sale</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-14/products/product-2.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-countdown" data-until="+55h" data-relative="true" data-labels-short="true"></div>

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
                            <a href="#">Electronics</a>
                        </div>
                        <h3 class="product-title"><a href="product.html">Bose - SoundSport wireless headphones</a></h3>
                        <div class="product-price">
                            <span class="new-price">$179.99</span>
                            <span class="old-price">Was $199.00</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div>
                            </div>
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div>

                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div>
                    </div>
                </div>

                <div class="product text-center">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="assets/images/demos/demo-14/products/product-3.jpg" alt="Product image" class="product-image">
                        </a>

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
                            <a href="#">Furniture</a>
                        </div>
                        <h3 class="product-title"><a href="product.html">Can 2-Seater Sofa frame charcoal</a></h3>
                        <div class="product-price">
                            $3,050.00
                        </div>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 60%;"></div>
                            </div>
                            <span class="ratings-text">( 8 Reviews )</span>
                        </div>

                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                <div class="product text-center">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="assets/images/demos/demo-14/products/product-4.jpg" alt="Product image" class="product-image">
                        </a>

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
                            <a href="#">Clothes</a>
                        </div>
                        <h3 class="product-title"><a href="product.html">Tan suede biker jacket</a></h3>
                        <div class="product-price">
                            $240.00
                        </div>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div>
                            </div>
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div>
                    </div>
                </div>

                <div class="product text-center">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="assets/images/demos/demo-14/products/product-3.jpg" alt="Product image" class="product-image">
                        </a>

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
                            <a href="#">Furniture</a>
                        </div>
                        <h3 class="product-title"><a href="product.html">Can 2-Seater Sofa frame charcoal</a></h3>
                        <div class="product-price">
                            $3,050.00
                        </div>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 60%;"></div>
                            </div>
                            <span class="ratings-text">( 8 Reviews )</span>
                        </div>

                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #b58555;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #93a6b0;"><span class="sr-only">Color name</span></a>
                        </div>
                    </div>
                </div>

                <div class="product text-center">
                    <figure class="product-media">
                        <span class="product-label label-sale">Sale</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-14/products/product-2.jpg" alt="Product image" class="product-image">
                        </a>

                        <div class="product-countdown" data-until="+55h" data-relative="true" data-labels-short="true"></div>

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
                            <a href="#">Electronics</a>
                        </div>
                        <h3 class="product-title"><a href="product.html">Bose - SoundSport wireless headphones</a></h3>
                        <div class="product-price">
                            <span class="new-price">$179.99</span>
                            <span class="old-price">Was $199.00</span>
                        </div>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 100%;"></div>
                            </div>
                            <span class="ratings-text">( 4 Reviews )</span>
                        </div>

                        <div class="product-nav product-nav-dots">
                            <a href="#" class="active" style="background: #69b4ff;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #ff887f;"><span class="sr-only">Color name</span></a>
                            <a href="#" style="background: #333333;"><span class="sr-only">Color name</span></a>
                        </div>
                    </div>
                </div>

                <div class="product text-center">
                    <figure class="product-media">
                        <span class="product-label label-top">Top</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-14/products/product-5.jpg" alt="Product image" class="product-image">
                        </a>

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
                            <a href="#">Electronics</a>
                        </div>
                        <h3 class="product-title"><a href="product.html">Sony - Class LED 2160p Smart <br>4K Ultra HD</a></h3>
                        <div class="product-price">
                            $1,699.99
                        </div>
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div>
                            </div>
                            <span class="ratings-text">( 10 Reviews )</span>
                        </div>
                    </div>
                </div>

                <div class="product text-center">
                    <figure class="product-media">
                        <span class="product-label label-top">Top</span>
                        <a href="product.html">
                            <img src="assets/images/demos/demo-14/products/product-6.jpg" alt="Product image" class="product-image">
                        </a>

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
                            <a href="#">Laptops</a>
                        </div>
                        <h3 class="product-title"><a href="product.html">MacBook Pro 13" Display, i5</a></h3>
                        <div class="product-price">
                            <span class="old-price">$1,199.99</span>
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
        </div>
    </div>
</div>