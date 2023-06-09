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
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($all_data['updateProfile']) && $all_data['updateProfile'] == "update") {

            $upfirst_name = profileUpdate::safethat($all_data['upfirst_name']);
            $uplast_name = profileUpdate::safethat($all_data['uplast_name']);
            $upcompany_name = profileUpdate::safethat($all_data['upcompany_name']);
            $upstreet_address = profileUpdate::safethat($all_data['upstreet_address']);
            $uphouse = profileUpdate::safethat($all_data['uphouse']);
            $upcountry = profileUpdate::safethat($all_data['upcountry']);
            $upcity = profileUpdate::safethat($all_data['upcity']);
            $upstate = profileUpdate::safethat($all_data['upstate']);
            $upzip = profileUpdate::safethat($all_data['upzip']);
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

            if (!empty($uplast_name)) {
                if (!preg_match("/^[A-Za-z. ]*$/", $uplast_name)) {
                    $data['errorLName'] = "Please enter your last name!";
                } else {
                    unset($data['errorLName']);
                    $good_uplast_name = dbConnect::$conn->real_escape_string($uplast_name);
                }
            }


            if (!empty($upcompany_name)) {
                $good_upcompany_name = dbConnect::$conn->real_escape_string($upcompany_name);
            }

            if (!empty($upstreet_address)) {
                $good_upstreet_address = dbConnect::$conn->real_escape_string($upstreet_address);
            }

            if (!empty($uphouse)) {
                $good_uphouse = dbConnect::$conn->real_escape_string($uphouse);
            }

            if (!empty($upcountry)) {
                if (!preg_match("/^[A-Za-z. ]*$/", $upcountry)) {
                    $data['errorCountry'] = "Invalid Country Name!";
                } else {
                    unset($data['errorCountry']);
                    $good_upcountry = dbConnect::$conn->real_escape_string($upcountry);
                };
            }


            if (!empty($upcity)) {
                if (!preg_match("/^[A-Za-z. ]*$/", $upcity)) {
                    $data['errorCity'] = "Invalid City!";
                } else {
                    unset($data['errorCity']);
                    $good_upcity = dbConnect::$conn->real_escape_string($upcity);
                };
            }

            if (!empty($upstate)) {
                if (!preg_match("/^[A-Za-z. ]*$/", $upstate)) {
                    $data['errorState'] = "Invalid State!";
                } else {
                    unset($data['errorState']);
                    $good_upstate = dbConnect::$conn->real_escape_string($upstate);
                }
            }

            if (!empty($upzip)) {
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
                unset($data['errorEmail']);
                $good_upemail = dbConnect::$conn->real_escape_string($upemail);
            }

            json_encode($data);
            echo json_encode($data);


            if ((isset($good_upfirst_name) && isset($good_upemail) && isset($good_upphone)) && isset($good_upzip)) {
                $update_query = dbConnect::$conn->query("UPDATE `users` SET `first_name` = '$good_upfirst_name', `last_name` = '$good_uplast_name', `company_name` = '$good_upcompany_name', `street_address` = '$good_upstreet_address', `house` = '$good_uphouse', `country` = '$good_upcountry', `city` = '$good_upcity', `state` = '$good_upstate', `zip` = '$good_upzip', `phone` = '$good_upphone' ,`email` = '$good_upemail' WHERE `email` = 'ashraf.uzzaman04082004@gmail.com'");

                if ($update_query) {
                    $data["update_success"] = "Updated successfully";
                    echo json_encode($data);
                    return;
                }
            }
        }
    }
}

profileUpdate::update();
