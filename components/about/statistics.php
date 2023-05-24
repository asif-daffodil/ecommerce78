<?php
$query = "SELECT * FROM `statistics`";
$statistics_query = $conn->query($query)
?>
<div class="bg-image pt-7 pb-5 pt-md-12 pb-md-9" style="background-image: url(assets/images/backgrounds/bg-4.jpg)">
    <div class="container">
        <div class="row">
            <?php
            while ($row = $statistics_query->fetch_object()) {


            ?>
                <div class="col-6 col-md-3">
                    <div class="count-container text-center">
                        <div class="count-wrapper text-white">
                            <span class="count" data-from="0" data-to="<?= $row->count_value; ?>" data-speed="3000" data-refresh-interval="50">0</span><?= $row->unit; ?>
                        </div>
                        <h3 class="count-title text-white"><?= $row->title; ?></h3>
                    </div>
                </div>
            <?php } ?>

        </div>


    </div>
</div>