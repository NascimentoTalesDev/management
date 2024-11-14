<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Aplicação</title>
    <link rel="stylesheet" href="css/base.css"> <!-- Link para o CSS -->
    <link rel="stylesheet" href="css/aside.css"> <!-- Link para o CSS -->
    <link rel="stylesheet" href="css/main.css"> <!-- Link para o CSS -->
</head>
<body>
    <div id="container">
        <?php
            include("templates/aside.php")
        ?>
        <main id="main">
            <?php 
                include $children; 
            ?>
        </main>
    </div>
</body>
</html>
