<?php
include_once("./header.php");
$selectSubSubCat = $conn->query("SELECT * FROM `sub_sub_cat`");

// add category work
if (isset($_POST['addcat'])) {
    $name = safeThat($_POST['name']);
    $description = safeThat($_POST['description']);
    if (empty($name)) {
        $errName = "please write your name";
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
        $corr_subDescription = $conn->real_escape_string($subDescription);
    }

    if (isset($corr_SelectPCat) && isset($corr_subName)) {
        $insertSubCat = $conn->query("INSERT INTO `sub_category` (`name`, `cat_id`, `details`) VALUES ('$corr_subName', $corr_SelectPCat, '$corr_subDescription')");

        if ($insertSubCat) {
            $corr_SelectPCat = $corr_subName = $corr_subDescription = null;

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
        $corr_subSubdescription = $conn->real_escape_string($subSubdescription);
    }

    if (isset($corr_selectPreSubCat) && isset($corr_subSubname)) {
        $insertSubSubCat = $conn->query("INSERT INTO `sub_sub_cat` (`name`, `sub_cat_id`, `details`) VALUES ('$corr_subSubname', $corr_selectPreSubCat, '$corr_subSubdescription')");

        if ($insertSubSubCat) {
            $corr_selectPreSubCat = $corr_subSubname = $corr_subSubdescription = null;

            $subSubmsg = "<div class='alert alert-success alert-dismissible fade show shadow' role='alert'><strong>Congratulations!</strong> Sub Sub Categories inserted successfully.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true' style='font-size: 22px;'>&times;</span></button></div>";
        }
    }
}
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
            <div class="row border-bottom pb-3">
                <div class="col-md-6">
                    <h2>Add Category</h2>
                    <?= $msg ?? null ?>
                    <form method="post">
                        <div class="mb-3">
                            <input type="text" placeholder="Category Name" class="form-control <?= isset($errName) ? "is-invalid" : null ?>" name="name">
                            <div class="invalid-feedback"><?= $errName ?? null ?></div>
                        </div>
                        <div class="mb-3">
                            <textarea name="description" class="form-control" placeholder="Category Description" style="resize: none;"></textarea>
                        </div>
                        <input type="submit" name="addcat" value="Add Category" class="btn btn-primary btn-sm">
                    </form>
                </div>
                <div class="col-md-6"></div>
            </div>
        </div>
        <?php
        $selectAllCat = $conn->query("SELECT * FROM `product_categories`");
        if ($selectAllCat->num_rows > 0) {
        ?>
            <!-- add sub cetegory section here -->
            <div class="mb-4">
                <div class="row border-bottom pb-3">
                    <div class="col-md-6">
                        <h2>Add Sub Category</h2>
                        <?= $submsg ?? null ?>
                        <form action="" method="post">
                            <div class="mb-3">
                                <?php
                                if (isset($corr_SelectPCat)) {
                                    $catData = $conn->query("SELECT * FROM `product_categories` WHERE `id` = '$corr_SelectPCat'");
                                    $fetch = $catData->fetch_assoc();
                                }
                                ?>

                                <select name="SelectPCat" class="form-select form-control <?= (isset($err_SelectPCat)) ? "is-invalid" : null ?>">
                                    <option value="<?= $fetch['id'] ?? null ?>"><?= $fetch['name'] ?? "Select Parent Cetagory" ?></option>
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
                                <input type="text" placeholder="Sub Cetagory Name" class="form-control <?= isset($err_subName) ? "is-invalid" : null ?>" name="subName">
                                <div class="invalid-feedback"><?= $err_subName ?? null ?></div>
                            </div>
                            <div class="mb-3">
                                <textarea name="subDescription" class="form-control" placeholder="Sub Cetagory Description" style="resize: none;"></textarea>
                            </div>
                            <input type="submit" name="addsubcat" value="Add Sub Category" class="btn btn-primary btn-sm">
                        </form>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>

            <?php
            $selectSubCat = $conn->query("SELECT * FROM `sub_category`");
            if ($selectSubCat->num_rows > 0) {
            ?>
                <!-- add sub sub cetegory section here -->
                <div class="mb-4">
                    <div class="row border-bottom pb-3">
                        <div class="col-md-6">
                            <h2>Add Sub sub Category</h2>
                            <?= $subSubmsg ?? null ?>
                            <form method="post">
                                <div class="mb-3">
                                    <?php
                                    if (isset($corr_selectPreSubCat)) {
                                        $subCatData = $conn->query("SELECT * FROM `sub_category` WHERE `id` = '$corr_selectPreSubCat'");
                                        $fetch = $subCatData->fetch_assoc();
                                    }
                                    ?>
                                    <select name="selectPSubCat" class="form-select form-control <?= isset($err_selectPreSubCat) ? "is-invalid" : null ?>">
                                        <option value="<?= $fetch['name'] ?? null ?>"><?= $fetch['name'] ?? "Select Parent Sub Cetagory" ?></option>
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
                                    <input type="text" placeholder="Sub Sub Category Name" class="form-control <?= isset($err_subSubname) ? "is-invalid" : null ?>" name="subSubname" value="<?= $corr_subSubname ?? null ?>">
                                    <div class="invalid-feedback"><?= $err_subSubname ?? null ?></div>
                                </div>
                                <div class="mb-3">
                                    <textarea name="subSubdescription" class="form-control" placeholder="Sub Sub Category Description" style="resize: none;"><?= $corr_subSubdescription ?? null ?></textarea>
                                </div>
                                <input type="submit" name="addSubSubcat" value="Add Sub Sub Category" class="btn btn-primary btn-sm">
                            </form>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>

        <?php
            }
        }
        ?>
    </div>
</div>
<script>
    setTimeout(() => {
        Array.from(document.querySelectorAll(".alert")).map(d => d.remove());
    }, 2500)
</script>
<?php
include_once("./footer.php");
?>