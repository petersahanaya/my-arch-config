<?php

include "database.controller.php";

class Todo
{
    public function __construct(public string $title, public string $category, public bool $status)
    {
        $this->title = $title;
        $this->category = $category;
        $this->category = $category;
    }
}
