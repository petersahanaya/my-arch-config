<main>
    <h1>Top Movies - (2023 - 2024)</h1>
    <ul>

    </ul><?php foreach ($movies as $movie) : ?>
        <div>
            <li><?= $movie["title"] ?></li>
            <p><?= $movie["author"] ?></p>
        </div>
    <?php endforeach; ?>
    </ul>
</main>