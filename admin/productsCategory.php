<?php
include_once("./header.php");
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
            $msg = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <strong>Yousuf vai er ki biye hoben?
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'><i class='fas fa-times'></i></button>
          </div>";
        } else {
            $msg = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
            <strong>Category added successfully
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'><i class='fas fa-times'></i></button>
          </div>";
        }
    }
}
?>
<div id="content">
    <?php
    include_once("./topbar.php")
    ?>
    <div class="container-fluid">
        <div class="mb-4">
            <h3 class="h3 mb-0 text-gray-800 mb-3">Product Category</h3>
            <div class="row border-bottom pb-3">
                <div class="col-md-6">
                    <h2>Add Category</h2>
                    <?= $msg ?? null ?>
                    <form action="" method="post">
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
    </div>
</div>
<script>
    setTimeout(() => {
        Array.from(document.querySelectorAll(".alert")).map(d => d.remove());
    }, 2000)
</script>
<?php
include_once("./footer.php");
?>