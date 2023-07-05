<?php
include_once("./header.php");
?>
<div id="content">
    <?php
    include_once("./topbar.php");
    ?>
    <div class="container-fluid">
        <h3 class="h3 mb-0 font-weight-bold text-dark mb-3">Product Brands</h3>
        <div class="mb-4">
            <div class="row border-bottom py-5">
                <div class="col-md-6">
                    <h2>Add Brands</h2>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="exampleFormControlFile1">Example file input</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        <div class="mb-3">
                            <select class="form-select form-control">
                                <option>--- Select Sub-sub Category ---</option>
                                <?php
                                $selectSubSubCat = $conn->query("SELECT * FROM `sub_sub_cat`");
                                if ($selectSubSubCat->num_rows > 0) {

                                    while ($fetch_subsubCat = $selectSubSubCat->fetch_assoc()) {
                                ?>
                                        <option value="<?= $fetch_subsubCat['id'] ?>"><?= $fetch_subsubCat['name'] ?></option>

                                    <?php
                                    }
                                } else {
                                    ?>
                                    <option class="text-danger" disabled="disabled">No Sub-sub Category found</option>
                                <?php
                                }
                                ?>
                            </select>
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <input type="text" placeholder="Brand Name" class="form-control" name="name">
                            <div class="invalid-feedback"></div>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control brands_des" placeholder="Description" style="resize: none;"></textarea>
                            <div class="show_value_length_brand d-none">
                                <span class="value_length_brand">0</span>
                                <span class="limit_length">/120</span>
                            </div>
                            <div class="invalid-feedback"></div>
                        </div>
                        <input type="button" value="Add Category" class="btn btn-primary btn-sm">
                    </form>
                </div>
                <?php
                $selectBrands = $conn->query("SELECT * FROM `brands`");
                if ($selectBrands->num_rows > 0) {
                ?>
                    <div class="col-md-6">
                        <table id="allBrands" class="display">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Sub-sub Cat</th>
                                    <th>Category Name</th>
                                    <th>Description</th>
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
                                        <td></td>
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
                                            <button type="button" class="btn btn-sm btn-warning upCatBtn" data-brandName="<?= $data->brand_name ?>" data-brandDes="<?= $data->details ?>" data-brandId="<?= $data->brand_id ?>"><i class=" fas fa-edit"></i></button>
                                            <a href="" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i></a>
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
</div>
<script>
    // text length counter
    const brandsDes = document.querySelector(".brands_des");
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
<?php
include_once("./footer.php");
?>