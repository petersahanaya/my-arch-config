<?php

enum Status
{
    case NotFound = 1;
    case Ok = 2;
}

function sendStatusCode(int $status)
{
}
