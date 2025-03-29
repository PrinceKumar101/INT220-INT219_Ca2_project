<?php
include_once "../includes/header.php";
include_once "../includes/utility_function.php";
$home_page_location = "../../public/index.php?page=home";
if (logout_user("loggedIn", "user")) {
    $_SESSION["logout_success"] = ["success" => "Logged out successfully."];
}else{
    $_SESSION["logout_error"] = ["error" => "Couldn't logout <br> Try again."]; 
}
go_to_location_with_exit($home_page_location);