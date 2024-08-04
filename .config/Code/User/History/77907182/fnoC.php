<?php
echo "<pre>";
var_dump($_SERVER);
echo "<pre>";

$title = "Notion";

include "partials/head.partial.php"; ?>

<body>
    <main class="home">
        <?php include "partials/header.partial.php"; ?>

        <hr />

        <?php include "partials/list.partial.php"; ?>

        <hr />
    </main>
</body>

</html>