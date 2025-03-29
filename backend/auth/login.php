<?php
include_once "../includes/header.php";
include_once "../includes/utility_function.php";
include_once "../database/db_connect.php";
// session_start();

$login_page_location =  "../../public/index.php?page=login";
$home_page_location = "../../public/index.php?page=home";



$email = isset($_POST["email"]) ? filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL) : null;


$password = isset($_POST["password"]) ? trim($_POST["password"]) : null;

if (!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["login_error"] = ["email" => "Invalid emails."];
    go_to_location_with_exit($login_page_location);
}

$query = "select user_id from users where email='$email';";
$result = mysqli_query($conn, $query);

if (!$result) {
    $_SESSION["login_error"] = ["email" => "User not found."];
    go_to_location_with_exit($login_page_location);
}

$temp_user_id = mysqli_fetch_column($result);
$matched = compare_password($password, $conn, $temp_user_id);

if ($matched) {
    $_SESSION["login_success"] = ["success" => "Login successfull."];
    $_SESSION["loggedIn"] = ["status"=>true, "user_id" => $temp_user_id];
    if($_SESSION["loggedIn"]["status"]){
        find_loggedin_user($_SESSION["loggedIn"]["status"],$_SESSION["loggedIn"]["user_id"],$conn);
    }
    go_to_location_with_exit($home_page_location);
} else {
    $_SESSION["login_error"] = ["password" => "Email or password not matched."];
    go_to_location_with_exit($login_page_location);
}


