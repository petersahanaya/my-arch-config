<?php

include "database.controller.php";

class Todo
{
    public function __construct(public NULL $id = null, public string $title, public string $category, public bool $status)
    {
        $this->id = random_bytes(20);
        $this->title = $title;
        $this->category = $category;
        $this->category = $category;
    }
}
