<?php
include_once("../db.php");
class sessionClass extends dbConnect
{
    private function __construct()
    {
        return;
    }

    private static function session_start(): void
    {
        session_start();
    }

    private static function session(array $data): void
    {
        sessionClass::session_start();
        $_SESSION['user'] = $data;
    }

    public static function sessionData(): void
    {
        if (isset($_GET['user']) && $_GET['user'] == 'ASDfgh123') {
            $get_name = $_GET['name'];
            $get_mobile = $_GET['mobile'];
            $get_email = $_GET['email'];

            $array_crrName = explode(" ", $get_name);
            $first_name = $array_crrName[0];
            array_shift($array_crrName);
            $last_name = implode(" ", $array_crrName);

            $fetch_data = dbConnect::$conn->query("SELECT * FROM `users` WHERE `email` = '$get_email'");

            if ($fetch_data->num_rows > 0) {
                $fetch = $fetch_data->fetch_object();
                $img_data = $fetch->images;
                $userArr = ['id' => $fetch->id, 'first_name' => $first_name, 'last_name' => $last_name, 'phone' => $get_mobile, 'email' => $_GET['email'], 'images' => $img_data, 'role' => $fetch->role];
                sessionClass::session($userArr);
                header("location: ../");
            } else {
                unset($_SESSION['user']);
                session_unset();
                header("location: ../");
            }
        }
    }
}

sessionClass::sessionData();
