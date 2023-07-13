<?php
$conn = mysqli_connect("localhost", "root", "", "ecommers78");
($_GET['getSuccess'] !== "success") ? header("location:javascript://history.go(-1)") : null;

if ($_SERVER['REQUEST_METHOD'] === 'GET' && $_GET['getSuccess'] == 'success') {
    $brandId = $_GET['brandId'];

    $selectBrand = $conn->query("SELECT * FROM `brands` WHERE `brand_id` = $brandId");
    $fetch = $selectBrand->fetch_assoc();
    $image_Fetch = $fetch['image_src'];
    $unlink = "../../" . $image_Fetch;

    if ($selectBrand->num_rows !== 1) {
        echo "error";
        exit();
    } else {
        unlink($unlink);
        $dltQurey = $conn->query("DELETE FROM `brands` WHERE `brand_id` = $brandId");
        if ($dltQurey) {
            echo "success";
            exit();
        }
    }
}
