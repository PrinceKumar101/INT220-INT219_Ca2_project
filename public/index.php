<?php

require_once '../backend/includes/header.php';
require_once '../backend/includes/utility_function.php';


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
        <link rel="stylesheet" href="./assets/css/style.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        <script src="https://kit.fontawesome.com/95e0896bea.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://accounts.google.com/gsi/client" async defer></script><!--//for api fetching in tte-->
</head>

<body class=" min-h-screen flex flex-col m-0 p-0 bg-zinc-100 text-black selection:bg-green-500 selection:text-white">

        <!-- Navbar -->
        <header class="shadow-md sticky top-0 z-50 bg-inhert text-inhert opacity-95 backdrop-blur-2xl ">
                <?php
                if ($page != "login" && $page != "signup" && $page != "forgot_password" && $page != "reset_password" && $page != "404") {
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
                if ($page != "login" && $page != "signup" && $page != "forgot_password" && $page != "reset_password" && $page != "404") {
                        include "./footer.php";
                }
                ?>
        </footer>


</body>

</html>