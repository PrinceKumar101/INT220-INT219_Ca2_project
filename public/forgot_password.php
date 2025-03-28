<?php
$error = isset($_SESSION["forgot_password_error"])?$_SESSION["forgot_password_error"]:null;
$error_message = $error? $error[array_key_first($error)]:null;
$success = isset($_SESSION["forgot_password_success"])?$_SESSION["forgot_password_success"]:null;
$success_message = $success? $success[array_key_first($success)]:null;


?>

<div class="flex items-center justify-center min-h-screen [--primary-color:var(--color-orange-500)] [--primary-text-color:var(--color-black)] [--primary-button-color:var(--color-orange-600)]">
    <form action="../backend/auth/forgot_password.php" method="post" class="bg-white p-6 rounded-lg shadow-lg w-80">
        <h1 class="text-2xl font-bold text-(--primary-color) text-center mb-4">
            Forgot Password
        </h1>
        <section class="mb-4">
            <label for="email" class="block text-(--primary-text-color) font-medium mb-1">Email</label>
            <input type="email" placeholder="jhon@example.com" id="email" name="email"
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-(--primary-color)">
        </section>  
        <?php
            if(!empty($error)) display_error_message($error_message,"forgot_password_error");
            if(!empty($success)) display_success_message($success_message,"forgot_password_success");
        ?>
        <button type="submit"
            class="w-full bg-(--primary-color) text-white py-2 rounded-lg hover:bg-(--primary-button-color) transition">
            Submit
        </button>
    </form>


</div>
