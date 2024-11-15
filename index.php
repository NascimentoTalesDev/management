<?php
$page = $_GET['page'] ?? 'home'; 
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT); // Sanitiza e valida 'id'

switch ($page) {
    case 'create':
        $children = 'create.php';
        break;
    case 'settings':
        $children = 'settings.php';
        break;
    case 'show':
        $children = 'show.php'; 
        break;
    case 'edit':
        $children = 'edit.php';
        break;
    case 'home':
    default:
        $children = 'home.php';
        break;
}

include 'templates/layout.php';
