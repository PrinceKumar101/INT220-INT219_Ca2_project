<?php
// include_once "../backend/includes/header.php";
// session_start();
$api_key = $_ENV['WEATHER_API'] ?? null;

if (!$api_key) {
    echo "<p class='bg-rose-500 text-white text-2xl w-full h-fit p-5 text-center'>
    Api key is missing
    </p>";
}



$lat = $_SESSION["lati"] ?? 31.23967;
$lon = $_SESSION["longi"] ?? 75.71098;

$ch = curl_init();
$options = [
    CURLOPT_URL => "https://api.openweathermap.org/data/2.5/forecast/daily?lat=$lat&lon=$lon&cnt=7&appid=$api_key&units=metric",
    CURLOPT_RETURNTRANSFER => true,
];

curl_setopt_array($ch, $options);
$response = curl_exec($ch);
$error = curl_error($ch);
curl_close($ch);

if ($error) {
    die("Error fetching weather data: $error");
}
if (empty($response)) {
    die("Response empty");
}
$res = json_decode($response);
// var_dump($res);
$days = [];
for ($i = 0; $i < 7; $i++) {
    $days[$i] = date("l", strtotime("+$i day"));
}

$res_empty = false;
if ($res?->cod == 200) {
    function current_temp($res)
    {
        $hour = date("G");

        if ($hour >= 1 && $hour <= 8) {
            return $res?->list[0]->temp->morn ?? "N/A";
        } elseif ($hour > 8 && $hour <= 16) {
            return $res?->list[0]->temp->day ?? "N/A";
        } elseif ($hour > 16 && $hour <= 18) {
            return $res?->list[0]->temp->eve ?? "N/A";
        } else {
            return $res?->list[0]->temp->night ?? "N/A";
        }
    }
    $location_from_api = $res?->city->name . " " . $res?->city->country ?? "N/A";
    $min_temp = round($res?->list[0]?->temp?->min) ?? "N/A";
    $max_temp = round($res?->list[0]?->temp?->max) ?? "N/A";
    $icon = $res?->list[0]?->weather[0]->icon;
    $img_src = "https://openweathermap.org/img/wn/$icon.png";
    $wind_speed = $res?->list[0]?->speed;
    $humidity = $res?->list[0]?->humidity;
    $current_weather = $res?->list[0]->weather[0]?->main;
    $current_weather_description = $res?->list[0]->weather[0]?->description;
} else {
    $res_empty = true;
}
