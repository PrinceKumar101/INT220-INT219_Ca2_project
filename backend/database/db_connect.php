<?php
// include '../includes/header.php';

$db_name = $_ENV["DB_NAME"] ?? null;
$db_host = $_ENV["DB_HOST"] ?? null;
$db_username = $_ENV["DB_USERNAME"] ?? null;
$db_password = $_ENV["DB_PASSWORD"] ?? null;
$db_port = $_ENV["DB_PORT"] ?? null;



$conn = new mysqli($db_host, $db_username, $db_password, $db_name, $db_port);

if ($conn->connect_error) {
    http_response_code(500);
    echo json_encode(["success" => false, "message" => "DB connection failed"]);
    die();
}
// var_dump($conn);
// echo "<br>";
// $que = "select * from users;";


// $all_users = mysqli_query($conn, $que,);
// if ($all_users) {

//     $rows = mysqli_fetch_all($all_users);
//     var_dump($rows);
// }
// var_dump($all_users);
