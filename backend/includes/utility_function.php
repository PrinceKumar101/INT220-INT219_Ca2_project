<?php
// include_once "./header.php";
// include_once "../database/db_connect.php";
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

function compare_password($pass, $conn, $user_id)
{
    $query = "SELECT password FROM users WHERE user_id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows === 0) return false;

    $hashed_password = $result->fetch_assoc()['password'];
    return password_verify($pass, $hashed_password);
}


function check_if_email_exists($email, $conn)
{
    $query = "SELECT user_id FROM users WHERE email=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->num_rows > 0;
}

function reset_password($email, $password, $conn)
{
    $query = "SELECT user_id FROM users WHERE email=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 0) {
        $_SESSION["reset_password_error"] = ["error" => "Email not found."];
        return false;
    }

    $password = hash_password($password);
    $row = $result->fetch_assoc();
    $id = $row["user_id"];

    $reset_query = "UPDATE users SET password=? WHERE user_id=?";
    $stmt = $conn->prepare($reset_query);
    $stmt->bind_param("si", $password, $id);

    if (!$stmt->execute()) {
        $_SESSION["reset_password_error"] = ["error" => "Error updating password."];
        return false;
    }
    return true;
}


function display_error_message($err, $session_name)
{

    echo "<div class='text-xl font-semibold tracking-wider w-full text-center text-red-500 p-2'><p>$err</p></div>";
    unset($_SESSION[$session_name]);
}
function display_success_message($success, $session_name)
{

    echo "<div class='text-xl font-semibold tracking-wider w-full text-center text-green-500 p-2'><p>$success</p></div>";
    unset($_SESSION[$session_name]);
}

function go_to_location_with_exit($location)
{
    header("location: $location", true, 301);
    exit;
}
function go_to_location($location)
{
    header("location: $location", true, 301);
}

function find_loggedin_user($isLoggedin, $user_id, $conn)
{
    if (!$isLoggedin) {
        $_SESSION["user"] = ["status" => false];
        return;
    }

    $query = "SELECT name, email, role FROM users WHERE user_id=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if (!$result) {
        $_SESSION["user"] = ["status" => false];
        return;
    }

    $user = $result->fetch_assoc();
    if (!$user) {
        $_SESSION["user"] = ["status" => false];
        return;
    }

    $_SESSION["user"] = [
        "status" => true,
        "name" => $user["name"],
        "email" => $user["email"],
        "role" => $user["role"]
    ];
}

function logout_user($isloggedIn, $user_details)
{
    if ($_SESSION["$isloggedIn"]) unset($_SESSION[$isloggedIn]);
    if ($_SESSION["$user_details"]) unset($_SESSION[$user_details]);

    return true;
}
function check_if_loggedIn()
{
    if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"]["status"] && isset($_SESSION["user"]) && $_SESSION["user"]["status"]) return true;

    return false;
}
function save_community_message($conn, $message)
{
    if (check_if_loggedIn()) {
        $user_name = $_SESSION["user"]["name"];
        $query = "insert into message (user_name, message) values('$user_name', '$message');";
        $result = mysqli_query($conn, $query);
        if (!$result) echo "error saving message.";
    } else {
        echo "User not found.";
    }
    return;
}



function protect_pages($protected_pages, &$page, &$content, $redirect_page)
{
    if (in_array($page, $protected_pages) && !check_if_loggedIn()) {
        $_SESSION["access_denied"] = ["error" => "You must login first."];
        $page = $redirect_page;
        $content = "./$redirect_page.php";
    }
}
