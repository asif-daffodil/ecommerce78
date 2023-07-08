<?php
$conn = mysqli_connect("localhost", "root", "", "ecommers78");
if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['brandAdd'] === "ok") {
    $brand_imgName = $_FILES['brand_img']['name'] ?? null;
    $brand_imgTmpName = $_FILES['brand_img']['tmp_name'] ?? null;
    $fileType = $_FILES['brand_img']['type'] ?? null;
    $fileSize = $_FILES['brand_img']['size'] ?? null;
    $brand_name = $_POST['brand_name'];
    $brands_des = $_POST['brands_des'];

    $allowedTypes = array("image/jpeg", "image/png", "image/gif", "image/jpg");
    $allowedFileSize = 5 * 1024 * 1024; // 5 mb

    $select_brand = $conn->query("SELECT * FROM `brands` WHERE `brand_name` = '$brand_name'");

    if (empty($brand_imgName)) {
        $res = array(
            "error" => true,
            "msg" => "Please select a brand image!"
        );
        exit(json_encode($res));
    } elseif (!getimagesize($brand_imgTmpName)) {
        $res = array(
            "error" => true,
            "msg" => "Please select an image file!"
        );
        exit(json_encode($res));
    } elseif (empty($brand_imgTmpName)) {
        $res = array(
            "error" => true,
            "msg" => "Please select a brand image!"
        );
        exit(json_encode($res));
    } elseif (!in_array($fileType, $allowedTypes)) {
        $res = array(
            "error" => true,
            "msg" => "Please select an image file!"
        );
        exit(json_encode($res));
    } elseif ($fileSize  > $allowedFileSize) {
        $res = array(
            "error" => true,
            "msg" => "Please upload a picture smaller than 5 MB."
        );
        exit(json_encode($res));
    } elseif (empty($brand_name)) {
        $res = array(
            "error" => true,
            "msg" => "Please write a brand name!"
        );
        exit(json_encode($res));
    } elseif ($select_brand->num_rows > 0) {
        $res = array(
            "error" => true,
            "msg" => "Brand already exists!"
        );
        exit(json_encode($res));
    } elseif (empty($brands_des)) {
        $res = array(
            "error" => true,
            "msg" => "Please write a brand desciption!"
        );
        exit(json_encode($res));
    } else {
        $a = "ABCDEFGHIJKLMNOPQRSTUVWabcdefghijklmnopqrstuvwxyz0123456789";
        $ext = pathinfo($brand_imgName, PATHINFO_EXTENSION);
        $uniqName = "brand-" . substr(str_shuffle($a), 0, 8) . uniqid() . rand(100000, 999999) . date("YmdHis") . "." . $ext;
        $location = "../../assets/images/brands/$uniqName";
        $image_src_for_insert = "assets/images/brands/$uniqName";
        $image_alt_for_insert = strtolower($brand_name);

        $move = move_uploaded_file($brand_imgTmpName, $location);

        if ($move) {
            $insert_data = $conn->query("INSERT INTO `brands`(`brand_name`, `image_src`, `image_alt`, `details`) VALUES ('$brand_name', '$image_src_for_insert', '$image_alt_for_insert' , '$brands_des')");

            if (!$insert_data) {
                $res = array(
                    "error" => true,
                    "msg" => "Data can't added!"
                );
                exit(json_encode($res));
            } else {
                $res = array(
                    "error" => false,
                    "msg" => "Brand added successfully!"
                );
                exit(json_encode($res));
            }
        }
    }
}
