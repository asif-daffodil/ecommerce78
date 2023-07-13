<?php
include_once("./header.php");
$selectSubSubCat = $conn->query("SELECT * FROM `sub_sub_cat`");

// add category work
if (isset($_POST['addcat'])) {
    $name = safeThat($_POST['name']);
    $description = safeThat($_POST['description']);

    if (empty($name)) {
        $errName = "please write your name";
    } elseif (strlen($description) > 120) {
        $errDes = "Your description should be 20 character.";
    } else {
        $name = $conn->real_escape_string($name);
        $description = $conn->real_escape_string($description);
        $insertCat = $conn->query("INSERT INTO `product_categories` (`name`, `description`) VALUES ('$name', '$description')");
        if (!$insertCat) {
            $msg = "<div class='alert alert-danger alert-dismissible fade show shadow' role='alert'><strong>Something went Wrong!</strong>Failed to insert.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true' style='font-size: 22px;'>&times;</span></button></div>";
        } else {
            $name = $description = null;

            $msg = "<div class='alert alert-success alert-dismissible fade show shadow' role='alert'><strong>Congratulations!</strong> Categories inserted successfully.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true' style='font-size: 22px;'>&times;</span></button></div>";
        }
    }
}

// sub cetagory work
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addsubcat'])) {
    $SelectPCat  = safethat($_POST['SelectPCat'] ?? null);
    $subName  = safethat($_POST['subName']);
    $subDescription  = safethat($_POST['subDescription']);

    $selectAllData = $conn->query("SELECT * FROM `product_categories`");
    while ($fetch = $selectAllData->fetch_object()) {
        $in_array_id[] = $fetch->id;
    }

    if (empty($SelectPCat)) {
        $err_SelectPCat = "Please select a parent category!";
    } elseif (!in_array($SelectPCat, $in_array_id)) {
        $err_SelectPCat = "Don't try to be over smart!";
    } else {
        $corr_SelectPCat = $conn->real_escape_string($SelectPCat);
    }

    if (empty($subName)) {
        $err_subName = "Please Write a Sub Name!";
    } else {
        $corr_subName = $conn->real_escape_string($subName);
    }

    if (isset($subDescription)) {
        if (strlen($subDescription) > 120) {
            $err_subDescription = "Your description should be 120 character long.";
        } else {
            $corr_subDescription = $conn->real_escape_string($subDescription);
        }
    }

    if (isset($corr_SelectPCat) && isset($corr_subName) && !isset($err_subDescription)) {
        $insertSubCat = $conn->query("INSERT INTO `sub_category` (`name`, `cat_id`, `details`) VALUES ('$corr_subName', $corr_SelectPCat, '$corr_subDescription')");

        if ($insertSubCat) {
            $SelectPCat = $subName = $subDescription = null;

            $submsg = "<div class='alert alert-success alert-dismissible fade show shadow' role='alert'><strong>Congratulations!</strong> Sub Categories inserted successfully.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true' style='font-size: 22px;'>&times;</span></button></div>";
        }
    }
}


// sub sub cetagory work
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addSubSubcat'])) {
    $selectPreSubCat = safeThat($_POST['selectPSubCat'] ?? null);
    $subSubname = safeThat($_POST['subSubname']);
    $subSubdescription = safeThat($_POST['subSubdescription']);

    $selectAllData = $conn->query("SELECT * FROM `sub_category`");
    while ($fetch = $selectAllData->fetch_object()) {
        $in_array_id[] = $fetch->id;
    }

    if (empty($selectPreSubCat)) {
        $err_selectPreSubCat = "Please select a parent sub category!";
    } elseif (!in_array($selectPreSubCat, $in_array_id)) {
        $err_selectPreSubCat = "Don't try to be over smart!";
    } else {
        $corr_selectPreSubCat = $conn->real_escape_string($selectPreSubCat);
    }

    if (empty($subSubname)) {
        $err_subSubname = "Please Write a Sub Sub Category Name!";
    } else {
        $corr_subSubname = $conn->real_escape_string($subSubname);
    }

    if (isset($subSubdescription)) {
        if (strlen($subSubdescription) > 120) {
            $err_subSubdescription = "Your description should be 120 character long.";
        } else {
            $corr_subSubdescription = $conn->real_escape_string($subSubdescription);
        }
    }

    if (isset($corr_selectPreSubCat) && isset($corr_subSubname) && !isset($err_subSubdescription)) {
        $insertSubSubCat = $conn->query("INSERT INTO `sub_sub_cat` (`name`, `sub_cat_id`, `details`) VALUES ('$corr_subSubname', $corr_selectPreSubCat, '$corr_subSubdescription')");

        if ($insertSubSubCat) {
            $selectPreSubCat = $subSubname = $subSubdescription = null;

            $subSubmsg = "<div class='alert alert-success alert-dismissible fade show shadow' role='alert'><strong>Congratulations!</strong> Sub Sub Categories inserted successfully.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true' style='font-size: 22px;'>&times;</span></button></div>";
        }
    }
}

