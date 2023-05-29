<?php
$query = "SELECT * FROM slides";
$slides = $conn->query($query);
?>
<div class="col-xl-9 col-xxl-8 offset-lg-3 offset-xxl-2">
    <div class="intro-slider-container slider-container-ratio mb-2">
        <div class="intro-slider owl-carousel owl-simple owl-nav-inside" data-toggle="owl" data-owl-options='{
                                    "nav": false, 
                                    "dots": true
                                }'>
            <?php while ($slide = $slides->fetch_object()) { ?>
                <div class="intro-slide">
                    <figure class="slide-image">
                        <picture>
                            <source media="(max-width: 480px)" srcset="<?= $slide->image_src ?>">
                            <img src="<?= $slide->image_src ?>" alt="<?= $slide->image_alt ?>">
                        </picture>
                    </figure><!-- End .slide-image -->

                    <div class="intro-content">
                        <h3 class="intro-subtitle"><?= $slide->subtitle ?></h3><!-- End .h3 intro-subtitle -->
                        <h1 class="intro-title text-white">
                            <?= $slide->title  ?>
                        </h1><!-- End .intro-title -->

                        <?php if ($slide->price) { ?>
                            <div class="intro-price">
                                <sup>from</sup>
                                <span>
                                    <?php
                                    $pArr = explode(".", $slide->price);
                                    for ($i = 0; $i < count($pArr); $i++) {
                                        if ($i == 0) {
                                            echo $pArr[$i];
                                        } else {
                                            echo "<sup>." . $pArr[$i] . "</sup>";
                                        }
                                    }
                                    ?>
                                </span>
                            </div>
                        <?php } ?>

                        <div class="intro-text text-white">
                            <?= $slide->text  ?>
                        </div>

                        <a href="<?= $slide->link ?>" class="btn btn-primary">
                            <span>Discover Now</span>
                            <i class="icon-long-arrow-right"></i>
                        </a>
                    </div>
                </div>
            <?php }  ?>
        </div>

        <span class="slider-loader"></span>
    </div>
</div>