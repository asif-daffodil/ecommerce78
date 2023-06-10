<?php
include_once("../db.php");

class profileUpdate extends dbConnect
{
    private function __construct()
    {
        return;
    }

    private static function safethat($data): string | int | float | null
    {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripcslashes($data);
        return $data;
    }

    public static function update(): void
    {
        $all_data = json_decode(file_get_contents('php://input'), true);
        $data = [];
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($all_data['updateProfile']) && $all_data['updateProfile'] == 'update') {


            session_start();
            $session_email = $_SESSION['user']['email'] ?? null;

            $upfirst_name = profileUpdate::safethat($all_data['upfirst_name']);
            $uplast_name = profileUpdate::safethat($all_data['uplast_name']);
            $upcompany_name = profileUpdate::safethat($all_data['upcompany_name'] ?? null);
            $upstreet_address = profileUpdate::safethat($all_data['upstreet_address'] ?? null);
            $uphouse = profileUpdate::safethat($all_data['uphouse'] ?? null);
            $upcountry = profileUpdate::safethat($all_data['upcountry'] ?? null);
            $upcity = profileUpdate::safethat($all_data['upcity'] ?? null);
            $upstate = profileUpdate::safethat($all_data['upstate'] ?? null);
            $upzip = profileUpdate::safethat($all_data['upzip'] ?? null);
            $upphone = profileUpdate::safethat($all_data['upphone']);
            $upemail = profileUpdate::safethat($all_data['upemail']);


            if (empty($upfirst_name)) {
                $data['errorFName'] = "Please enter your first name!";
            } elseif (!preg_match("/^[A-Za-z. ]*$/", $upfirst_name)) {
                $data['errorFName'] = "Invalid first name field!";
            } else {
                unset($data['errorFName']);
                $good_upfirst_name = dbConnect::$conn->real_escape_string($upfirst_name);
            }

            if (empty($uplast_name)) {
                $data['errorLName'] = "Please enter your last name!";
            } elseif (!preg_match("/^[A-Za-z. ]*$/", $uplast_name)) {
                $data['errorLName'] = "Invalid last name field!";
            } else {
                unset($data['errorLName']);
                $good_uplast_name = dbConnect::$conn->real_escape_string($uplast_name);
            }


            if (isset($upcompany_name)) {
                $good_upcompany_name = dbConnect::$conn->real_escape_string($upcompany_name);
            }

            if (isset($upstreet_address)) {
                $good_upstreet_address = dbConnect::$conn->real_escape_string($upstreet_address);
            }

            if (isset($uphouse)) {
                $good_uphouse = dbConnect::$conn->real_escape_string($uphouse);
            }

            if (isset($upcountry)) {
                $good_upcountry = dbConnect::$conn->real_escape_string($upcountry);
            }


            if (isset($upcity)) {
                $good_upcity = dbConnect::$conn->real_escape_string($upcity);
            }

            if (isset($upstate)) {
                $good_upstate = dbConnect::$conn->real_escape_string($upstate);
            }

            if (isset($upzip)) {
                $good_upzip = dbConnect::$conn->real_escape_string($upzip);
            }

            if (empty($upphone)) {
                $data['errorPhone'] = "Mobile phone is required!";
            } elseif (strlen($upphone) < 11) {
                $data['errorPhone'] = "Invalid phone numberdfsdf!";
            } else {
                unset($data['errorPhone']);
                $good_upphone = dbConnect::$conn->real_escape_string($upphone);
            }

            if (empty($upemail)) {
                $data['errorEmail'] = "Email address is required!";
            } elseif (!filter_var($upemail, FILTER_VALIDATE_EMAIL)) {
                $data['errorEmail'] = "Invalid email address!";
            } else {
                $select_query = dbConnect::$conn->query("SELECT * FROM users WHERE email = '$upemail'");
                if ($session_email != $upemail) {
                    if ($select_query->num_rows > 0) {
                        $data['errorEmail'] = "Email address already exists!";
                    } else {
                        unset($data['errorEmail']);
                        $good_upemail = dbConnect::$conn->real_escape_string($upemail);
                    }
                } else {
                    unset($data['errorEmail']);
                    $good_upemail = dbConnect::$conn->real_escape_string($upemail);
                }
            }

            if ((isset($good_upfirst_name) && isset($good_uplast_name) && isset($good_upemail) && isset($good_upphone))) {
                $select_email = $session_email;

                $update_query = dbConnect::$conn->query("UPDATE `users` SET `first_name` = '$good_upfirst_name', `last_name` = '$good_uplast_name', `company_name` = '$good_upcompany_name', `street_address` = '$good_upstreet_address', `house` = '$good_uphouse', `country` = '$good_upcountry', `city` = '$good_upcity', `state` = '$good_upstate', `zip` = '$good_upzip', `phone` = '$good_upphone' ,`email` = '$good_upemail' WHERE `email` = '$select_email'");

                if ($update_query) {
                    $data["update_success"] = "Updated successfully";
                    echo json_encode($data);

                    $_SESSION['user']['email'] = $good_upemail;
                    $_SESSION['user']['phone'] = $good_upphone;
                    $_SESSION['user']['first_name'] = $good_upfirst_name;
                    $_SESSION['user']['last_name'] = $good_uplast_name;
                    $_SESSION['user']['company_name'] = $good_upcompany_name;
                    $_SESSION['user']['street_address'] = $good_upstreet_address;
                    $_SESSION['user']['house'] = $good_uphouse;
                    $_SESSION['user']['city'] = $good_upcity;
                    $_SESSION['user']['state'] = $good_upstate;
                    $_SESSION['user']['zip'] = $good_upzip;
                    $_SESSION['user']['country'] = $good_upcountry;

                    return;
                } else {
                    $data["error_update"] = "Update Failed!";
                    echo json_encode($data);
                    return;
                }
            }

            json_encode($data);
            echo json_encode($data);
        }
    }
}

profileUpdate::update();