//mysql query to select all from category table
$proCat = $conn->query("SELECT * FROM `product_categories` ORDER BY `id` DESC");

$proSubCatwithLinked = $conn->query("SELECT sub_category.*, product_categories.name AS cat_name
FROM sub_category
JOIN product_categories ON sub_category.cat_id = product_categories.id
ORDER BY sub_category.id DESC;
");

$proSubSubCatwithLinked = $conn->query("SELECT sub_sub_cat.*, sub_category.name AS sub_cat_name
FROM sub_sub_cat
JOIN sub_category ON sub_sub_cat.sub_cat_id = sub_category.id
ORDER BY sub_sub_cat.`id` DESC");
?>
<style>
    .form-select.is-invalid,
    .was-validated .form-select:invalid {
        background-position: right calc(1.375em + 0.1875rem) center;
    }
</style>
<div id="content">
    <?php
    include_once("./topbar.php")
    ?>
    <div class="container-fluid">
        <!-- add Category section-->
        <h3 class="h3 mb-0 font-weight-bold text-dark mb-3">Product Category</h3>
        <div class="mb-4">
            <div class="row border-bottom py-5">
                <div class="col-md-6">
                    <h2>Add Category</h2>
                    <?= $msg ?? null ?>
                    <form method="post">
                        <div class="mb-3">
                            <input type="text" placeholder="Category Name" class="form-control <?= isset($errName) ? "is-invalid" : null ?>" name="name" value="<?= $name ?? null ?>">
                            <div class="invalid-feedback"><?= $errName ?? null ?></div>
                        </div>
                        <div class="mb-3">
                            <textarea name="description" class="form-control cat_des_textarea <?= isset($errDes) ? "is-invalid" : null ?>" placeholder="Category Description" style="resize: none;"><?= $description ?? null ?></textarea>
                            <div class="show_value_length d-none">
                                <span class="value_length">0</span>
                                <span class="limit_length">/120</span>
                            </div>
                            <div class="invalid-feedback"><?= $errDes ?? null ?></div>
                        </div>
                        <input type="submit" name="addcat" value="Add Category" class="btn btn-primary btn-sm">
                    </form>
                </div>
                <?php if ($proCat->num_rows > 0) {
                ?>
                    <div class="col-md-6">
                        <table id="mainCat" class="display">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Category Name</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sn = 1;
                                $snButton = 1;
                                while ($data = $proCat->fetch_object()) { ?>
                                    <tr>
                                        <td><?= $sn++ ?></td>
                                        <td><?= $data->name ?></td>
                                        <td>
                                            <?php
                                            if (($data->description)) {
                                                echo substr($data->description, 0, 4) . "....";
                                            }
                                            ?>
                                        </td>
                                        <td>
                                            <button type="button" class="btn btn-sm btn-warning upCatBtn" data-catName="<?= $data->name ?>" data-catDes="<?= $data->description ?>" data-catId="<?= $data->id ?>"><i class=" fas fa-edit"></i></button>
                                            <button type="button" data-catId="<?= $data->id ?>" class="btn btn-sm btn-danger dltcat" data-catWhich="main category" data-serialNo="<?= $snButton++ ?>"><i class="far fa-trash-alt"></i></button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                <?php } ?>
            </div>
        </div>
        <?php
        $selectAllCat = $conn->query("SELECT * FROM `product_categories`");
        if ($selectAllCat->num_rows > 0) {
        ?>
            <!-- add sub cetegory section here -->
            <div class="mb-4">
                <div class="row border-bottom py-5">
                    <div class="col-md-6">
                        <h2>Add Sub Category</h2>
                        <?= $submsg ?? null ?>
                        <form action="" method="post">
                            <div class="mb-3">
                                <select name="SelectPCat" class="form-select form-control <?= (isset($err_SelectPCat)) ? "is-invalid" : null ?>">
                                    <option value="<?= $SelectPCat ?? null ?>"><?= !empty($SelectPCat) ? $SelectPCat : "Select Parent Cetagory" ?></option>
                                    <?php
                                    while ($Cat_Fetch = $selectAllCat->fetch_object()) {
                                    ?>
                                        <option value="<?= $Cat_Fetch->id ?>"><?= $Cat_Fetch->name ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                <div class="invalid-feedback"><?= $err_SelectPCat ?? null ?></div>
                            </div>
                            <div class="mb-3">
                                <input type="text" placeholder="Sub Cetagory Name" class="form-control <?= isset($err_subName) ? "is-invalid" : null ?>" name="subName" value="<?= $subName ?? null ?>">
                                <div class="invalid-feedback"><?= $err_subName ?? null ?></div>
                            </div>
                            <div class="mb-3">
                                <textarea name="subDescription" class="form-control cat_des_textarea2 <?= isset($err_subDescription) ? "is-invalid" : null ?>" placeholder="Sub Cetagory Description" style="resize: none;"><?= $subDescription ?? null ?></textarea>
                                <div class="show_value_length2 d-none">
                                    <span class="value_length2">0</span>
                                    <span class="limit_length2">/120</span>
                                </div>
                                <div class="invalid-feedback"><?= $err_subDescription ?? null ?></div>
                            </div>
                            <input type="submit" name="addsubcat" value="Add Sub Category" class="btn btn-primary btn-sm">
                        </form>
                    </div>
                    <?php
                    if ($proSubCatwithLinked->num_rows > 0) { ?>
                        <div class="col-md-6">
                            <table id="mainSubCat" class="display">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Parent Cat</th>
                                        <th>Sub-Cat Name</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sn = 1;
                                    $snButton = 1;
                                    while ($data = $proSubCatwithLinked->fetch_object()) { ?>
                                        <tr>
                                            <td><?= $sn++ ?></td>
                                            <td><?= $data->cat_name ?></td>
                                            <td><?= $data->name ?></td>
                                            <td>
                                                <?php
                                                if (($data->details)) {
                                                    echo substr($data->details, 0, 4) . "....";
                                                }
                                                ?>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-warning upSubCatBtn" data-catName="<?= $data->name ?>" data-catDes="<?= $data->details ?>" data-catId="<?= $data->id ?>" data-selectId="<?= $data->cat_id ?>" data-selectName="<?= $data->cat_name ?>"><i class=" fas fa-edit"></i></button>
                                                <button type="button" data-catId="<?= $data->id ?>" class="btn btn-sm btn-danger dltcat" data-catWhich="sub category" data-serialNo="<?= $snButton++ ?>"><i class="far fa-trash-alt"></i></button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    <?php } ?>

                </div>
            </div>

            <?php
            $selectSubCat = $conn->query("SELECT * FROM `sub_category`");
            if ($selectSubCat->num_rows > 0) {
            ?>
                <!-- add sub sub cetegory section here -->
                <div class="mb-4">
                    <div class="row border-bottom py-5">
                        <div class="col-md-6">
                            <h2>Add Sub sub Category</h2>
                            <?= $subSubmsg ?? null ?>
                            <form method="post">
                                <div class="mb-3">
                                    <select name="selectPSubCat" class="form-select form-control <?= isset($err_selectPreSubCat) ? "is-invalid" : null ?>">
                                        <option value="<?= $selectPreSubCat ?? null ?>"><?= !empty($selectPreSubCat) ? $selectPreSubCat : "Select Parent Sub Cetagory" ?></option>
                                        <?php
                                        while ($SubCat_Fetch = $selectSubCat->fetch_object()) {
                                        ?>
                                            <option value="<?= $SubCat_Fetch->id ?>"><?= $SubCat_Fetch->name ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                    <div class="invalid-feedback"><?= $err_selectPreSubCat ?? null ?></div>
                                </div>
                                <div class="mb-3">
                                    <input type="text" placeholder="Sub Sub Category Name" class="form-control <?= isset($err_subSubname) ? "is-invalid" : null ?>" name="subSubname" value="<?= $subSubname ?? null ?>">
                                    <div class="invalid-feedback"><?= $err_subSubname ?? null ?></div>
                                </div>
                                <div class="mb-3">
                                    <textarea name="subSubdescription" class="form-control cat_des_textarea3 <?= isset($err_subSubdescription) ? "is-invalid" : null ?>" placeholder="Sub Sub Category Description" style="resize: none;"><?= $subSubdescription ?? null ?></textarea>
                                    <div class="show_value_length3 d-none">
                                        <span class="value_length3">0</span>
                                        <span>/120</span>
                                    </div>
                                    <div class="invalid-feedback"><?= $err_subDescription ?? null ?></div>
                                </div>
                                <input type="submit" name="addSubSubcat" value="Add Sub Sub Category" class="btn btn-primary btn-sm">
                            </form>
                        </div>
                        <?php if ($proSubSubCatwithLinked->num_rows > 0) {
                        ?>
                            <div class="col-md-6">
                                <table id="mainSubSubCat" class="display">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Parent Cat</th>
                                            <th>Category Name</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sn = 1;
                                        $snButton = 1;
                                        while ($data = $proSubSubCatwithLinked->fetch_object()) { ?>
                                            <tr>
                                                <td><?= $sn++ ?></td>
                                                <td><?= $data->sub_cat_name ?></td>
                                                <td><?= $data->name ?></td>
                                                <td>
                                                    <?php
                                                    if (($data->details)) {
                                                        echo substr($data->details, 0, 4) . "....";
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <!-- update button -->
                                                    <button type="button" class="btn btn-sm btn-warning upSubSubCatBtn" data-catName="<?= $data->name ?>" data-catDes="<?= $data->details ?>" data-catId="<?= $data->id ?>" data-selectId="<?= $data->sub_cat_id ?>" data-selectName="<?= $data->sub_cat_name ?>"><i class=" fas fa-edit"></i></button>
                                                    <!-- delete button -->
                                                    <button type="button" data-catId="<?= $data->id ?>" class="btn btn-sm btn-danger dltcat" data-catWhich="sub-sub category" data-serialNo="<?= $snButton++ ?>"><i class="far fa-trash-alt"></i></button>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } ?>
                    </div>
                </div>

        <?php
            }
        }
        ?>
    </div>
</div>

<!-- bootstrap 4 modal div main chategory update modal -->
<div class="modal fade" id="mainCatModal" tabindex="-1" role="dialog" aria-labelledby="mainCatModal123" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white shadow">
                <h5 class="modal-title" id="mainCatModal123">Update Category</h5>
                <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close" style="outline: none;">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-success" id="smsg"></div>
                <form method="post" id="updateCatForm">
                    <input type="hidden" id="catId">
                    <div class="mb-3">
                        <input type="text" placeholder="Category Name" class="form-control" id="catName">
                        <div class="invalid-feedback"></div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control cat_des_textarea " placeholder="Category Description" style="resize: none;" id="catDes"></textarea>
                        <div class="invalid-feedback"></div>
                        <div class="show_value_length d-none">
                            <span class="value_length">0</span>
                            <span class="limit_length">/120</span>
                        </div>
                    </div>
                    <input type="submit" value="Update Category" class="btn btn-primary btn-sm">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- sub chategory update modal -->
<div class="modal fade" id="mainSubCatModal" tabindex="-1" role="dialog" aria-labelledby="mainSubCatModal" aria-hidden="true" style="z-index: 99999999">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white shadow">
                <h5 class="modal-title fw-bold" id="mainSubCatModal123">Update Sub-Category</h5>
                <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close" style="outline: none;">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-success" id="upSubCatSuccMsg"></div>
                <form method="POST">
                    <input type="hidden" id="subCatId">
                    <?php
                    $selectAllCat = $conn->query("SELECT * FROM `product_categories`");
                    if ($selectAllCat->num_rows > 0) {
                    ?>
                        <div class="mb-3">
                            <select id="upSelectPreCat" class="form-select form-control">
                                <option id="selected_pre_cat_id">Select Parent Cetagory</option>
                                <?php
                                while ($allCat = $selectAllCat->fetch_object()) {
                                ?>
                                    <option value="<?= $allCat->id ?>"><?= $allCat->name ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <div class="invalid-feedback upSelectPreCatErrormsg"></div>
                        </div>
                    <?php
                    } ?>
                    <div class="mb-3">
                        <input type="text" placeholder="Category Name" class="form-control" id="subCatName">
                        <div class="invalid-feedback subCatNameErrMsg"></div>
                    </div>
                    <div class="mb-3">
                        <textarea name="description" class="form-control cat_des_textarea" placeholder="Category Description" style="resize: none;" id="subCatDes"></textarea>
                        <div class="show_value_length d-none">
                            <span class="value_length">0</span>
                            <span class="limit_length">/120</span>
                        </div>
                        <div class="invalid-feedback subCatDesUpdate"></div>
                    </div>
                    <button type="button" id="upSubCat" class="btn btn-primary btn-sm">Update Sub-Category</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- sub sub chategory update modal -->
<div class="modal fade" id="SubSubCatModal" tabindex="-1" role="dialog" aria-labelledby="SubSubCatModal1923" aria-hidden="true" style="z-index: 99999999">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white shadow">
                <h5 class="modal-title fw-bold" id="SubSubCatModal1923">Update Sub-sub-Category</h5>
                <button class="close text-white" type="button" data-dismiss="modal" aria-label="Close" style="outline: none;">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="text-success" id="upSubSubCatSuccMsg"></div>
                <form method="POST">
                    <input type="hidden" id="subSubCatId">
                    <?php
                    $selectSubCat = $conn->query("SELECT * FROM `sub_category`");
                    if ($selectSubCat->num_rows > 0) {
                    ?>
                        <div class="mb-3">
                            <select class="form-select form-control selectPreSubCat">
                                <option id="upSelectPreSubCat"></option>Select Parent Sub Cetagory</option>
                                <?php
                                while ($SubCat_Fetch = $selectSubCat->fetch_object()) {
                                ?>
                                    <option value="<?= $SubCat_Fetch->id ?>"><?= $SubCat_Fetch->name ?></option>
                                <?php
                                }
                                ?>
                            </select>
                            <div class="invalid-feedback selectPreSubCat"></div>
                        </div>
                    <?php
                    }
                    ?>

                    <div class="mb-3">
                        <input type="text" placeholder="Category Name" class="form-control" id="subSubCatName">
                        <div class="invalid-feedback subSubCatNameErrMsg"></div>
                    </div>
                    <div class="mb-3">
                        <textarea name="description" class="form-control cat_des_textarea" placeholder="Category Description" style="resize: none;" id="subSubCatDes"></textarea>
                        <div class="invalid-feedback subSubCatDesUpdate"></div>
                        <div class="show_value_length d-none">
                            <span class="value_length">0</span>
                            <span class="limit_length">/120</span>
                        </div>

                    </div>
                    <button type="button" id="upSubSubCat" class="btn btn-primary btn-sm">Update Sub-Category</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Category delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalTitle">Delete Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Are you sure that you will delete the data number <span id="dltCatSerialNo" class="text-danger"></span> of the <span id="dltCatWhich" class="text-warning"></span>?</h4>
                <span class="allDltMsg text-danger"></span>
                <form>
                    <input type="hidden" id="getCatIdAttr">
                    <input type="hidden" id="getWhichCatAttr">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="button" id="deleteCat" class="btn btn-danger"><i class="far fa-trash-alt"></i> Delete</button>
            </div>
        </div>
    </div>
</div>
<script>
    setTimeout(() => {
        Array.from(document.querySelectorAll(".alert")).map(d => d.remove());
    }, 2500)
</script>

<!-- modal update chategory scripts -->
<script src="./js/custom/upCatModal.js?<?= time(); ?>"></script>

<!-- character length counter -->
<script src="./js/custom/characterCount.js?<?= time(); ?>"></script>


<!-- modal update chategory scripts -->
<script src="./js/custom/upCatModal.js?<?= time(); ?>"></script>

<!-- modal delete category scripts -->
<script src="./js/custom/dltCatModal.js?<?= time(); ?>"></script>
<?php
include_once("./footer.php");
?>