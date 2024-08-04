<?php
$pathName = $_SERVER["REQUEST_URI"];

$acceptedRoutes = ["/", "/addTodo"];

if (!array_key_exists($pathName, $acceptedRoutes)) {
}
