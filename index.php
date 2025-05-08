<?php
require_once __DIR__ . '../vendor/autoload.php';
require_once __DIR__ . '../config/database.php';

use App\Controllers\UserController;

$path = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$segments = explode('/', $path); //Splitting the URL with /

if (isset($segments[0]) && $segments[0] === 'user') {
    $controller = new UserController($connection);

    // /user/1 → show single user
    if (isset($segments[1])) {
        $id = intval($segments[1]);
        $controller->profile($id);
    }
    // /user → show all users
    else {
        $controller->list();
    }
} else {
    echo "<h1>404 Not Found</h1>";
}
