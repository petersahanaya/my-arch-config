<?php
include "utils/abort.php";
$pathName = $_SERVER["REQUEST_URI"];

$acceptedRoutes = ["/" => "views/index.view.php", "/addTodo" => "views/addTodo.view.php"];

if (!array_key_exists($pathName, $acceptedRoutes)) {
    // TODO: send 404 not found if user try to access another url.
    sendStatusCode(404);
}

// TODO: Accept rest of the url if it exist.
$acceptedRoutes[$pathName];