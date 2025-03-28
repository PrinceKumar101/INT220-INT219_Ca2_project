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
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://kit.fontawesome.com/95e0896bea.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="style.css">
  
</head>

<body class=" min-h-screen flex flex-col m-0 p-0 bg-gradient-to-br from-sky-100/30 to-sky-200/50 text-black">

    <!-- Navbar -->
    <header class="shadow-md sticky top-0 z-10 bg-inhert text-inhert opacity-95 backdrop-blur-2xl ">
            <?php include './navbar.php'; ?>
    </header>

    <!-- Main Content -->
    <main class="flex-grow flex-col items-center justify-center ">
            <?php include $content; ?>
    </main>

    <!-- Footer -->
    <footer class=" text-black text-center">
            <?php include './footer.php'; ?>
    </footer>

</body>

</html>
