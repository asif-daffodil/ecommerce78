<div class="owl-carousel owl-simple brands-carousel" data-toggle="owl" data-owl-options='{
                                "nav": false, 
                                "dots": false,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "420": {
                                        "items":3
                                    },
                                    "600": {
                                        "items":4
                                    },
                                    "900": {
                                        "items":5
                                    },
                                    "1600": {
                                        "items":6,
                                        "nav": true
                                    }
                                }
                            }'>

    <?php
    $query = "SELECT * FROM brands";
    $result = $conn->query($query);
    while ($row = $result->fetch_object()) {
        $imageSrc = $row->image_src;
        $imageAlt = $row->image_alt;
        echo '<a href="javascript:void(0)" class="brand">';
        echo '<img src="' . $imageSrc . '" alt="' . $imageAlt . '">';
        echo '</a>';
    }
    ?>
</div>