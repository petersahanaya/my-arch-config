<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listrik Prabayar</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <main class="container">
        <header>
            <h1>Listrik Prabayar &#128648;</h1>
        </header>

        <hr />

        <form action="" method="POST">
            <label for="batas-daya">
                <p>Batas Daya</p>
                <select name="batas-daya" id="batas-daya">
                    <option value="450">450V</option>
                    <option value="900">900V</option>
                    <option value="1200">1200V</option>
                </select>
            </label>
            <label for="harga-beli">
                <p>Harga Beli</p>

                <input name="harga-beli" id="harga-beli" min="0" required type="number" />
            </label>
            <label for="materai">
                <p>Biaya Materai</p>

                <input name="materai" id="materai" min="0" required type="number" />
            </label>
            <button type="submit">Submit</button>
        </form>

        <?php include "controllers/tarif.controller.php"; ?>
    </main>
</body>

</html>