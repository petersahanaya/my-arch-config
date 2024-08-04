<?php
$url = $_SERVER["REQUEST_URI"];

switch ($url) {
    case "/":
        include "controllers/db.controller.php";
        include "views/index.view.php";

        break;
    case "/todo":
        include "todo.php";

        break;
    default:
        include "notFound.php";

        break;
}
