<?php
$conn = mysqli_connect("localhost", "root", "", "ecommers78");

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['getWhichCatAttr']) && isset($_GET['getCatIdAttr']) && isset($_GET['dltRequest']) == "success") {

    $getId = $_GET['getCatIdAttr'];
    $getWhichCat = $_GET['getWhichCatAttr'];

    $selectMainCat = $conn->query("SELECT * FROM `product_categories`");
    while ($fetch = $selectMainCat->fetch_object()) {
        $in_array_id1[] = $fetch->id;
    }
    $selectSubCat = $conn->query("SELECT * FROM `sub_category`");
    while ($fetch = $selectSubCat->fetch_object()) {
        $in_array_id2[] = $fetch->id;
    }
    $selectSubSubCat = $conn->query("SELECT * FROM `sub_sub_cat`");
    while ($fetch = $selectSubSubCat->fetch_object()) {
        $in_array_id3[] = $fetch->id;
    }


    if ($getWhichCat === "main category") {

        if (!in_array($getId, $in_array_id1)) {
            echo "error";
            exit();
        }

        // if the child foreign key exists then show error message
        $deleteCat = $conn->query("DELETE FROM product_categories
        WHERE id = $getId
          AND NOT EXISTS (
            SELECT 1
            FROM sub_category
            WHERE cat_id = $getId
          )
          AND NOT EXISTS ( 
            SELECT 1 FROM products WHERE category_id = $getId
        );");

        if ($deleteCat) {
            if ($conn->affected_rows > 0) {
                echo "deleted";
                exit();
            } else {
                echo "exists_child";
                exit();
            }
        }
    } elseif ($getWhichCat === "sub category") {
        if (!in_array($getId, $in_array_id2)) {
            echo "error";
            exit();
        }
        // if the child foreign key exists then show error message
        $deleteSubCat = $conn->query("DELETE FROM sub_category
        WHERE id = $getId
          AND NOT EXISTS (
            SELECT 1
            FROM sub_sub_cat
            WHERE sub_cat_id = $getId
          );");

        if ($deleteSubCat) {
            if ($conn->affected_rows > 0) {
                echo "deleted";
                exit();
            } else {
                echo "exists_child";
                exit();
            }
        }
    } elseif ($getWhichCat === "sub-sub category") {

        if (!in_array($getId, $in_array_id3)) {
            echo "error";
            exit();
        }

        // if the child foreign key exists then show error message
        $deleteSubSubCat = $conn->query("DELETE FROM `sub_sub_cat`
        WHERE `id` = $getId");
        if ($deleteSubSubCat) {
            if ($conn->affected_rows > 0) {
                echo "deleted";
                exit();
            } else {
                echo "exists_child";
                exit();
            }
        }
    }
}
