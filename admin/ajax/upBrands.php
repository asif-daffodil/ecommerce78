<?php
$conn = mysqli_connect("localhost", "root", "", "ecommers78");


if ($_SERVER["REQUEST_METHOD"] === "POST" && $_POST["upForm"] === "ok") {
    $upBrandsImgName =  $_FILES["upbrandImg"]["name"] ?? null;
    $upbrandImgTmpName =  $_FILES["upbrandImg"]["tmp_name"] ?? null;
    $upbrandImgType =  $_FILES["upbrandImg"]["type"] ?? null;
    $brandId =  $_POST["brandId"];
    $upBrandName =  $_POST["upBrandName"];
    $upBrandDetails =  $_POST["upBrandDetails"];




    if (empty($upBrandName)) {
        $res = array(
            "error" => true,
            "msg" => "Brand name is required!",
        );
        exit(json_encode($res));
    } elseif (empty($upBrandDetails)) {
        $res = array(
            "error" => true,
            "msg" => "Please enter a details about it!",
        );
        exit(json_encode($res));
    } elseif (strlen($upBrandDetails) > 120) {
        $res = array(
            "error" => true,
            "msg" => "Please write a details which have maximum 120 charecters!",
        );
        exit(json_encode($res));
    } else {
        $select_id = $conn->query("SELECT * FROM `brands` WHERE `brand_id` = '$brandId'");
        $fetch = $select_id->fetch_object();
        $fetch_img = $fetch->image_src;
        $fetch_brandName = $fetch->brand_name;

        $update_alt = strtolower($upBrandName);

        $a = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        $ext = pathinfo($upBrandsImgName, PATHINFO_EXTENSION);
        $uniqName = "brand-" . substr(str_shuffle($a), 0, 8) . uniqid()  . rand(100000, 999999) . date("YmdHis") . "." . $ext;

        $image_file_array  = array("image/jpeg", "image/png", "image/gif", "image/jpg");

        if (isset($upBrandsImgName)) {
            if (empty($upbrandImgTmpName)) {
                $res = array(
                    "error" => true,
                    "msg" => "Please select an image file!",
                );
                exit(json_encode($res));
            } elseif (!getimagesize($upbrandImgTmpName)) {
                $res = array(
                    "error" => true,
                    "msg" => "Please select an image file!",
                );
                exit(json_encode($res));
            } elseif (!in_array($upbrandImgType, $image_file_array)) {
                $res = array(
                    "error" => true,
                    "msg" => "Please select an image file!",
                );
                exit(json_encode($res));
            } else {

                $unlink_path = "../../$fetch_img";
                if ($fetch_img !== null) {
                    unlink($unlink_path);
                }

                $directory = "../../assets/images/brands/$uniqName";
                $move  = move_uploaded_file($upbrandImgTmpName, $directory);

                $insert_img_file_name = "assets/images/brands/$uniqName";

                if ($move) {
                    $update_brand = $conn->query("UPDATE `brands` SET `brand_name`='$upBrandName',`image_src`='$insert_img_file_name',`image_alt`='$update_alt',`details`='$upBrandDetails' WHERE `brand_id` = $brandId");

                    if ($update_brand) {
                        $res = array(
                            "error" => false,
                            "msg" => "Brand updated successfully!",
                        );
                        exit(json_encode($res));
                    } else {
                        $res = array(
                            "error" => true,
                            "msg" => "Something went wrong!",
                        );
                        exit(json_encode($res));
                    }
                }
            }
        } elseif (empty($upBrandsImgName)) {

            $update_brand = $conn->query("UPDATE `brands` SET `brand_name`='$upBrandName',`image_alt`='$update_alt',`details`='$upBrandDetails' WHERE `brand_id` = $brandId");

            if ($update_brand) {
                $res = array(
                    "error" => false,
                    "msg" => "Brand updated successfully!",
                );
                exit(json_encode($res));
            } else {
                $res = array(
                    "error" => true,
                    "msg" => "Something went wrong!",
                );
                exit(json_encode($res));
            }
        }
    }
}
