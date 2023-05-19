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
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3014.9013732230133!2d90.45550482881684!3d23.698296105115062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b746b83bfcdd%3A0x124bb54edb3d3805!2sAshraf%20Uz%20Mahim!5e0!3m2!1sen!2sbd!4v1684416122043!5m2!1sen!2sbd" width="100%" height="420" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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