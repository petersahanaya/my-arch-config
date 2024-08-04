<?php

enum Status
{
    case NotFound;
    case ServerError;
}

function sendStatusCode(Status $status)
{
}
