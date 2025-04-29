<?php

require_once '../backend/includes/header.php';
require_once '../backend/includes/utility_function.php';


$website_name = $_ENV['WEBSITE_NAME'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $website_name  ?></title>
        <link rel="icon" href="./assets/images/agrilogo.jpg">
        <link href="./assets/css/output.css" rel="stylesheet">
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        <script src="https://kit.fontawesome.com/95e0896bea.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://accounts.google.com/gsi/client" async defer></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lugrasimo&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./assets/css/fonts.css">
</head>

<body class=" min-h-screen flex flex-col m-0 p-0 bg-zinc-100 text-black selection:bg-green-500 selection:text-white font-poppins" style="font-family: 'Roboto Slab', serif;">

        <!-- Navbar -->
        <header class="shadow-md sticky top-0 z-50 bg-inhert text-inhert opacity-95 backdrop-blur-2xl ">
                <?php
                if ($page != "login" && $page != "signup" && $page != "forgot_password" && $page != "reset_password" && $page != "404" && $page != "windex") {
                        include "./navbar.php";
                }
                ?>
        </header>

        <!-- Main Content -->
        <main class="flex flex-col items-center justify-center p-(--padding-whole)  [--padding-whole:--spacing(0)] overflow-hidden">

                <?php
                $protected_pages = ["talk_to_exp", "community_forum", "weather"];
                protect_pages($protected_pages, $page, $content, "login");
                include $content; ?>
        </main>

        <!-- Footer -->
        <footer class="text-black text-center">
                <?php
                if ($page != "login" && $page != "signup" && $page != "forgot_password" && $page != "reset_password" && $page != "404" && $page != "community_forum" && $page != "windex" && $page != "admin_panel") {
                        include "./footer.php";
                }
                ?>
        </footer>


</body>

</html>