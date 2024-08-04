<?php

function sendStatusCode(int $status)
{
    http_response_code($status);

    include "views/{$status}.php";

    die();
}
