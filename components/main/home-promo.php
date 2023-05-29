<?php
$banners = $conn->query("SELECT * FROM `banners`");
?>
<div class="row">
    <div class="col-lg-12 col-xxl-4-5col">
        <div class="row">
            <?php
            if ($banners->num_rows > 0) {
                $count = 0;
                while ($banner = $banners->fetch_object()) {
                    if ($banner->subtitle == "Hottest Deals" || $banner->subtitle == "Deal of the Day") {
            ?>
                        <div class="col-md-6">
                            <div class="banner banner-overlay">
                                <a href="#">
                                    <img src="<?= $banner->image_src ?>" alt="<?= $banner->image_alt ?>">
                                </a>

                                <div class="banner-content">
                                    <h4 class="banner-subtitle text-white d-none d-sm-block"><a href="<?= $banner->link ?>"><?= $banner->subtitle ?></a></h4>
                                    <h3 class="banner-title text-white"><a href="#">
                                            <?php
                                            // make the text into array and divide it using (,) coma 
                                            $title_array = explode(",", $banner->title);
                                            for ($i = 0; $i < count($title_array); $i++) {
                                                if ($i == 0) {
                                                    echo $title_array[$i];
                                                } else {
                                                    echo "<br><span>" . $title_array[$i] . "</span>";
                                                }
                                            }
                                            ?></a></h3>
                                    <a href="<?= $banner->link ?>" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
            <?php
                        $count++;
                        if ($count >= 2) {
                            break;
                        }
                    }
                }
            } ?>
        </div>
    </div>
    <div class="col-12 col-xxl-5col d-none d-xxl-block">
        <div class="banner banner-overlay">
            <a href="#">
                <img src="assets/images/demos/demo-14/banners/banner-4.jpg" alt="Banner img desc">
            </a>

            <div class="banner-content">
                <h4 class="banner-subtitle text-white"><a href="#">Clearance</a></h4><!-- End .banner-subtitle -->
                <h3 class="banner-title text-white"><a href="#">Seating and Tables Clearance</a></h3><!-- End .banner-title -->
                <a href="" class="banner-link">Shop Now <i class="icon-long-arrow-right"></i></a>
            </div><!-- End .banner-content -->
        </div><!-- End .banner banner-overlay -->
    </div>
</div>