<?php
include_once("./header.php");
?>
<div id="content">
    <?php
    include_once("./topbar.php")
    ?>
    <div class="container-fluid">
        <h3 class="h3 mb-0 font-weight-bold text-dark mb-3">Product Brands</h3>
        <div class="mb-4">
            <div class="row border-bottom py-5">
                <div class="col-md-6">
                    <h2>Add Brands</h2>
                    <?= $msg ?? null ?>
                    <form method="post">
                        <div class="mb-3">
                            <input type="text" placeholder="Brand Name" class="form-control <?= isset($errName) ? "is-invalid" : null ?>" name="name" value="<?= $name ?? null ?>">
                            <div class="invalid-feedback"><?= $errName ?? null ?></div>
                        </div>
                        <div class="mb-3">
                            <textarea name="description" class="form-control cat_des_textarea <?= isset($errDes) ? "is-invalid" : null ?>" placeholder="Description" style="resize: none;"><?= $description ?? null ?></textarea>
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
<?php
include_once("./footer.php");
?>