<?php



require_once '../backend/includes/header.php';




$name = $_ENV['NAME'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./assets/css/output.css" rel="stylesheet">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script> 

</head>

<body>
    <!-- Navbar -->
    <div>
        <?php include './navbar.php'; ?>
    </div>

    <!-- Main Content -->
    <div>
        <?php include $content; ?>
    </div>

    <!-- Footer -->
    <div>
        <?php include './footer.php'; ?>
    </div>
</body>

</html>
