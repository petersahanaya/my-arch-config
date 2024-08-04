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

    function filterBook(string $name)
    {
        array_filter($$movies, function ($movie) {
            return $movie["category"] === $$name;
        });
    }

    echo filterBook("bible");
    ?>

    <h1>Top Movie - (2023 - 2024)</h1>

    <ul>
        <?php foreach ($movies as $movie) : ?>
            <div>
                <li><?= $movie["title"] ?></li>
                <p><?= $movie["author"] ?></p>
            </div>
        <?php endforeach; ?>
    </ul>
</body>

</html>