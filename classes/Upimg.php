<?php
include_once("../db.php");

class uploadimages extends dbConnect
{
    private static string $img_name;
    private static string $img_tmp;

    private function __construct()
    {
        return;
    }

    private static function safethat($data): bool | int | string | null | float
    {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }

    public static function image(): void
    {
        $msg = [];
        if (isset($_FILES['image'])) {
            uploadimages::$img_name = $img_name  =  uploadimages::safethat($_FILES['image']['name'] ?? null);
            uploadimages::$img_tmp = $img_tmp = $_FILES['image']['tmp_name'];

            session_start();
            $session_email =  $_SESSION['user']['email'];

            $a = "ABCDEFGHIJKLMNOPQRSTUVWabcdefghijklmnopqrstuvwxyz0123456789";
            $session_email = $_SESSION['user']['email'];
            $selecteduser =  dbConnect::$conn->query("SELECT * FROM `users` WHERE `email` = '$session_email'");
            $fetch_data = $selecteduser->fetch_object();
            $user_id = $fetch_data->id;
            $user_img = $fetch_data->images;
            $ext = pathinfo($img_name, PATHINFO_EXTENSION);
            $uniqName = "company" . substr(str_shuffle($a), 0, 8) . uniqid() . rand(100000, 999999) . date("YmdHis") . "." . $ext;
            $destination = "../assets/images/users/$user_id/$uniqName";
            $path = "../assets/images/users/$user_id/$user_img";

            if (empty($img_tmp)) {
                $msg['error_img'] = "File can't find the uploaded image!";
            } elseif (!getimagesize($img_tmp)) {
                $msg['error_img'] = "Please select an image file!";
            } else {
                if ($selecteduser->num_rows != 1) {
                    $msg['error_img'] = "User data is empty!";
                } else {
                    if ($user_img != null && $user_img != "") {
                        unlink($path);
                    }
                    (!is_dir("../assets/images/users/$user_id")) ? mkdir("../assets/images/users/$user_id") : null;

                    $move = move_uploaded_file($img_tmp, $destination);

                    if (!$move) {
                        $msg['error_img'] = "Failed to upload file!";
                    } else {
                        $update_query  = dbConnect::$conn->query("UPDATE `users` SET `images` = '$uniqName' WHERE `id` = '$user_id'");

                        if (!$update_query) {
                            $msg['error_img'] = "Failed to upload file!";
                        } else {
                            $_SESSION['user']['images'] = $uniqName;
                            $msg['success'] = "Image uploaded successfully!";
                        }
                    }
                }
            }
        }

        ob_clean();
        echo json_encode($msg);
    }
}

uploadimages::image();
