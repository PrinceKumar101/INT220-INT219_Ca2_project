<?php
include_once "../includes/header.php";
include_once "../includes/utility_function.php";
include_once "../database/db_connect.php";
// session_start();

$login_page_location =  "../../public/index.php?page=login";



function goto_login_page($location)
{
    header("location: $location", true, 301);
    exit;
}


$email = isset($_POST["email"]) ? filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL) : null;


$password = isset($_POST["password"]) ? trim($_POST["password"]) : null;

if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["login_error"] = ["email" => "Invalid emails."];
    goto_login_page($login_page_location);
}

$query = "select user_id from users where email='$email';";
$result = mysqli_query($conn, $query);

if (!$result) {
    $_SESSION["login_error"] = ["email" => "User not found."];
    goto_login_page($login_page_location);
}

$temp_user_id = mysqli_fetch_column($result);
$matched = compare_password($password, $conn, $temp_user_id);

if ($matched) {
    $_SESSION["login_success"] = ["success" => "Login successfull."];
    $_SESSION["User_id"] = $temp_user_id;
    goto_login_page($login_page_location);
} else {
    $_SESSION["login_error"] = ["password" => "Email or password not matched."];
    goto_login_page($login_page_location);
}
exit;
