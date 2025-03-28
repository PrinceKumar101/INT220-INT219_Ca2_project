
<?php
include_once "../includes/header.php";
include_once "../includes/utility_function.php";
include_once "../database/db_connect.php";

$reset_page_location =  "../../public/index.php?page=reset_password";


$password = isset($_POST["password"]) ? trim($_POST["password"]) : null;
$confirm_password = isset($_POST["confirm_password"]) ? trim($_POST["confirm_password"]) : null;

if (!$password || !$confirm_password) {
    $_SESSION["reset_password_error"] = ["error" => "All inputs are nescessory."];
    go_to_location_with_exit($reset_page_location);
}
if ($password != $confirm_password) {
    $_SESSION["reset_password_error"] = ["error" => "Both the password should match."];
    go_to_location_with_exit($reset_page_location);
}

$email = $_SESSION["email_for_password_reset"];

$reset_status = reset_password($email, $password, $conn);

if ($reset_status) {
    $_SESSION["reset_password_success"] = ["success" => "Password reset successfull. <br> Head to login page."];
} else {
    $_SESSION["reset_password_error"] = ["error" => "Something wrong happend try again"];
}
go_to_location_with_exit($reset_page_location);

?>