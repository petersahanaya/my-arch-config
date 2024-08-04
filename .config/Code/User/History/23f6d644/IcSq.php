<?php
$url = $_SERVER["REQUEST_URI"];

switch ($url) {
    case "/":
        include "/index.php";
        break;
    case "/todo":
        include "/todo.php";
        break;
    default:
        include "/notFound.php";
        break;
}
