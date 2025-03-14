<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use Dotenv\Dotenv;


$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

$allowed_pages = ['home', 'about', 'contact','login','dashboard'];
$page = isset($_GET['page']) && in_array($_GET['page'], $allowed_pages) ? $_GET['page'] : 'home';
$content = "./$page.php";
if (!file_exists($content)) {
    $content = '404.php';
}


?>