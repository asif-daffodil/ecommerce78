<?php
$conn = mysqli_connect("localhost", "root", "", "ecommers78");

// Check if the connection was successful
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['passCatdata']) == "success") {
    // Get the form data
    $catId = $_POST['catId'];
    $catName = $_POST['catName'];
    $catDes = $_POST['catDes'];

    // Perform server-side form validation
    if (empty($catName)) {
        echo "error"; // Return an error message
        exit;
    } elseif (strlen($catDes) > 120) {
        echo "error"; // Return an error message
        exit;
    }

    // Update the category in the database
    $sql = "UPDATE `product_categories` SET `name`='$catName', `description`='$catDes' WHERE `id`=$catId";
    if (mysqli_query($conn, $sql)) {
        echo "success"; // Return success message
    } else {
        echo "error"; // Return error message
    }

    // Close the database connection
    mysqli_close($conn);
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['postData'])) {
    $subCatId = $_POST['subCatId'];
    $upSelectPreCat = $_POST['upSelectPreCat'];
    $subCatName = $_POST['subCatName'];
    $subCatDes = $_POST['subCatDes'];

    $selectAllData = $conn->query("SELECT * FROM `product_categories`");
    while ($fetch = $selectAllData->fetch_object()) {
        $in_array_id[] = $fetch->id;
    }


    if (empty($upSelectPreCat)) {
        $res = array(
            "err"  => 1,
            "err_msg" => "Please Select a Product Main Category",
        );
        exit(json_encode($res));
    } elseif (!in_array($upSelectPreCat, $in_array_id)) {
        $res = array(
            "err"  => 2,
            "err_msg" => "Please Select a Product Main Category",
        );
        exit(json_encode($res));
    } elseif (empty($subCatName)) {
        $res = array(
            "err"  => 3,
            "err_msg" => "Please write a product sub-category!",
        );
        exit(json_encode($res));
    } else {
        if (isset($subCatDes)) {
            if (strlen($subCatDes) > 120) {
                $res = array(
                    "err"  => 4,
                    "err_msg" => "Description cannot be 120 characters long!",
                );
                exit(json_encode($res));
            }
        }

        // Update the sub category in the database
        $sql = $conn->query("UPDATE `sub_category` SET `name`='$subCatName',`cat_id`=$upSelectPreCat,`details`='$subCatDes' WHERE `id` = $subCatId");
        if (!$sql) {
            $res = array(
                "err"  => 5,
                "err_msg" => "Something went wrong!",
            );
            exit(json_encode($res));
        } else {
            $res = array(
                "err"  => 6,
                "err_msg" => "Sub-Category updated successfully!",
            );
            exit(json_encode($res));
        }
    }
}



// update sub sub category
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["postSubSubData"]) == "success") {
    $subSubCatId = $_POST["subSubCatId"];
    $selectPreSubCat = $_POST["selectPreSubCat"];
    $subSubCatName = $_POST["subSubCatName"];
    $subSubCatDes = $_POST["subSubCatDes"];

    $selectAllData = $conn->query("SELECT * FROM `sub_category`");
    while ($fetch = $selectAllData->fetch_object()) {
        $in_array_id[] = $fetch->id;
    }

    if (empty($selectPreSubCat)) {
        echo "error1";
        exit();
    } elseif (!in_array($selectPreSubCat, $in_array_id)) {
        echo "error2";
        exit();
    } elseif (empty($subSubCatName)) {
        echo "error3";
        exit();
    } else {
        if (isset($subSubCatDes)) {
            if (strlen($subSubCatDes) > 120) {
                echo "error4";
                exit();
            }
        }

        $sqlUpdate = $conn->query("UPDATE `sub_sub_cat` SET `name`='$subSubCatName',`sub_cat_id`=$selectPreSubCat,`details`='$subSubCatDes' WHERE `id` = $subSubCatId");
        if (!$sqlUpdate) {
            echo "error5";
            exit();
        } else {
            echo "success";
            exit();
        }
    }
}
