<?php

include "database.controller.php";

class Todo
{
    public function __construct(public string $id, public string $title, public string $category, public bool $status)
    {
        // Generate a unique ID if none is provided
        if ($id === '') {
        } else {
            $this->id = $id;
        }

        $this->id = $id;
        $this->title = $title;
        $this->category = $category;
        $this->category = $category;
    }
}