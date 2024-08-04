<?php

include "todo.controller.php";

class Database
{
    public function __construct(public array $connection)
    {
        $this->connection = [];
    }

    public function insert(Todo $todo)
    {
        array_push($this->connection, $todo);
    }

    public function delete(string $id)
    {
        $this->connection = array_filter($this->connection, function ($todo) use ($id) {
            return $todo->id !== $id;
        });
    }

    public function update(Todo $todo)
    {
        $found = false;
    }
}
