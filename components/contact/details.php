<?php

$office_query = $conn->query("SELECT * FROM `office`");
$contact_details_query = $conn->query("SELECT * FROM `contact_details`");
$social_media_query = $conn->query("SELECT * FROM `social_media`");

?>

<div class="row">

    <?php
    if ($office_query->num_rows > 0) {
        $fetch_office_query = $office_query->fetch_assoc();
    ?>

        <div class="col-md-4">
            <div class="contact-box text-center">
                <h3><?= $fetch_office_query["section"] ?></h3>
                <address><?= $fetch_office_query["address"] ?></address>
            </div>
        </div>

    <?php
    }
    ?>

    <?php
    if ($contact_details_query->num_rows > 0) {
        $fetch_contact_details_query = $contact_details_query->fetch_assoc();
    ?>
        <div class="col-md-4">
            <div class="contact-box text-center">
                <h3><?= $fetch_contact_details_query["section"] ?></h3>

                <div>
                    <a href="mailto:<?= $fetch_contact_details_query["email"] ?>"><?= $fetch_contact_details_query["email"] ?></a>
                </div>
                <div>
                    <a href="tel:<?= $fetch_contact_details_query["phone_numbers"] ?>"><?= $fetch_contact_details_query["phone_numbers"] ?></a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <?php
    if ($social_media_query->num_rows > 0) {
        $fetch_social_media_query = $social_media_query->fetch_assoc();
    ?>
        <div class="col-md-4">
            <div class="contact-box text-center">
                <h3><?= $fetch_social_media_query["section"] ?></h3>

                <div class="social-icons social-icons-color justify-content-center">
                    <a href="<?= $fetch_social_media_query["facebook_link"] ?>" class="social-icon social-facebook" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                    <a href="<?= $fetch_social_media_query["twitter_link"] ?>" class="social-icon social-twitter" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                    <a href="<?= $fetch_social_media_query["instagram_link"] ?>" class="social-icon social-instagram" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                    <a href="<?= $fetch_social_media_query["youtube_link"] ?>" class="social-icon social-youtube" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
                    <a href="<?= $fetch_social_media_query["pinterest_link"] ?>" class="social-icon social-pinterest" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

</div>