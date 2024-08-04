<?php
$title = "Notion";
include "partials/head.partial.php"; ?>

<body>
    <main class="home">
        <?php include "partials/header.partial.php"; ?>

        <ul class="todo-list">
            <?php foreach ($todos as $todo) : ?>
                <li style="background : yellow;">
                    <p>
                        <?= $todo["title"]; ?>
                    </p>

                    <span><?= $todo["status"]; ?></span>
                </li>
            <?php endforeach ?>
        </ul>
    </main>
</body>

</html>