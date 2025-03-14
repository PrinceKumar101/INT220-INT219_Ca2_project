<?php
session_start();
include_once "./includes/header.php";


// $city = "Phagwara,Punjab,India"; // Corrected city name
// $city = trim($city);
if (isset($_POST["city"]) && !empty($_POST["city"])) {
    location($_POST["city"]);
    header("Location: ../public/index.php",true,301);
}
if (isset($_POST["latitude"]) && isset($_POST["longitude"]) && !empty($_POST["latitude"]) && !empty($_POST["longitude"])) {
    $_SESSION["lati"] = $_POST["latitude"];
    $_SESSION["longi"] = $_POST["longitude"];
    header("Location: ../public/index.php");
    exit();
}


function location($city)
{
    $city = trim($city);
    $apikey = $_ENV['LOCATION_API'] ?? null;

    $url = "http://api.openweathermap.org/geo/1.0/direct?q=" . urlencode($city) . "&limit=1&appid=$apikey";

    $ch = curl_init();
    $options = [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_TIMEOUT => 10,
    ];

    curl_setopt_array($ch, $options);
    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if ($error) {
        die("cURL Error: " . $error);
    }

    $res = json_decode($response, true);
    // var_dump($res);

    if (empty($res) || !isset($res[0]["lat"], $res[0]["lon"])) {
        die("Invalid location data received.");
    }
    session_start();
    $_SESSION["lati"] = $res[0]["lat"];
    $_SESSION["longi"] = $res[0]["lon"];
}
