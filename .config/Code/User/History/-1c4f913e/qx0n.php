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
            <label for="no-pasien">
                <p>No Pasien</p>

                <input id="no-pasien" required type="text" />
            </label>
            <label for="nama-pasien">
                <p>Nama Pasien</p>

                <input id="nama-pasien" required type="text" />
            </label>
            <label for="kode-kamar">
                <p>Kode Kamar</p>
                <select name="kode-kamar" id="kode-kamar">
                    <option value="EKONOMI">Ekonomi</option>
                    <option value="VIP">VIP</option>
                    <option value="VVIP">VVIP</option>
                </select>
            </label>
            <label for="lama-inap">
                <p>Lama Inap</p>

                <input id="lama-inap" required type="number" />
            </label>
            <button type="submit">Submit</button>
        </form>
    </main>
</body>

</html>