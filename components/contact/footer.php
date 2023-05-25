<footer class="footer">
    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="widget widget-about">
                        <img src="assets/images/logo.png" class="footer-logo" alt="Footer Logo" width="105" height="25">
                        <p>Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue, eu vulputate
                            magna eros eu erat. </p>

                        <div class="social-icons">
                            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
                            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
                            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
                            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
                            <a href="#" class="social-icon" target="_blank" title="Pinterest"><i class="icon-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="widget">
                        <h4 class="widget-title">Useful Links</h4>
                        <ul class="widget-list">
                            <li><a href="about">About Molla</a></li>
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
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Money-back guarantee!</a></li>
                            <li><a href="#">Returns</a></li>
                            <li><a href="#">Shipping</a></li>
                            <li><a href="#">Terms and conditions</a></li>
                            <li><a href="#">Privacy Policy</a></li>
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

        <div class="social-icons">
            <a href="#" class="social-icon" target="_blank" title="Facebook"><i class="icon-facebook-f"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Twitter"><i class="icon-twitter"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Instagram"><i class="icon-instagram"></i></a>
            <a href="#" class="social-icon" target="_blank" title="Youtube"><i class="icon-youtube"></i></a>
        </div>
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
                        <div class="tab-content" id="tab-content-5">
                            <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="singin-email">Username or email address *</label>
                                        <input type="text" class="form-control" id="singin-email" name="singin-email" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="singin-password">Password *</label>
                                        <input type="password" class="form-control" id="singin-password" name="singin-password" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>LOG IN</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="signin-remember">
                                            <label class="custom-control-label" for="signin-remember">Remember
                                                Me</label>
                                        </div><!-- End .custom-checkbox -->

                                        <a href="#" class="forgot-link">Forgot Your Password?</a>
                                    </div><!-- End .form-footer -->
                                </form>
                                <div class="form-choice">
                                    <p class="text-center">or sign in with</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-g">
                                                <i class="icon-google"></i>
                                                Login With Google
                                            </a>
                                        </div><!-- End .col-6 s-->
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-f">
                                                <i class="icon-facebook-f"></i>
                                                Login With Facebook
                                            </a>
                                        </div><!-- End .col-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .form-choice -->
                            </div><!-- .End .tab-pane -->
                            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                <form action="#">
                                    <div class="form-group">
                                        <label for="register-email">Your email address *</label>
                                        <input type="email" class="form-control" id="register-email" name="register-email" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-group">
                                        <label for="register-password">Password *</label>
                                        <input type="password" class="form-control" id="register-password" name="register-password" required>
                                    </div><!-- End .form-group -->

                                    <div class="form-footer">
                                        <button type="submit" class="btn btn-outline-primary-2">
                                            <span>SIGN UP</span>
                                            <i class="icon-long-arrow-right"></i>
                                        </button>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="register-policy" required>
                                            <label class="custom-control-label" for="register-policy">I agree to the
                                                <a href="#">privacy policy</a> *</label>
                                        </div><!-- End .custom-checkbox -->
                                    </div><!-- End .form-footer -->
                                </form>
                                <div class="form-choice">
                                    <p class="text-center">or sign in with</p>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login btn-g">
                                                <i class="icon-google"></i>
                                                Login With Google
                                            </a>
                                        </div><!-- End .col-6 -->
                                        <div class="col-sm-6">
                                            <a href="#" class="btn btn-login  btn-f">
                                                <i class="icon-facebook-f"></i>
                                                Login With Facebook
                                            </a>
                                        </div><!-- End .col-6 -->
                                    </div><!-- End .row -->
                                </div><!-- End .form-choice -->
                            </div><!-- .End .tab-pane -->
                        </div><!-- End .tab-content -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- jquery cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


