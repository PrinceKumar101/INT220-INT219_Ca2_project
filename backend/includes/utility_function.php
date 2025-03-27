<?php
function render_blocks_ntimes($html_block, $n)
{
    for ($i = 0; $i < $n; $i++) {
        echo $html_block;
    }
}

function hash_password($pass)
{
    $pass = trim($pass);
    return password_hash($pass, PASSWORD_BCRYPT);
}

function compare_password($pass, $conn,$user_id)
{
    $query = "select password from users where user_id='$user_id';";
    $result = mysqli_query($conn,$query);
    if(!$result) return false;
    $hashed_password = mysqli_fetch_column($result);
    $pass = trim($pass);
    return password_verify($pass, $hashed_password);
}

function check_if_email_exists($email,$conn){
    $query = "select user_id from users where email='$email';";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    if($row) return true;
    return false;
}
