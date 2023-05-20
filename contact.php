<?php
include_once("./db.php");
include_once("./components/contact/header.php");
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
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact us</li>
            </ol>
        </div>
    </nav>

    <div class="page-content">
        <div class="map mb-4">
            <!-- If you want to show your location from Google Maps on your website like the tag below then complete the work from my given link. 
            link:https://embedgooglemap.2yu.co
            -->
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="100%" height="420" id="gmap_canvas" src="https://maps.google.com/maps?q=ashraf uz mahim&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><br>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 420px;
                            width: 100%;
                        }
                    </style>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 420px;
                            width: 100%;
                        }
                    </style>
                </div>
            </div>
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
include_once("./components/contact/footer.php");
?>