<?php
$error = $_SESSION["signup_error"] ?? null;
$error_key = $error ? array_key_first($error) : null;
$error_message = $error_key ? $error[$error_key] : null;
$success = $_SESSION['signup_success'] ?? null;
$success_message = $success ? $success[array_key_first($success)] : null;

?>

<div class="min-h-screen flex items-center justify-center px-4 -mt-5 [--primary-color:var(--color-orange-500)] [--primary-button-color:var(--color-orange-600)] [--primary-text-color:var(--color-black)]">
    <div class="bg-white p-6 md:p-8 rounded-lg shadow-lg flex flex-col md:flex-row-reverse items-center gap-8 w-full max-w-4xl">
        <!-- Form Section -->
        <form action="../backend/auth/signup.php" method="post" class="flex flex-col gap-6 w-full md:w-1/2">
            <h1 class="text-4xl font-bold text-(--primary-color) text-center">Signup</h1>

            <div class="flex flex-col gap-2">
                <label for="name" class="text-(--primary-text-color) font-medium">Name</label>
                <input type="text" placeholder="Dark Shadow" name="name" required
                    class="bg-orange-100 text-(--primary-text-color) rounded p-2 border border-(--primary-color) focus:outline-none focus:ring-2 focus:ring-(--primary-color) transition-all">
            </div>
            <div class="flex flex-col gap-2">
                <label for="email" class="text-(--primary-text-color) font-medium">Email</label>
                <input type="email" placeholder="MrDark@gmail.com" name="email" required
                    class="bg-orange-100 text-(--primary-text-color) rounded p-2 border border-(--primary-color) focus:outline-none focus:ring-2 focus:ring-(--primary-color) transition-all">
            </div>
            <div class="flex flex-col gap-2">
                <label for="role" class="text-(--primary-text-color) font-medium">Signup As</label>
                <select id="role" name="role" class="bg-orange-100 text-(--primary-text-color) rounded p-2 border border-(--primary-color) focus:outline-none focus:ring-2 focus:ring-(--primary-color) transition-all">
                    <option value="farmer">Farmer</option>
                    <option value="expert">Expert</option>
                </select>
            </div>

            <div class="flex flex-col gap-2">
                <label for="password" class="text-(--primary-text-color) font-medium">Password</label>
                <div class="flex items-center gap-2 border border-(--primary-color) rounded bg-orange-100 p-2 focus-within:ring-2 focus-within:ring-(--primary-color)">
                    <input id="Signup_password" type="password" placeholder="••••••••" name="password" required
                        class="bg-transparent flex-1 text-(--primary-text-color) focus:outline-none">
                    <img src="./assets/images/eye_icon_close.png" alt="Show Password" id="eye_img" class="h-6 w-6 cursor-pointer" onclick="handle_password_visiblity('Signup_password','eye_img')">
                </div>
            </div>
            <div class="flex flex-row text-xs md:text-lg font-light justify-start items-center gap-3 relative">
                <input type="checkbox" value="true" name="remember_me" class="checked:scale-110 checked:duration-500 h-4 w-4">
                <p>Remember me</p>
            </div>

            <?php
            if (!empty($error)) {
                display_error_message($error_message, "signup_error");
            }
            if (!empty($success)) {
                display_success_message($success_message, "signup_success");
            }
            ?>

            <button class="bg-(--primary-color) hover:bg-(--primary-button-color) text-white font-semibold py-2 rounded-md hover:scale-105 transition-all">
                Signup
            </button>
            <div class="flex text-md gap-2 group relative">
                <p>Already have an account?</p>
                <a href="?page=login" class="text-sky-500 group-hover:underline underline-offset-4">Login here
                    <span class="absolute inset-0"></span>
                </a>
            </div>
        </form>

        <div class="hidden md:block w-1/2">
            <img src="https://plus.unsplash.com/premium_photo-1678344165293-eba1d4eb7739?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDQ2fHx8ZW58MHx8fHx8"
                alt="Signup Image" class="rounded-lg shadow-lg object-cover w-full h-full">
        </div>
    </div>
</div>
<script src="./assets/js/auth.js"></script>