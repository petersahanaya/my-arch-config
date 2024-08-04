<?php
$title = "Notion";
include "partials/head.partial.php"; ?>

<body>
    <main class="home">
        <?php include "partials/header.partial.php"; ?>

        <ul class="todo-list">
            <?php foreach ($todos as $todo) : ?>
                <li><?= $todo["title"]; ?></li>
                <li><?= $todo["status"]; ?></li>
            <?php endforeach ?>
        </ul>
    </main>
</body>

</html>