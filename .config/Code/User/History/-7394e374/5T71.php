<?php

include "todo.controller.php";
include "utils/exception.php";

class Database
{
    public array $connection;
    public function __construct()
    {
        $this->connection = [
            new Todo(id: '', title: "Learn PHP", category: "code", status: "On progress"),
            new Todo(id: '', title: "Workout", category: "workout", status: "Urgent"),
            new Todo(id: '', title: "Accept Jesus", category: "repent", status: "Urgent"),
        ];
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

    public function update(Todo $updatedTodo)
    {
        $found = false;

        foreach ($this->connection as &$todo) {
            if ($todo->id === $updatedTodo->id) {
                $todo = $updatedTodo; // Update the existing Todo object
                $found = true;
                break; // Exit loop once the item is updated
            }
        }

        if (!$found) {
            throw new TodoNotExistException("Todo id doesn't exist.");
        }
    }
}
