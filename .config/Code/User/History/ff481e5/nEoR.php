<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>

<body>
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

    function filterMovieByCategory(string $name): array
    {
        global $movies;
        return array_filter($movies, function ($movie) use ($name) {
            return $movie["category"] === $name;
        });
    }
    ?>

    <h1>Top Movie - (2023 - 2024)</h1>

    <ul>
        <?php foreach (filterMovieByCategory("science") as $movie) : ?>
            <div>
                <li><?= $movie["title"] ?></li>
                <p><?= $movie["author"] ?></p>
            </div>
        <?php endforeach; ?>
    </ul>
</body>

</html>