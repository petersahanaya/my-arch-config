<?php
$movies = [
    [
        "title" => "Son of God",
        "author" => "God",
        "category" => "bible",
        "releaseYear" => "1000",
    ],
    [
        "title" => "The Messiah",
        "author" => "God",
        "category" => "bible",
        "releaseYear" => "1000",
    ],
    [
        "title" => "Interstelar",
        "author" => "James collin",
        "category" => "science",
        "releaseYear" => "2016",
    ],
];

function filterMovieByCategory($key): array
{
    global $movies;
    return array_filter($movies, function ($movie) use ($key) {
        return $movie[$key];
    });
}

require "index.view.php";
