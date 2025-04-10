<?php
session_start();
require_once __DIR__ . '/../../vendor/autoload.php';

use Dotenv\Dotenv;


$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();
include_once __DIR__ . '/../database/db_connect.php';



$allowed_pages = ['home', 'about', 'contact', 'login', 'dashboard', 'weather', 'signup','forgot_password','reset_password','talk_to_exp'];

// $page = isset($_GET['page']) && in_array($_GET['page'], $allowed_pages) ? $_GET['page'] : '404';
if (isset($_GET["page"]) && in_array($_GET["page"], $allowed_pages)) {
    $page = $_GET["page"];
} else if (!isset($_GET["page"])) {
    $page = 'home';
} else {
    $page = "404";
}
$content = "./$page.php";
if (!file_exists($content)) {
    $content = '404.php';
}


?>