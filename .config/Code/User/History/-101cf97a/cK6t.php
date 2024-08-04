<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calculate Final Grade</title>
  <script src="main.js" defer></script>
  <link href="main.css" rel="stylesheet">
</head>

<body>
  <main class="container">
    <form action="">
      <h1>Calculate Final Grade!</h1>
      <label for="matkul">
        <p>
          MATKUL
        </p>
        <input required id="matkul" type="text" />
      </label>
      <label for="tugas-kognitif">
        <p>
          TUGAS KOGNITIF
        </p>
        <input min="0" max="100" required id="tugas-kognitif" type="number" />
      </label>
      <label for="tugas-keterampilan">
        <p>
          TUGAS KETERAMPILAN
        </p>
        <input min="0" max="100" required id="tugas-keterampilan" type="number" />
      </label>
      <label for="ulangan-kogtinif">
        <p>
          ULANGAN KOGNITIF
        </p>
        <input min="0" max="100" required id="ulangan-kognitif" type="number" />
      </label>
      <label for="ulangan-keterampilan">
        <p>
          ULANGAN KETERAMPILAN
        </p>
        <input min="0" max="100" required id="ulangan-keterampilan" type="number" />
      </label>
      <label for="uts">
        <p>
          UTS
        </p>
        <input min="0" max="100" required id="uts" type="number" />
      </label>
      <label for="uas">
        <p>
          UAS
        </p>
        <input min="0" max="100" required id="uas" type="number" />
      </label>

      <button class="submit-btn" type="submit">Submit</button>
    </form>

    <section class="output">
    </section>
  </main>
</body>

</html>