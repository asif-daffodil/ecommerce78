<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $singleImageName = $_FILES["singleImage"]["name"] ?? null;
    $singleImageTmpName = $_FILES["singleImage"]["tmp_name"] ?? null;
    $multiImagesName = $_FILES["multiImages"]["name"] ?? null;
    $multiImagesTmpName = $_FILES["multiImages"]["tmp_name"] ?? null;

    if (empty($singleImageTmpName)) {
        $res = array(
            "error" => true,
            "msg" => "Please Select a Product Image!"
        );
        echo json_encode($res);
    } elseif (!getimagesize($singleImageTmpName)) {
        $res = array(
            "error" => true,
            "msg" => "Please select an Image!"
        );
        echo json_encode($res);
    } elseif (empty($multiImagesTmpName)) {
        $res = array(
            "error" => true,
            "msg" => "Please select an Image gallery!"
        );
        echo json_encode($res);
    } elseif (!getimagesize($multiImagesTmpName)) {
        $res = array(
            "error" => true,
            "msg" => "Please an Image file!"
        );
        echo json_encode($res);
    }
}
