<main class="w-screen h-screen bg-gray-600">
    <section class="bg-white w-[400px] h-96 bg-white rounded-md p-2">
        <ul>
            <h1>Top Movies - (2023 - 2024)</h1>
            <ul>

            </ul>
            <?php foreach ($movies as $movie) : ?>
                <div>
                    <li><?= $movie["title"] ?></li>
                    <p><?= $movie["author"] ?></p>
                </div>
            <?php endforeach; ?>
        </ul>
    </section>
</main>