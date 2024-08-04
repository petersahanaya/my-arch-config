<?php
$url = $_SERVER["REQUEST_URI"];

$routes = [
    "/" => "views/index.view.php",
    "/todo" => "pages/todo.php",
];

if (array_key_exists($url, $routes)) {
    include $routes[$url];
} else {
    include "pages/notFound.php";
}
