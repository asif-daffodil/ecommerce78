<?php
include_once("./db.php");
?>
<footer class="footer">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="widget widget-about">
                        <img src="assets/images/logo.png" class="footer-logo" alt="Footer Logo" width="105" height="25">
                        <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate
                            magna eros eu erat. </p>
                        <?php
                        $social_media_query = $conn->query("SELECT * FROM `social_media`");
                        $exist = $social_media_query->num_rows;
                        if ($exist !== 0 || $exist > 0 || $exist == 1) {
                            $fetch = $social_media_query->fetch_assoc();
                        ?>
                            <div class="social-icons">
                                <a href="<?= $fetch['facebook_link'] ?>" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                                <a href="<?= $fetch['twitter_link'] ?>" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                                <a href="<?= $fetch['instagram_link'] ?>" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                                <a href="<?= $fetch['youtube_link'] ?>" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                                <a href="<?= $fetch['pinterest_link'] ?>" class="social-icon" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a>
                            </div>
                        <?php

                        }
                        ?>


                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">Useful Links</h4>
                        <ul class="widget-list">
                            <li><a href="about">About Us</a></li>
                            <li><a href="faq">FAQ</a></li>
                            <li><a href="contact">Contact us</a></li>
                            <li><a href="login">Log in</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">Customer Service</h4>

                        <ul class="widget-list">
                            <li><a href="javascript:void(0)">Payment Methods</a></li>
                            <li><a href="javascript:void(0)">Money-back guarantee!</a></li>
                            <li><a href="javascript:void(0)">Returns</a></li>
                            <li><a href="javascript:void(0)">Shipping</a></li>
                            <li><a href="javascript:void(0)">Terms and conditions</a></li>
                            <li><a href="javascript:void(0)">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">My Account</h4>

                        <ul class="widget-list">
                            <li><a href="login">Sign In</a></li>
                            <li><a href="cart">View Cart</a></li>
                            <li><a href="wishlist">My Wishlist</a></li>
                            <li><a href="cart">Track My Order</a></li>
                            <li><a href="contact">Help</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p class="footer-copyright">Copyright © 2019 Molla Store. All Rights Reserved.</p>
            <figure class="footer-payments">
                <img src="assets/images/payments.png" alt="Payment methods" width="272" height="20">
            </figure>
        </div>
    </div>
</footer>
</div>
<button id="scroll-top" title="Back to Top"><i class="icon-arrow-up"></i></button>

<!-- Mobile Menu -->
<div class="mobile-menu-overlay"></div>

<div class="mobile-menu-container">
    <div class="mobile-menu-wrapper">
        <span class="mobile-menu-close"><i class="icon-close"></i></span>

        <form action="#" method="get" class="mobile-search">
            <label for="mobile-search" class="sr-only">Search</label>
            <input type="search" class="form-control" name="mobile-search" id="mobile-search" placeholder="Search in..." required>
            <button class="btn btn-primary" type="submit"><i class="icon-search"></i></button>
        </form>

        <!-- mobile manu for contact page -->
        <nav class="mobile-nav">
            <ul class="mobile-menu">
                <li class="active">
                    <a href="./">Home</a>
                </li>
                <li>
                    <a href="category">Shop</a>
                    <ul>
                        <li><a href="cart">Cart</a></li>
                        <li><a href="checkout">Checkout</a></li>
                        <li><a href="wishlist">Wishlist</a></li>
                    </ul>
                </li>
                <li>
                    <a href="product" class="sf-with-ul">Products</a>
                </li>
                <li>
                    <a href="javascript:void(0)">Pages</a>
                    <ul>
                        <li>
                            <a href="about">About</a>
                        </li>
                        <li>
                            <a href="contact">Contact</a>
                        </li>
                        <li><a href="login">Login</a></li>
                        <li><a href="faq">FAQs</a></li>
                        <li><a href="404">Error 404</a></li>
                    </ul>
                </li>
                <li>
                    <a href="blog-listing">Blogs</a>
                </li>
            </ul>
        </nav>
        <?php
        $social_media_query = $conn->query("SELECT * FROM `social_media`");
        $exist = $social_media_query->num_rows;
        if ($exist !== 0 || $exist > 0 || $exist == 1) {
            $fetch = $social_media_query->fetch_assoc();
        ?>
            <div class="social-icons">
                <a href="<?= $fetch['facebook_link'] ?>" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                <a href="<?= $fetch['twitter_link'] ?>" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                <a href="<?= $fetch['instagram_link'] ?>" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                <a href="<?= $fetch['youtube_link'] ?>" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
            </div>
        <?php

        }
        ?>
    </div>
</div>

<!-- Sign in / Register Modal -->
<div class="modal fade" id="signin-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icon-close"></i></span>
                </button>

                <div class="form-box">
                    <div class="form-tab">
                        <ul class="nav nav-pills nav-fill" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">Sign In</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">Register</a>
                            </li>
                        </ul>
                        <?php include_once("./components/loginModal.php") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>