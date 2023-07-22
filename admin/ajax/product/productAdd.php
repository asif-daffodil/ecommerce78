<?php
function sefuda($data)
{
    $data = htmlspecialchars($data);
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}
$conn = mysqli_connect("localhost", "root", "", "ecommers78");
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $singleImageName = sefuda($_FILES["singleImage"]["name"] ?? null);
    $singleImageTmpName = $_FILES["singleImage"]["tmp_name"] ?? null;
    $singleImageType = sefuda($_FILES["singleImage"]["type"] ?? null);
    $multiImagesName = $_FILES["multiImages"]["name"] ?? null;
    $multiImagesTmpName = $_FILES["multiImages"]["tmp_name"] ?? null;
    $multiImagesType = $_FILES["multiImages"]["type"] ?? null;
    $multiImagesSize = $_FILES["multiImages"]["size"] ?? null;
    $proName = mysqli_real_escape_string($conn, sefuda($_POST['proName']));
    $proTitle = mysqli_real_escape_string($conn, sefuda($_POST['proTitle']));
    $regPrice = mysqli_real_escape_string($conn, sefuda($_POST['regPrice']));
    $disPrice = mysqli_real_escape_string($conn, sefuda($_POST['disPrice'] ?? null));
    $proColor = $_POST['proColor'] ?? null;
    $proSize = $_POST['proSize']  ?? null;
    $selectPCat = sefuda($_POST['selectPCat']);
    $selectPSCat = sefuda($_POST['selectPSCat']);
    $selectPSSCat = sefuda($_POST['selectPSSCat']);
    $selectPBrand = sefuda($_POST['selectPBrand']);
    $offerTime = sefuda($_POST['offerTime'] ?? null);
    $proType = mysqli_real_escape_string($conn, sefuda($_POST['proType']));
    $addProShortDes = $_POST['addProShortDes'];
    $addProDes = $_POST['addProDes'];
    $addInfo = $_POST['addInfo'];

    $allowedTypes = array("image/jpeg", "image/png", "image/gif", "image/jpg");

    $a = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    $ext = pathinfo($singleImageName, PATHINFO_EXTENSION);

    $uniqName = "product-" . substr(str_shuffle($a), 0, 8) . uniqid() . rand(100000, 999999) . str_shuffle(date("YMDlmdyhs")) . "." . $ext;

    $token = bin2hex(random_bytes(16));

    $allowSize = 20 * 1024 * 1024;

    // count multiimage files size
    if (isset($multiImagesTmpName)) {
        foreach ($multiImagesType as $multiType) {
            if (!in_array($multiType, $allowedTypes)) {
                $res = array(
                    "error" => true,
                    "msg" => "Please select an Image file for the gallery!"
                );
                exit(json_encode($res));
            }
        }

        $totalSize  = 0;
        foreach ($multiImagesSize as $oneImgSize) {
            $totalSize += $oneImgSize;
        }
        if ($totalSize >= $allowSize) {
            $res = array(
                "error" => true,
                "msg" => "Image gallery size is within the limit (20MB)!"
            );
            exit(json_encode($res));
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
    } elseif (count($multiImagesTmpName) > 5) {
        $res = array(
            "error" => true,
            "msg" => "You can select only 5 images!"
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
    } elseif (!is_numeric($regPrice)) {
        $res = array(
            "error" => true,
            "msg" => "Please enter a numberic value on regular Price!"
        );
        exit(json_encode($res));
    } elseif (empty($proColor)) {
        $res = array(
            "error" => true,
            "msg" => "Select your product color!"
        );
        exit(json_encode($res));
    } elseif (empty($selectPCat)) {
        $res = array(
            "error" => true,
            "msg" => "Select your product category!"
        );
        exit(json_encode($res));
    } elseif (empty($selectPSCat)) {
        $res = array(
            "error" => true,
            "msg" => "Select your product Sub-category!"
        );
        exit(json_encode($res));
    } elseif (empty($selectPSSCat)) {
        $res = array(
            "error" => true,
            "msg" => "Select your product Sub-sub-category!"
        );
        exit(json_encode($res));
    } elseif (empty($selectPBrand)) {
        $res = array(
            "error" => true,
            "msg" => "Select your product Brand!"
        );
        exit(json_encode($res));
    } elseif (empty($proType)) {
        $res = array(
            "error" => true,
            "msg" => "Select your product type!"
        );
        exit(json_encode($res));
    } elseif ($addProShortDes == "<p><br></p>") {
        $res = array(
            "error" => true,
            "msg" => "Select your product short desciption!"
        );
        exit(json_encode($res));
    } elseif ($addProDes == "<p><br></p>") {
        $res = array(
            "error" => true,
            "msg" => "Select your product desciption!"
        );
        exit(json_encode($res));
    } elseif ($addInfo == "<p><br></p>") {
        $res = array(
            "error" => true,
            "msg" => "Select your product additional information!"
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
            } elseif (!is_dir("../../../assets/images/products/gallery")) {
                mkdir("../../../assets/images/products/gallery");
            }

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

                    move_uploaded_file($tmpName, $destination);

                    $multiImgInsert[] = "assets/images/products/gallery/$multidirectory_name/$uniqGalleryName";
                }
            }
        }
    }
    // Serialize the gallery image array as a JSON string
    $galleryImagesJson = json_encode($multiImgInsert);
    $productColorJson = json_encode($proColor);
    $proSizeJson = json_encode($proSize);

    $insert_multiImg = $conn->query("INSERT INTO `products`( `name`, `title`, `regular_price`, `discount_price`, `short_description`, `color`, `size`, `category_id`, `sub_category_id`, `sub_sub_cat_id`, `brand_id`, `featured_img`, `gallery`, `description`, `additional_information`, `type`, `offer_time`, `token`) VALUES ('$proName','$proTitle',$regPrice,'$disPrice','$addProShortDes','$productColorJson','$proSizeJson','$selectPCat','$selectPSCat','$selectPSSCat','$selectPBrand','$insertImg','$galleryImagesJson','$addProDes','$addInfo','$proType','$offerTime','$token')");
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
