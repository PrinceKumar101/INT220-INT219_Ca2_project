<?php
$error = isset($_SESSION["forgot_password_error"])?$_SESSION["forgot_password_error"]:null;
$error_message = $error? $error[array_key_first($error)]:null;
$success = isset($_SESSION["forgot_password_success"])?$_SESSION["forgot_password_success"]:null;
$success_message = $success? $success[array_key_first($success)]:null;

function display_forgot_password_error($err)
{

    echo "<div class='text-lg text-red-500 p-2'><p>$err</p></div>";
    unset($_SESSION["forgot_password_error"]);
}
function display_forgot_password_success($success)
{

    echo "<div class='text-xl text-sky-500 p-2'><p>$success</p></div>";
    unset($_SESSION["forgot_password_success"]);
}

?>

<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <form action="../backend/auth/forgot_password.php" method="post" class="bg-white p-6 rounded-lg shadow-lg w-80">
        <h1 class="text-2xl font-bold text-orange-500 text-center mb-4">
            Forgot Password
        </h1>
        <section class="mb-4">
            <label for="email" class="block text-gray-700 font-medium mb-1">Email</label>
            <input type="email" placeholder="jhon@example.com" id="email" name="email"
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
        </section>  
        <?php
            if(!empty($error)) display_forgot_password_error($error_message);
            if(!empty($success)) display_forgot_password_success($success_message);
        ?>
        <button type="submit"
            class="w-full bg-orange-500 text-white py-2 rounded-lg hover:bg-orange-600 transition">
            Submit
        </button>
    </form>

    <!-- <div class="flex items-center justify-center min-h-screen bg-gray-100">
    <form action="" method="post" class="bg-white p-6 rounded-lg shadow-lg w-80">
        <h1 class="text-2xl font-bold text-orange-500 text-center mb-4">
            Verify
        </h1>
        <section class="mb-4">
            <label for="otp" class="block text-gray-700 font-medium mb-1">Enter OTP</label>
            <input type="number" id="otp" name="otp" placeholder="123456"
                class="w-full px-3 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500">
        </section>
        <button type="submit"
            class="w-full bg-orange-500 text-white py-2 rounded-lg hover:bg-orange-600 transition">
            Submit
        </button>
    </form>
</div> -->

</div>
