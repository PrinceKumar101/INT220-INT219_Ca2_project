<?php
include_once "../includes/header.php";
include_once "../includes/utility_function.php";
include_once "../database/db_connect.php";

//toexit
$contact_page_location="../../public/index.php?page=contact";
$home_page_location="../../public/index.php?page=home";

function santize_html($data)
{
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

$full_name = isset($_POST["full_name"]) ? santize_html($_POST["full_name"]) : null;
$village = isset($_POST["village"]) ? santize_html($_POST["village"]) : null;
$state = isset($_POST["state"]) ? santize_html($_POST["state"]) : null;
$district = isset($_POST["district"]) ? santize_html($_POST["district"]) : null;
$help_type = isset($_POST["help_type"]) ? santize_html($_POST["help_type"]) : null;
$yourques = isset($_POST["yourques"]) ? santize_html($_POST["yourques"]) : null;
$yourlang = isset($_POST["yourlang"]) ? santize_html($_POST["yourlang"]) : null;
$phno = isset($_POST["phno"]) ? santize_html($_POST["phno"]) : null;


    if(!$full_name || !$village || !$district || !$state || !$help_type || !$yourques || !$yourlang || !$phno){
        $_SESSION["contact_error"]=["error"=>"Something went wrong. "];
        go_to_location_with_exit($contact_page_location);
    }
    if(!preg_match('/^\d+$/', $phno)) {
        $_SESSION["contact_error"]=["error"=>"Something went wrong. "];
        go_to_location_with_exit($contact_page_location);
    }

$query = "INSERT INTO tocontact (fullname,village,state,district,typeofhelp,yourques,language,phoneno) VALUES ('$full_name','$village','$state','$district','$help_type','$yourques','$yourlang','$phno')";

$result = mysqli_query($conn, $query);
if(!$result){
    $_SESSION["contact_error"]=["error"=>"Something went wrong. "];
    go_to_location_with_exit($contact_page_location);
}
$_SESSION["contact_success"]=["success"=>"Our team will contact shortly. "];
go_to_location_with_exit($home_page_location);

