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
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/icons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/icons/site.html">
    <link rel="mask-icon" href="assets/images/icons/safari-pinned-tab.svg" color="#666666">
    <link rel="shortcut icon" href="assets/images/icons/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .error-border {
            border-color: #d62828 !important;
        }
    </style>
</head>

<body>
    <div class="page-wrapper">
        <?php
        include_once("./components/commonHF/header.php");;
        ?>
        <main class="main">
            <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
                <div class="container">
                    <h1 class="page-title">Contact us</h1>
                </div>
            </div>
            <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
                <div class="container">
                    <ol class="breadcrumb">
                        <style>
                            .breadcrumb-item a.active {
                                color: #bf8040 !important;
                            }
                        </style>
                        <li class="breadcrumb-item"><a href="./">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                        <li class="breadcrumb-item"><a href="contact" class="<?= substr(basename($_SERVER['PHP_SELF']), 0, -4) == "contact" ? "active" : null ?>">Contact us</a></li>
                    </ol>
                </div>
            </nav>

            <div class="page-content">
                <div class="map mb-4">
                    <!-- If you want to show your location from Google Maps on your website like another way then complete the work from my given link. 
            link:https://embedgooglemap.2yu.co
            -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d278034.3129864666!2d90.38810165898664!3d23.711438576526703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b746b83bfcdd%3A0x124bb54edb3d3805!2sAshraf%20Uz%20Mahim!5e0!3m2!1sen!2sbd!4v1685117653707!5m2!1sen!2sbd" width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="container">

                    <!-- details page include -->
                    <?php
                    include_once("./components/contact/details.php");
                    ?>

                    <hr class="mt-3 mb-5 mt-md-1">

                    <!-- include get in touch section -->
                    <?php
                    include_once("./components/contact/get_in_touch.php");
                    ?>
                </div>
            </div>
        </main>

        <?php
        include_once("./components/commonHF/footer.php");
        ?>


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