<?php

$error = $_SESSION["login_error"] ?? null;
$error_key = $error ? array_key_first($error) : null;
$error_message = $error_key ? $error[$error_key] : null;
$success = $_SESSION['login_success'] ?? null;
$succes_key = $success?array_key_first($success):null;
$success_message = ($succes_key && $success) ? $success[$succes_key] : null;

$access_denied = $_SESSION["access_denied"] ?? null;
$access_denied_key = $access_denied ? array_key_first($access_denied):null;
$access_denied_message  = ($access_denied && $access_denied_key) ? $access_denied[$access_denied_key] : null;


?>
<div class="min-h-screen flex items-center justify-center px-4 -mt-5 [--primary-color:var(--color-green-500)] [--primary-button-color:var(--color-green-600)] [--primary-text-color:var(--color-black)]">
    <div class="bg-white p-6 md:p-8 rounded-lg shadow-lg flex flex-col md:flex-row items-center gap-8 w-full max-w-4xl">
        <!-- Form Section -->
        <form action="../backend/auth/login.php" method="post" class="flex flex-col gap-6 w-full md:w-1/2">
            <?php
            if (!empty($access_denied)) {
                display_error_message($access_denied_message, "access_denied");
            }
            ?>
            <h1 class="text-4xl font-bold text-(--primary-color) text-center">Login</h1>

            <div class="flex flex-col gap-2">
                <label for="email" class="text-(--primary-text-color) font-medium">Email</label>
                <input type="email" name="email" placeholder="MrDark@gmail.com"
                    class="bg-(--primary-color)/5 text-(--primary-text-color) rounded p-2 border border-(--primary-color) focus:outline-none focus:ring-2 focus:ring-(--primary-color) transition-all focus:duration-350">
            </div>

            <div class="flex flex-col gap-2">
                <label for="password" class="text-(--primary-text-color) font-medium">Password</label>
                <div class="flex items-center gap-2 border border-(--primary-color) rounded bg-(--primary-color)/5 p-2 focus-within:ring-2 focus-within:ring-(--primary-color) focus-within:duration-350">
                    <input id="login_password" type="password" placeholder="••••••••" name="password"
                        class="bg-transparent flex-1 text-(--primary-text-color) focus:outline-none">
                    <img src="./assets/images/eye_icon_close.png" alt="Show Password" id="eye_img" class="h-6 w-6 cursor-pointer" onclick="handle_password_visiblity('login_password','eye_img')">
                </div>
            </div>
            <div>
                <a href="index.php?page=forgot_password" class="hover:underline underline-offset-2 hover:scale-105 hover:text-sky-500">Forgot Your Password?</a>
            </div>
            <?php
            if (!empty($error)) {
                display_error_message($error_message, "login_error");
            }
            if (!empty($success)) {
                display_success_message($success_message, "login_success");
            }
            ?>
            <button class="bg-(--primary-color) hover:bg-(--primary-button-color) text-white font-semibold py-2 rounded-md hover:scale-105 transition-all">
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