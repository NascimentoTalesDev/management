<?php
$page = $_GET['page'] ?? 'home'; 

switch ($page) {
    case 'create':
        $children = 'create.php';
        break;
    case 'settings':
        $children = 'settings.php';
        break;
    case 'home':
    default:
        $children = 'home.php';
        break;
}

include 'templates/layout.php';
