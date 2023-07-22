    <?php
    include_once("../db.php");
    class loginClass extends dbConnect
    {
        private function __construct()
        {
            return;
        }

        private static function rakibDa($data): string | int | float | null
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
            if (isset($formData['signin']) && $formData['signin'] == "ASDfgh123") {
                $logInEmail = loginClass::rakibDa($formData['singin_email']);
                $logInPass = loginClass::rakibDa($formData['singin_pass']);
                $signinRemember = loginClass::rakibDa($formData['signInRememberMe'] ?? null);

                if (empty($logInEmail)) {
                    $data['err_logInEmail'] = "Enter your email address!";
                } else {
                    unset($data['err_logInEmail']);
                    $crr_login_email = $logInEmail;
                }

                if (empty($logInPass)) {
                    $data['err_logInPass'] = "Enter your password!";
                } else {
                    unset($data['err_logInPass']);

                    $crr_login_pass  = $logInPass;
                }

                if (isset($crr_login_email) && isset($crr_login_pass)) {
                    $checkEmail = dbConnect::$conn->query("SELECT * FROM `users` WHERE `email` = '$crr_login_email'");
                    if ($checkEmail->num_rows == 0) {
                        $data['err_log'] = "Email address or password problem";
                    } else {
                        $select = $checkEmail->fetch_object();
                        $fetchpasword  = $select->password;
                        $pass_veri = md5($crr_login_pass);
                        if ($pass_veri !== $fetchpasword) {
                            $data['err_log'] = "Email address or password problem";
                        } else {
                            if ($signinRemember === 1) {
                                $expire = time() + 86400 * 1;
                                setcookie("logEmailCookie", $crr_login_email, $expire, "/");
                                setcookie("logPassCookie", $crr_login_pass, $expire, "/");
                            }
                            $data['success'] = "Login successfull";
                            $data['name'] = $select->first_name . " " . $select->last_name;
                            $data['mobile'] = $select->phone;
                            $data['email'] = $select->email;
                        }
                    }
                }

                json_encode($data);

                echo json_encode($data);
            } else {
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
                    $crrMobile = dbConnect::$conn->real_escape_string($mobile);
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
                    $md5_pass = md5($crrPass);
                    $array_crrName = explode(" ", $crrName);
                    $first_name = $array_crrName[0];
                    array_shift($array_crrName);
                    $last_name = implode(" ", $array_crrName);

                    $insert_query = dbConnect::$conn->query("INSERT INTO `users`(`first_name`, `last_name`, `phone`, `email`, `password`) VALUES ('$first_name', '$last_name', '$crrMobile', '$crrEmail', '$md5_pass')");

                    if ($insert_query) {
                        $data["success"] = "Data Inserted Successfully";
                        echo json_encode($data);
                        return;
                    }
                }

                // json_encode($data);
                echo json_encode($data);
            }
        }
    }

    loginClass::registrForm();
