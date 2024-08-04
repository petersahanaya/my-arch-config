        <ul class="todo-list">
            <?php foreach ($todos as $todo) : ?>
                <li>
                    <p>
                        <?= $todo["title"]; ?>
                    </p>

                    <span style="<?= $todo["color"] ?>"><?= $todo["status"]; ?></span>
                </li>
            <?php endforeach ?>
        </ul>