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
    $proTitle = $_POST['proTitle'];
    $regPrice = $_POST['regPrice'];
    $disPrice = $_POST['disPrice'] ?? null;
    $proColor = $_POST['proColor'];
    $proColor = $_POST['proSize'];

    $allowedTypes = array("image/jpeg", "image/png", "image/gif", "image/jpg");

    $a = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $ext = pathinfo($singleImageName, PATHINFO_EXTENSION);

    $uniqName = "product-" . substr(str_shuffle($a), 0, 8) . uniqid() . rand(100000, 999999) . str_shuffle(date("YMDlmdyhs")) . "." . $ext;
    $token = bin2hex(random_bytes(16));

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
    } elseif (empty($proTitle)) {
        $res = array(
            "error" => true,
            "msg" => "Write a product title!"
        );
        exit(json_encode($res));
    } elseif (empty($regPrice)) {
        $res = array(
            "error" => true,
            "msg" => "Regular price required!"
        );
        exit(json_encode($res));
    } elseif (empty($proColor)) {
        $res = array(
            "error" => true,
            "msg" => "Select your product color!"
        );
        exit(json_encode($res));
    } else {
        $destination = "../../../assets/images/products/$uniqName";
        $insertImg = "assets/images/products/$uniqName";

        if (isset($singleImageTmpName) || isset($multiImagesTmpName)) {
            move_uploaded_file($singleImageTmpName, $destination);

            $multidirectory_name = "Gallery" . uniqid() . substr(str_shuffle($a), 0, 4);
            if (!is_dir("../../../assets/images/products/gallery/$multidirectory_name")) {
                mkdir("../../../assets/images/products/gallery/$multidirectory_name");
            }

            // Calculate total gallery size
            $totalGallerySize = 0;
            foreach ($multiImagesTmpName as $key => $tmpName) {
                if (!getimagesize($tmpName)) {
                    $res = array(
                        "error" => true,
                        "msg" => "Please select a valid Image files for the gallery!"
                    );
                    exit(json_encode($res));
                } else {
                    $ext = pathinfo($multiImagesName[$key], PATHINFO_EXTENSION);
                    $uniqGalleryName = "gallery-" . substr(str_shuffle($a), 0, 8) . uniqid() . rand(100000, 999999) . str_shuffle(date("YMDlmdyhs")) . "." . $ext;
                    $destination = "../../../assets/images/products/gallery/$multidirectory_name/$uniqGalleryName";

                    // Check the size of each gallery image
                    $fileSize = filesize($tmpName);
                    $totalGallerySize += $fileSize;

                    if ($totalGallerySize > (50 * 1024 * 1024)) { // 60MB in bytes
                        $res = array(
                            "error" => true,
                            "msg" => "Total gallery file size cannot exceed 60MB!"
                        );
                        exit(json_encode($res));
                    }

                    move_uploaded_file($tmpName, $destination);

                    $multiImgInsert[] = "assets/images/products/gallery/$multidirectory_name/$uniqGalleryName";
                }
            }
            foreach ($multiImagesType as $multiType) {
                if (!in_array($multiType, $allowedTypes)) {
                    $res = array(
                        "error" => true,
                        "msg" => "Please select an Image file for the gallery!"
                    );
                    exit(json_encode($res));
                }
            }
        }
    }
    // Serialize the gallery image array as a JSON string
    $galleryImagesJson = json_encode($multiImgInsert);

    $insert_multiImg = $conn->query("INSERT INTO `products`(`name`,`title`,`regular_price`,`discount_price`,`color`,`featured_img`,`gallery`,`token`) VALUES ('$proName','$proTitle','$regPrice','$disPrice','$proColor','$insertImg','$galleryImagesJson','$token')");
    if (!$insert_multiImg) {
        $res = array(
            "error" => true,
            "msg" => "Something Went Wrong!"
        );
        exit(json_encode($res));
    } else {
        $res = array(
            "error" => false,
            "msg" => "Data Uploaded successfully!"
        );
        exit(json_encode($res));
    }
}
