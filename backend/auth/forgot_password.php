<?php
include_once "../includes/header.php";
include_once "../database/db_connect.php";
include_once "../includes/utility_function.php";
include_once "../mailer/php_mailer.php";


$forgot_page_location =  "../../public/index.php?page=forgot_password";

$email_header = "Password reset";
$email_body = "<div>
<h1>
This is a email sent you for resting your password.
</h1>
<p>
click on the below link to visit required page.</p>
<a href='http://localhost/ca2_project/public/index.php?page=reset_password'  class='text-sky-500 underline underline-offset-2'> Reset Password</a>
</div>";


$email = isset($_POST["email"]) ? filter_var($_POST["email"], FILTER_SANITIZE_EMAIL) : null;

if (!check_if_email_exists($email, $conn)) {
    $_SESSION["forgot_password_error"] = ["error" => "Email not found please verify."];
    go_to_location_with_exit($forgot_page_location);
}

$email_sent = send_email($_ENV["EMAIL_USERNAME"], $_ENV["EMAIL_PASSWORD"], $_ENV["EMAIL_FROM"], $_ENV["EMAIL_SENDER_NAME"], $email, $email_header, $email_body);

if ($email_sent) {
    $_SESSION["forgot_password_success"] = ["success" => "Email sent successfully <br> Check you inbox."];
    $_SESSION["email_for_password_reset"] = $email;
} else {
    $_SESSION["forgot_password_error"] = ["error" => "Couldn't send email <br> please verify email and try again after some time."];
}
go_to_location_with_exit($forgot_page_location);
