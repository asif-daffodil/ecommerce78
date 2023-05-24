<?php

$query = "SELECT * FROM `team`";
$team_query = $conn->query($query);


?>

<div class="bg-light-2 pt-6 pb-7 mb-6">
    <div class="container">
        <h2 class="title text-center mb-4">Meet Our Team</h2><!-- End .title text-center mb-2 -->

        <div class="row">
            <?php
            while ($row = $team_query->fetch_object()) {

            ?>
                <div class="col-sm-6 col-lg-3">
                    <div class="member member-2 text-center">
                        <figure class="member-media">
                            <img src="<?= $row->photo; ?>" alt="member photo">

                            <figcaption class="member-overlay">
                                <div class="social-icons social-icons-simple">
                                    <a href="<?= $row->facebook_url; ?>" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="<?= $row->twitter_url; ?>" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="<?= $row->instagram_url; ?>" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                        <div class="member-content">
                            <h3 class="member-title"><?= $row->name; ?><span><?= $row->designation; ?></span></h3>
                        </div>
                    </div>
                </div>

            <?php  } ?>
        </div>



        <div class="text-center mt-3">
            <a href="blog.html" class="btn btn-sm btn-minwidth-lg btn-outline-primary-2">
                <span>LETS START WORK</span>
                <i class="icon-long-arrow-right"></i>
            </a>
        </div><!-- End .text-center -->
    </div><!-- End .container -->
</div><!-- End .bg-light-2 pt-6 pb-6 -->