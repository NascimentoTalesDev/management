<?php

  include_once("config/url.php");
  include_once("config/process.php");

  // limpa a mensagem
  if(isset($_SESSION['msg'])) {
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Aplicação</title>
    <!-- BOOTSTRAP -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha512-oc9+XSs1H243/FRN9Rw62Fn8EtxjEYWHXRvjS43YtueEewbS6ObfXcJNyohjHqVKFPoXXUxwc+q1K7Dee6vv9g==" crossorigin="anonymous" />
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  <!-- CSS -->
  <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/base.css"> <!-- Link para o CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/aside.css"> <!-- Link para o CSS -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/main.css"> <!-- Link para o CSS -->
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
