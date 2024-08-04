<?php
$url = $_SERVER["REQUEST_URI"];

$mappedUrl = match ($url) {
    "/" => include "index.php",
    "/todo" => include "/todo.php"
};

$mappedUrl;
