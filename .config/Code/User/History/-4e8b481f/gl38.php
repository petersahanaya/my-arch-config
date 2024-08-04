<?php

include "database.controller.php";

class Todo
{
    public function __construct(public string $id, public string $title, public string $category, public string $status)
    {
        // Generate a unique ID if none is provided
        $this->id = bin2hex(random_bytes(16));
        $this->title = $title;
        $this->category = $category;
        $this->status = $status;
    }
}
