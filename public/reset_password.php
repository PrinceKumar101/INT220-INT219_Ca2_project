<?php
$error = isset($_SESSION["reset_password_error"]) ? $_SESSION["reset_password_error"] : null;
$success = isset($_SESSION["reset_password_success"]) ? $_SESSION["reset_password_success"] : null;

$error_message = $error ? $error[array_key_first($error)] : null;
$success_message = $success ? $success[array_key_first($success)] : null;



?>

<div class="flex items-center justify-center min-h-screen bg-gray-100 [--primary-color:var(--color-green-500)] [--primary-button-color:var(--color-green-600)] [--primary-text-color:var(--color-black)]">
    <form action="../backend/auth/reset_password.php" method="post" class="bg-white p-6 rounded-lg shadow-lg w-80">
        <h1 class="text-2xl font-bold text-(--primary-color) text-center mb-4">
            Reset Password
        </h1>
        <section class="mb-4">
            <label for="password" class="block text-(--primary-text-color) font-medium mb-1">New Password</label>
            <div class="flex items-center gap-2 border border-(--primary-color) rounded bg-(--primary-color)/5 p-2 focus-within:ring-2 focus-within:ring-(--primary-color) focus-within:duration-350">
                    <input id="reset_password1" type="password" placeholder="Enter password" name="password"
                        class="bg-transparent flex-1 text-(--primary-text-color) focus:outline-none">
                    <img src="./assets/images/eye_icon_close.png" alt="Show Password" id="eye_img1" class="h-6 w-6 cursor-pointer" onclick="handle_password_visiblity('reset_password1','eye_img1')">
                </div>
        </section>
        <section class="mb-4">
            <label for="confirm_password" class="block text-(--primary-text-color) font-medium mb-1">Confirm Password</label>
            <div class="flex items-center gap-2 border border-(--primary-color) rounded bg-(--primary-color)/5 p-2 focus-within:ring-2 focus-within:ring-(--primary-color) focus-within:duration-350">
                    <input id="reset_password2" type="password" placeholder="Confirm Password" name="password"
                        class="bg-transparent flex-1 text-(--primary-text-color) focus:outline-none">
                    <img src="./assets/images/eye_icon_close.png" alt="Show Password" id="eye_img2" class="h-6 w-6 cursor-pointer" onclick="handle_password_visiblity('reset_password2','eye_img2')">
                </div>
        </section>
        <button type="submit"
            class="w-full bg-(--primary-color) text-white py-2 rounded-lg hover:bg-(--primary-button-color) transition">
            Reset Password
        </button>

        <?php
        if (!empty($error)) {
            display_error_message($error_message, "reset_password_error");
        }
        if (!empty($success)) {
            display_success_message($success_message, "reset_password_success");
        }
        ?>
    </form>
</div>
<script src="./assets/js/auth.js"></script>