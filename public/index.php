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

<body class=" min-h-screen flex flex-col">

    <!-- Navbar -->
    <header class="bg-white shadow-md py-4">
            <?php include './navbar.php'; ?>
    </header>

    <!-- Main Content -->
    <main class="flex-grow flex items-center justify-center">
            <?php include $content; ?>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white text-center py-4 mt-8">
            <?php include './footer.php'; ?>
    </footer>

</body>

</html>