<script>
    $(document).ready(function() {

        // name click up validation function
        $(function() {
            $('#cname').on("blur keyup", function() {
                checkName();
            });
            $("#cname").click(function() {
                $(document).on("click", function(e) {
                    if ($(e.target).is("#cname") === false) {
                        checkName();
                    }
                });
            });
        })

        // email click up validation function
        $(function() {
            $('#cemail').on("blur keyup", function() {
                checkEmail();
            });
            $("#cemail").click(function() {
                $(document).on("click", function(e) {
                    if ($(e.target).is("#cemail") === false) {
                        checkEmail();
                    }
                });
            });
        })

        // phone number click up validation function
        $(function() {
            $('#cphone').on("blur keyup", function() {
                checkPhone();
            });
            $("#cphone").click(function() {
                $(document).on("click", function(e) {
                    if ($(e.target).is("#cphone") === false) {
                        checkPhone();
                    }
                });
            });
        })

        // subject click up validation function
        $(function() {
            $('#csubject').on("blur keyup", function() {
                checkSubject();
            });
            $("#csubject").click(function() {
                $(document).on("click", function(e) {
                    if ($(e.target).is("#csubject") === false) {
                        checkSubject();
                    }
                });
            });
        })


        // text area / messege area click up validation function
        $(function() {
            $('#cmessage').on("blur keyup", function() {
                checkMsg();
            });
            $("#cmessage").click(function() {
                $(document).on("click", function(e) {
                    if ($(e.target).is("#cmessage") === false) {
                        checkMsg();
                    }
                });
            });
        })


        function checkName() {
            var name = $("#cname").val();

            if (name === "") {
                $("#cname").addClass("error-border");
                $(".error-name").text("*Required");

            } else if (name.length < 4) {
                $("#cname").addClass("error-border");
                $(".error-name").text("*Minimum 4 characters");

            } else {
                $("#cname").removeClass("error-border");
                $(".error-name").text("");
            }
        }

        function checkEmail() {
            var email = $("#cemail").val();

            function validateEmail($email) {
                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
                return emailReg.test($email);
            }

            if (email === "") {
                $("#cemail").addClass("error-border");
                $(".error-email").text("*Required");

            } else if (!validateEmail(email)) {
                $("#cemail").addClass("error-border");
                $(".error-email").text("*Incorrect email");

            } else {
                $("#cemail").removeClass("error-border");
                $(".error-email").text("");
            }
        }

        function checkPhone() {
            var phone = $("#cphone").val();

            if (phone === "") {
                $("#cphone").addClass("error-border");
                $(".error-phone").text("*Required");
            } else {
                $("#cphone").removeClass("error-border");
                $(".error-phone").text("");
            }
        }


        function checkSubject() {
            var subject = $("#csubject").val();

            if (subject === "") {
                $("#csubject").addClass("error-border");
                $(".error-subject").text("*Required");
            } else if (subject.length < 5) {
                $("#csubject").addClass("error-border");
                $(".error-subject").text("*Minimum 5 characters");
            } else {
                $("#csubject").removeClass("error-border");
                $(".error-subject").text("");
            }
        }

        function checkMsg() {
            var message = $("#cmessage").val();

            if (message === "") {
                $("#cmessage").addClass("error-border");
                $(".error-msg").text("*Required");
            } else if (message.length < 12) {
                $("#cmessage").addClass("error-border");
                $(".error-msg").text("*Minimum 12 characters");
            } else {
                $("#cmessage").removeClass("error-border");
                $(".error-msg").text("");
            }
        }
    })
</script>
<!-- Google Map -->
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDc3LRykbLB-y8MuomRUIY0qH5S6xgBLX4"></script>

<!-- Plugins JS File -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/jquery.hoverIntent.min.js"></script>
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/superfish.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Main JS File -->
<script src="assets/js/main.js"></script>
<!-- sweet alert -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    $('#mailSend').click(function() {
        $('#mailSend').html('<i style="font-size:30px;" class="fa-solid fa-spinner fa-spin"></i>');
        setTimeout(function() {
            $('#mailSend').html('<span>Sumbit</span><i class="icon-long-arrow-right"></i>');
        }, 3300);
        var cname = $('#cname').val();
        var cemail = $('#cemail').val();
        var cphone = $('#cphone').val();
        var csubject = $('#csubject').val();
        var cmessage = $('#cmessage').val();
        $.ajax({
            type: "POST",
            url: "components/contact/get_in_touch.php",
            data: {
                "mailSend": "mailSend",
                "cname": cname,
                "cemail": cemail,
                "cphone": cphone,
                "csubject": csubject,
                "cmessage": cmessage
            },
            success: function(data) {
                var data = JSON.parse(data);

                if (data != null) {
                    var status = data.status;
                    var status_code = data.status_code;
                    var status_text = data.status_text;

                    swal({
                        title: status,
                        text: status_text,
                        icon: status_code,
                        button: "Ok",
                    });

                    if (status_code == "success") {
                        $('#mailsenderForm')[0].reset();
                    }
                }
            }
        });
    });
</script>

</body>

</html>