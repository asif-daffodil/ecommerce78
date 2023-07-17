<?php
$conn = mysqli_connect("localhost", "root", "", "ecommers78");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $singleImageName = $_FILES["singleImage"]["name"] ?? null;
    $singleImageTmpName = $_FILES["singleImage"]["tmp_name"] ?? null;
    $singleImageType = $_FILES["singleImage"]["type"] ?? null;
    $multiImagesName = $_FILES["multiImages"]["name"] ?? null;
    $multiImagesTmpName = $_FILES["multiImages"]["tmp_name"] ?? null;
    $multiImagesType = $_FILES["multiImages"]["type"] ?? null;
    $proName = $_POST['proName'];

    $allowedTypes = array("image/jpeg", "image/png", "image/gif", "image/jpg");

    if (isset($multiImagesTmpName)) {
        foreach ($multiImagesTmpName as $tmpName) {
            if (!getimagesize($tmpName)) {
                $res = array(
                    "error" => true,
                    "msg" => "Please select an valid Image files for the gallery!"
                );
                exit(json_encode($res));
            } else {
                foreach ($multiImagesType as $multiType) {
                    if (!in_array($multiType, $allowedTypes)) {
                        $res = array(
                            "error" => true,
                            "msg" => "Please select an Image file on gallery!"
                        );
                        exit(json_encode($res));
                    }
                }
            }
        }
    }


    if (empty($singleImageTmpName)) {
        $res = array(
            "error" => true,
            "msg" => "Please Select a Product Image!"
        );
        exit(json_encode($res));
    } elseif (!getimagesize($singleImageTmpName)) {
        $res = array(
            "error" => true,
            "msg" => "Please select a valid Image for the single image!"
        );
        exit(json_encode($res));
    } elseif (!in_array($singleImageType, $allowedTypes)) {
        $res = array(
            "error" => true,
            "msg" => "Please Select an Image file!"
        );
        exit(json_encode($res));
    } elseif (empty($multiImagesTmpName)) {
        $res = array(
            "error" => true,
            "msg" => "Please select an Image gallery!"
        );
        exit(json_encode($res));
    } elseif (empty($proName)) {
        $res = array(
            "error" => true,
            "msg" => "Write your product name!"
        );
        exit(json_encode($res));
    } else {
        $a = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        $ext = pathinfo($singleImageName, PATHINFO_EXTENSION);

        $uniqName = "product-" . substr(str_shuffle($a), 0, 8) . uniqid() . rand(100000, 999999) . str_shuffle(date("YMDlmdyhs")) . "." . $ext;
        $destination = "../../../assets/images/products/$uniqName";
        $insertImg = "assets/images/products/$uniqName";

        $move =  move_uploaded_file($singleImageTmpName, $destination);
        if ($move) {
            $insert = $conn->query("INSERT INTO `products`(`featured_img`) VALUES ('$insertImg')");
            if (!$insert) {
                $res = array(
                    "error" => true,
                    "msg" => "Failed to upload featured image!"
                );
                exit(json_encode($res));
            } else {
                $res = array(
                    "error" => false,
                    "msg" => "Featured image uploaded successfully!"
                );
                exit(json_encode($res));
            }
        }
    }
}
