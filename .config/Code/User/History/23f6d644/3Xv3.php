<?php
$url = $_SERVER["REQUEST_URI"];

$routes = [
    "/" => "views/index.view.php",
    "/todo" => "/pages/todo.php",
];

if (array_key_exists($url, $routes)) {
    include $routes[$url];
}

// switch ($url) {
//     case "/":
//         include "controllers/db.controller.php";
//         include "views/index.view.php";

//         break;
//     case "/todo":
//         include "pages/todo.php";

//         break;
//     default:
//         include "pages/notFound.php";

//         break;
// }
