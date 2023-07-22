<?php
include_once("./header.php");
?>
<div id="content">
    <?php
    include_once("./topbar.php")
    ?>
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Products</h1>
        </div>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 text-center font-weight-bold text-primary">
                    Product Data
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Title</th>
                                <th>Regular Price</th>
                                <th>Discount Price</th>
                                <th>Color</th>
                                <th>Size</th>
                                <th>Featured Img</th>
                                <th>Gallery</th>
                                <th>Short Description</th>
                                <th>Description</th>
                                <th>Additional Information</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $selectAllPro = $conn->query("SELECT * FROM `products`");

                            if ($selectAllPro->num_rows > 0) {
                                while ($data = $selectAllPro->fetch_object()) {
                            ?>
                                    <tr>
                                        <td><?= $data->name ?></td>
                                        <td><?= $data->type ?></td>
                                        <td><?= $data->title ?></td>
                                        <td><?= $data->regular_price ?></td>

                                        <?php
                                        // discount price fetch
                                        if ($data->discount_price < 1) {
                                            $fetchDisPrice = "";
                                        } else {
                                            $fetchDisPrice = $data->discount_price;
                                        }
                                        ?>
                                        <td><?= $fetchDisPrice ?></td>

                                        <?php
                                        // fetch the all product colors
                                        $proColor =  $data->color;
                                        $decodedData = json_decode($proColor, true);
                                        if (is_array($decodedData)) {
                                            $result = implode(', ', $decodedData);
                                        } else {
                                            $result = '';
                                        }
                                        ?>
                                        <td><?= $result ?></td>
                                        <?php

                                        // fetch the product all sizes
                                        $proSize = $data->size;
                                        $decodedData = json_decode($proSize);
                                        if (is_array($decodedData)) {
                                            $result = implode(", ", $decodedData);
                                        } else {
                                            $result = "";
                                        }
                                        ?>
                                        <td><?= $result ?></td>
                                        <td><img src="../<?= $data->featured_img ?>" width="100px" alt=""></td>
                                        <td><?= $data->name ?></td>
                                        <td><?= substr(($data->short_description), 0, 50) . "....." ?></td>
                                        <td><?= substr(($data->description), 0, 50) . "....." ?></td>
                                        <td><?= substr(($data->additional_information), 0, 50) . "....." ?></td>
                                    </tr>
                            <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
<?php
include_once("./footer.php");
?>