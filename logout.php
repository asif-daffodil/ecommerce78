<?php
session_start();
session_unset();
$remove = time() - 86400 * 1;
setcookie("logEmailCookie", '', $remove, "/");
setcookie("logPassCookie", '', $remove, "/");
header("location: ./");
