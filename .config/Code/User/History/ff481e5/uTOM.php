<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>

<body>
    <?php
    print_r("MOVIE ", $movies);
    if (!empty($movies)) {
        print_r($movies);
    } else {
        echo "There is no movies";
    }
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