<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarif Listrik</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <main class="container">
        <header>
            <h1>Tarif Listrik &#128648;</h1>
        </header>

        <hr />

        <form action="" method="POST">
            <label for="batas-daya">
                <p>Batas Daya</p>
                <select name="batas-daya" id="batas-daya">
                    <option value="450">450V</option>
                    <option value="900">900V</option>
                </select>
            </label>
            <label for="kwh-lalu">
                <p>KWH Bulan Lalu</p>

                <input id="kwh-lalu" min="0" max="1000" required type="number" />
            </label>
            <label for="kwh-sekarang">
                <p>KWH Bulan Sekarang</p>

                <input id="kwh-sekarang" min="0" max="1000" required type="number" />
            </label>
            <label for="materai">
                <p>Biaya Materai</p>

                <input id="materai" min="0" required type="number" />
            </label>
            <button type="submit">Submit</button>
        </form>

        <main class="total">
            <hr />


        </main>
    </main>
</body>

</html>