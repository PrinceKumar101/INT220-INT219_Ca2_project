<?php

$error = $_SESSION["login_error"] ?? null;
$error_key = $error ? array_key_first($error) : null;
$error_message = $error_key ? $error[$error_key] : null;
$success = $_SESSION['login_success'] ?? null;
$success_message = $success ? $success[array_key_first($success)] : null;
function display_login_error($err)
{

    echo "<div class='text-lg text-red-500'><p>$err</p></div>";
    unset($_SESSION["login_error"]);
}
function display_login_success($success)
{

    echo "<div class='text-xl text-sky-500'><p>$success</p></div>";
    unset($_SESSION["login_success"]);
}
?>
<div class="min-h-screen flex items-center justify-center px-4 -mt-5">
    <div class="bg-white p-6 md:p-8 rounded-lg shadow-lg flex flex-col md:flex-row items-center gap-8 w-full max-w-4xl">
        <!-- Form Section -->
        <form action="../backend/auth/login.php" method="post" class="flex flex-col gap-6 w-full md:w-1/2">
            <h1 class="text-4xl font-bold text-orange-500 text-center">Login</h1>

            <div class="flex flex-col gap-2">
                <label for="email" class="text-black font-medium">Email</label>
                <input type="email" name="email" placeholder="MrDark@gmail.com"
                    class="bg-orange-100 text-black rounded p-2 border border-orange-500 focus:outline-none focus:ring-2 focus:ring-orange-500 transition-all focus:duration-350">
            </div>

            <div class="flex flex-col gap-2">
                <label for="password" class="text-black font-medium">Password</label>
                <div class="flex items-center gap-2 border border-orange-500 rounded bg-orange-100 p-2 focus-within:ring-2 focus-within:ring-orange-500 focus-within:duration-350">
                    <input id="login_password" type="password" placeholder="••••••••" name="password"
                        class="bg-transparent flex-1 text-black focus:outline-none">
                    <img src="./assets/images/eye_icon_close.png" alt="Show Password" id="eye_img" class="h-6 w-6 cursor-pointer" onclick="handle_password_visiblity('login_password','eye_img')">
                </div>
            </div>
            <div>
                <a href="index.php?page=forgot_password" class="hover:underline underline-offset-2 hover:scale-105 hover:text-sky-500">Forgot Your Password?</a>
            </div>
            <?php
            if (!empty($error)) {
                display_login_error($error_message);
            }
            if (!empty($success)) {
                display_login_success($success_message);
            }
            ?>
            <button class="bg-orange-500 hover:bg-orange-600 text-white font-semibold py-2 rounded-md hover:scale-105 transition-all">
                Login
            </button>
            <div class="flex text-md gap-2 group relative">
                <p>Don't have an account </p>
                <a href="?page=signup" class="text-sky-500 group-hover:underline underline-offset-4">Create one here
                    <span class="absolute inset-0"></span>
                </a>
            </div>
        </form>

        <div class="hidden md:block w-1/2">
            <img src="https://plus.unsplash.com/premium_photo-1678344165293-eba1d4eb7739?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDQ2fHx8ZW58MHx8fHx8"
                alt="Login Image" class="rounded-lg shadow-lg object-cover w-full h-full">
        </div>
    </div>
</div>
<script src="./assets/js/auth.js"></script>