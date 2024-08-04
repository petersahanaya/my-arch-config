<?php

include "database.controller.php";

class Todo
{
    public function __construct(public string $id, public string $title, public string $category, public bool $status)
    {
        // Generate a unique ID if none is provided
        if ($id === '') {
            $this->id = bin2hex(random_bytes(16)); // Generate a random 16-byte string and convert it to hex
        } else {
            $this->id = $id; // Use the provided ID
        }
        $this->id = $id;
        $this->title = $title;
        $this->category = $category;
        $this->category = $category;
    }
}
