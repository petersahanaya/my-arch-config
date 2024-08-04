<?php
$url = $_SERVER["REQUEST_URI"];

switch ($url) {
    case "/":
        include "controllers/db.controller.php";
        include "views/index.view.php";

        break;
    case "/todo":
        include "pages/todo.php";

        break;
    default:
        include "pages/notFound.php";

        break;
}
