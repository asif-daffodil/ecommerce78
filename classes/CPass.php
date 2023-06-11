<?php
include_once("../db.php");
class changePass extends dbConnect
{
    public static string $old_pass;
    public static string $new_pass;
    public static string $conf_pass;

    private function __construct()
    {
        return;
    }

    private static function safethat($data)
    {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripcslashes($data);

        return $data;
    }

    public static function change(): void
    {

        $all_data = json_decode(file_get_contents('php://input'), true);
        $data = [];

        if ($_SERVER['REQUEST_METHOD'] === "POST" && isset($all_data['updatepass']) && $all_data['updatepass'] == "changePassword") {

            session_start();
            $session_email = $_SESSION['user']['email'] ?? null;

            changePass::$old_pass = $old_pass = changePass::safethat($all_data['old_pass']);
            changePass::$new_pass = $new_pass = changePass::safethat($all_data['new_pass']);
            changePass::$conf_pass = $conf_pass = changePass::safethat($all_data['conf_pass']);


            // old password validation
            if (empty($old_pass)) {
                $data['error_opass'] = "Enter your old password!";
            } else {
                $select_all = dbConnect::$conn->query("SELECT * FROM `users` WHERE `email` = '$session_email'");
                $fetch = $select_all->fetch_object();
                $existing_pass = $fetch->password;
                $mdold_pass = md5($old_pass);
                if ($mdold_pass != $existing_pass) {
                    $data['error_opass'] = "Password doesn't match!";
                } else {
                    unset($data['error_opass']);
                    $great_opass = dbConnect::$conn->real_escape_string($old_pass);
                }
            }

            // new pass validation
            $uppercase = preg_match('@[A-Z]@', $new_pass);
            $lowercase = preg_match('@[a-z]@', $new_pass);
            $number    = preg_match('@[0-9]@', $new_pass);
            if (empty($new_pass)) {
                $data['error_npass'] = "Field can't empty!";
            } elseif ($new_pass == $old_pass) {
                $data['error_npass'] = "Please enter new password!";
            } elseif (!$uppercase || !$lowercase || !$number) {
                $data['error_npass'] = "Use strong password!";
            } elseif (strlen($new_pass) < 6) {
                $data['error_npass'] = "Must me use 6 characters long!";
            } else {
                unset($data['error_npass']);
                $great_npass = dbConnect::$conn->real_escape_string($new_pass);
            }

            // confirm password
            if (empty($conf_pass)) {
                $data['error_confpass'] = "Please enter your password again!";
            } elseif ($conf_pass != $new_pass) {
                $data['error_confpass'] = " Password didn't match!";
            } else {
                unset($data['error_confpass']);
                $great_confpass = dbConnect::$conn->real_escape_string($conf_pass);
            }

            if (isset($great_opass) && isset($great_npass) && isset($great_confpass)) {
                $md5_pass = md5($great_npass);
                $change_pass = dbConnect::$conn->query("UPDATE `users` SET  `password` = '$md5_pass ' WHERE `email` = '$session_email'");

                if ($change_pass) {
                    $data['change_successfully'] = "Password changed successfully.";
                    echo json_encode($data);
                    return;
                }
            }

            echo json_encode($data);
        }
    }
}


changePass::change();
