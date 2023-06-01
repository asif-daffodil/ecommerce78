<?php
include_once("../db.php");
class loginClass extends dbConnect
{
    private function __construct()
    {
    }

    private static function rakibDa($data)
    {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
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
            unset($data['errEmail']);
            $crrEmail = dbConnect::$conn->real_escape_string($email);
        }

        json_encode($data);

        echo json_encode($data);
    }
}

loginClass::registrForm();
