<?php
$url = $_SERVER["REQUEST_URI"];

$urls = [
    "/" => "views/index.view.php",
    "/todo" => "/pages/todo.php",
];

if ($urls[$url] == $url) {
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