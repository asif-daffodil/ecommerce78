<?php
include_once("../db.php");
class loginClass extends dbConnect
{
    private function __construct()
    {
        return;
    }

    private static function rakibDa($data)
    {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }

    private static function session(): void
    {
        session_start();
    }

    public static function registrForm(): void
    {
        $formData = json_decode(file_get_contents('php://input'), true);
        $data = [];
        $name = loginClass::rakibDa($formData['name']);
        $email = loginClass::rakibDa($formData['email']);
        $mobile = loginClass::rakibDa($formData['mobile']);
        $pass = loginClass::rakibDa($formData['pass']);

        if (empty($name)) {
            $data['errName'] = "Please write your name";
        } elseif (!preg_match("/^[A-Za-z. ]*$/", $name)) {
            $data['errName'] = "Invalid name";
        } else {
            unset($data['errName']);
            $crrName = dbConnect::$conn->real_escape_string($name);
        }


        if (empty($email)) {
            $data['errEmail'] = "Please write your email";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $data['errEmail'] = "Invalid email";
        } else {
            $select_query  = dbConnect::$conn->query("SELECT * FROM `users` WHERE `email` = '$email'");
            if ($select_query->num_rows > 0) {
                $data['errEmail'] = "Email address already exists!";
            } else {
                unset($data['errEmail']);
                $crrEmail = dbConnect::$conn->real_escape_string($email);
            }
        }

        if (empty($mobile)) {
            $data['errMobile'] = "Please enter your mobile number";
        } elseif (!preg_match('/^[0-9]{11}+$/', $mobile)) {
            $data['errMobile'] = "Invalid mobile number!";
        } else {
            unset($data['errMobile']);
            $crrMobile = dbConnect::$conn->real_escape_string($email);
        }

        // password validation
        $uppercase = preg_match('@[A-Z]@', $pass);
        $lowercase = preg_match('@[a-z]@', $pass);
        $number    = preg_match('@[0-9]@', $pass);
        if (empty($pass)) {
            $data['errPass'] = "Enter your password!";
        } elseif (!$uppercase || !$lowercase || !$number) {
            $data['errPass'] = "Must be a strong password!";
        } elseif (strlen($pass) < 6) {
            $data['errPass'] = "Your password must be 6 characters long!";
        } else {
            unset($data['errPass']);
            $crrPass = dbConnect::$conn->real_escape_string($pass);
        }


        if (isset($crrName) && isset($crrEmail) && isset($crrMobile) && isset($crrPass)) {
            $hash_pass = password_hash($crrPass, PASSWORD_BCRYPT);
            $array_crrName = explode(" ", $crrName);
            // $count_array_size = sizeof($array_crrName);
            $first_name = $array_crrName[0];
            array_shift($array_crrName);
            $last_name = implode(" ", $array_crrName);

            $insert_query = dbConnect::$conn->query("INSERT INTO `users`(`first_name`, `last_name`, `phone`, `email`, `password`) VALUES ('$first_name', '$last_name', '$crrMobile', '$crrEmail', '$hash_pass')");
            if ($insert_query) {
                $data["success"] = "Data Inserted Successfully";
                echo json_encode($data);
                return;
            }
        }

        json_encode($data);
        echo json_encode($data);
    }


    public static function signInForm(): void
    {
        $formdata = json_decode(file_get_contents('php://input'), true);
        $data = [];
        $logInEmail = loginClass::rakibDa($formdata['singin_email']);
        $logInPass = loginClass::rakibDa($formdata['singin_pass']);

        if (empty($logInEmail)) {
            $data['err_logInEmail'] = "Enter your email address!";
        } else {
            unset($data['err_logInEmail']);
            $crr_login_email = $logInEmail;
        }

        if (empty($logInPass)) {
            $data['err_logInEmail'] = "Enter your password!";
        } else {
            unset($data['err_logInEmail']);

            $crr_login_pass  = $logInPass;
        }

        json_encode($data);

        echo json_encode($data);
    }
}

loginClass::registrForm();
// loginClass::signInForm();
