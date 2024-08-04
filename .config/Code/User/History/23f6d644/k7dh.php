<?php
$url = $_SERVER["REQUEST_URI"];

$mappedUrl = match ($url) {
    "/" => "/index.php",
    "/todo" => "/todo.php"
};
