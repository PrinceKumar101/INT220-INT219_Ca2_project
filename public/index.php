<?php

require_once '../backend/includes/header.php';


$name = $_ENV['NAME'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $name ?></title>
        <link href="./assets/css/output.css" rel="stylesheet">
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class=" min-h-screen flex flex-col m-0 p-0 bg-zinc-100 text-black selection:bg-orange-500 selection:text-white">

        <!-- Navbar -->
        <header class="shadow-md sticky top-0 z-50 bg-inhert text-inhert opacity-95 backdrop-blur-2xl ">
                <?php
                if ($page != "login" && $page != "signup" && $page != "forgot_password") {
                        include "./navbar.php";
                }
                ?>
        </header>

        <!-- Main Content -->
        <main class="flex flex-col items-center justify-center p-(--padding-whole)  [--padding-whole:--spacing(0)] overflow-hidden">
                <?php include $content; ?>
        </main>

        <!-- Footer -->
        <footer class="text-black text-center">
                <?php
                if ($page != "login" && $page != "signup" && $page != "forgot_password") {
                        include "./footer.php";
                }
                ?>
        </footer>



</body>

</html>