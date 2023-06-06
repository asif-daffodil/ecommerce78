<?php
class sessionClass
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
            $array_crrName = explode(" ", $_GET['name']);
            $first_name = $array_crrName[0];
            array_shift($array_crrName);
            $last_name = implode(" ", $array_crrName);
            $userArr = ['first_name' => $first_name, 'last_name' => $last_name, 'phone' => $_GET['mobile'], 'email' => $_GET['email']];
            sessionClass::session($userArr);
            header("location: ../");
        }
    }
}

sessionClass::sessionData();
