<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$name = $_ENV["NAME"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./assets/css/output.css" rel="stylesheet">

</head>

<body>
    <p class=" text-5xl/loose font-semibold underline-offset-2 text-rose-500 underline text-center pt-13 selection:bg-sky-300 tracking-wider ">Testing Tailwind CSS. <br> Try using Tailwind. <br>
<span class="text-sky-500 underline underline-bg-sky-500 ">
<?php 
echo isset($name)?$name:"You need to setup a .env file to access this data <br> Try copying env.txt after creating a .env file. " ?>
</span>    

</p>
</body>

</html>