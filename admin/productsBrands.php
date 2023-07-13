<?php
include_once("./header.php");
?>
<div id="content">
    <?php
    include_once("./topbar.php");
    ?>
    <div class="container-fluid">
        <div class="row border-bottom py-5">
            <div class="col-md-6">
                <h2>Add Brands</h2>
                <br>
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <input type="file" id="brand_img" class="form-control-file">
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Brand Name" class="form-control" id="brand_name">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="brands_des" placeholder="Description" style="resize: none;"></textarea>
                        <div class="d-none show_value_length_brand">
                            <span class="value_length_brand">0</span>
                            <span class="limit_length">/120</span>
                        </div>
                        <div class="invalid-feedback"></div>
                    </div>
                    <input type="button" id="add_Brand" value="Add Brand" class="btn btn-primary btn-sm">
                </form>
            </div>
            <?php
            $selectBrands = $conn->query("SELECT * FROM `brands`  ORDER BY `brand_id` DESC");
            if ($selectBrands->num_rows > 0) {
            ?>
                <div class="col-md-6 my-5 my-md-0 table-responsive">
                    <table class="table table-bordered" id="allBrands" class="display">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Brand Name</th>
                                <th>Details</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sn = 1;
                            while ($data = $selectBrands->fetch_object()) { ?>
                                <tr>
                                    <td><?= $sn++ ?></td>
                                    <td><?= $data->brand_name ?></td>
                                    <td>
                                        <?php
                                        if (($data->details)) {
                                            echo substr($data->details, 0, 4) . "....";
                                        }
                                        ?>
                                    </td>
                                    <td>
                                        <img width="100px" src="../<?= $data->image_src ?>" alt="<?= $data->image_alt ?>">
                                    </td>
                                    <td>
                                        <!-- update button -->
                                        <button type="button" class="btn btn-sm btn-warning upBrandBtn" data-brandName="<?= $data->brand_name ?>" data-brandDes="<?= $data->details ?>" data-brandId="<?= $data->brand_id ?>" data-brandImg="<?= $data->image_src ?>"><i class=" fas fa-edit"></i></button>
                                        <!-- delete button -->
                                        <button type="button" class="btn btn-sm btn-danger dltBrand" data-brandId="<?= $data->brand_id ?>"><i class=" far fa-trash-alt"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<!-- update brands modal -->
<div class="modal fade" id="updateBrands" tabindex="-1" role="dialog" aria-labelledby="updateBrandsModal" aria-hidden="true" style="z-index: 99999999">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white shadow">
                <h5 class="modal-title fw-bold" id="updateBrandsModal123">Update Brand</h5>
                <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close" style="outline: none;">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="brands_Id">
                    <div class="mb-3 text-center">
                        <label for="updateImageSrc">
                            <img width="100px" style="border: 1px solid #ddd; padding:10px" alt="" id="brand_imgModalSrc">
                        </label>
                        <input type="file" class="d-none" id="updateImageSrc">
                        <span class="d-block">Click to change image</span>
                    </div>
                    <div class="mb-3">
                        <input type="text" placeholder="Brand Name" class="form-control" id="update_brandName">
                    </div>
                    <div class="mb-3">
                        <textarea name="description" class="form-control cat_des_textarea" placeholder="Category Description" style="resize: none;" id="update_brandDetails"></textarea>
                    </div>
                    <span class="text-danger my-3 d-block" id="upBrandError"></span>
                    <button type="button" id="upBrandData" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    const brandsDes = document.querySelector("#brands_des");
    const showValueLengthBrand = document.querySelector(".show_value_length_brand"),
        valueLengthBrand = showValueLengthBrand.querySelector(".value_length_brand");

    brandsDes.addEventListener("keyup", () => {
        const brandValue = brandsDes.value.length;

        valueLengthBrand.innerHTML = brandValue;

        showValueLengthBrand.classList.remove("text-danger");
        showValueLengthBrand.classList.remove("d-block");
        showValueLengthBrand.classList.add("d-none");

        if (brandValue > 0) {
            showValueLengthBrand.classList.add("d-block");
            showValueLengthBrand.classList.remove("d-none");
        }
        if (brandValue > 120) {
            showValueLengthBrand.classList.add("text-danger");
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- insert brand_id -->
<script src="./js/custom/addBrand.js?<?= time(); ?>"></script>

<!-- update Brand -->
<script src="./js/custom/updateBrand.js?<?= time(); ?>"></script>

<!-- delete brand -->
<script src="./js/custom/dltBrand.js?<?= time(); ?>"></script>

<?php
include_once("./footer.php");
?>