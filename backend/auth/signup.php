<?php
include_once "../includes/header.php";
include_once "../includes/utility_function.php";
include_once "../database/db_connect.php";
// session_start();

$signup_page_location =  "../../public/index.php?page=signup";


function santize_html($data)
{
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

function goto_signup_page($location)
{
    header("location: $location",true,301);
    exit;
}
$name = isset($_POST["name"]) ? santize_html($_POST["name"]) : null;
$email = isset($_POST["email"]) ? filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL) : null;

$password = isset($_POST["password"]) ? trim($_POST["password"]) : null;
$role = santize_html($_POST["role"]);
$remember_me = isset($_POST["remember_me"]) ? santize_html($_POST["remember_me"]) : "false";


if (!$name || strlen($name) < 3) {
    $_SESSION["signup_error"] = ["name"=>"Username must be atleast 3 character."];
    goto_signup_page($signup_page_location);

}
if(!$email || !filter_var($email, FILTER_VALIDATE_EMAIL)){
    $_SESSION["signup_error"] = ["email"=>"Invalid email format"];
    goto_signup_page($signup_page_location);
}
if(!$password || strlen($password)<8){
    $_SESSION["signup_error"] = ["password" => "Password must be atleast 8 characters."];
    goto_signup_page($signup_page_location);
}
if(!$role || !in_array($role, ["farmer", "expert"])){
    $role = "farmer";
}

$hashed_password = hash_password($password);


$query = "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email','$hashed_password','$role');";

$result = mysqli_query($conn,$query);
if($result->error){
    
}









exit;
