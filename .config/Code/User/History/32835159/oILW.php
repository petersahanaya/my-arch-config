<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calculate Final Grade</title>
  <!-- <script src="main.js" defer></script> -->
  <link href="main.css" rel="stylesheet">
</head>

<body>
  <main class="container">
    <form action="" method="POST">
      <h1>Calculate Final Grade!</h1>
      <label for="matkul">
        <p>
          MATKUL
        </p>
        <input name="matkul" required id="matkul" type="text" />
      </label>
      <label for="tugas-kognitif">
        <p>
          TUGAS KOGNITIF
        </p>
        <input name="tugas-kognitif" min="0" max="100" required id="tugas-kognitif" type="number" />
      </label>
      <label for="tugas-keterampilan">
        <p>
          TUGAS KETERAMPILAN
        </p>
        <input name="tugas-keterampilan" min="0" max="100" required id="tugas-keterampilan" type="number" />
      </label>
      <label for="ulangan-kogtinif">
        <p>
          ULANGAN KOGNITIF
        </p>
        <input name="ulangan-kognitif" min="0" max="100" required id="ulangan-kognitif" type="number" />
      </label>
      <label for="ulangan-keterampilan">
        <p>
          ULANGAN KETERAMPILAN
        </p>
        <input name="ulangan-keterampilan" min="0" max="100" required id="ulangan-keterampilan" type="number" />
      </label>
      <label for="uts">
        <p>
          UTS
        </p>
        <input name="uts" min="0" max="100" required id="uts" type="number" />
      </label>
      <label for="uas">
        <p>
          UAS
        </p>
        <input name="uas" min="0" max="100" required id="uas" type="number" />
      </label>

      <button class="submit-btn" type="submit">Submit</button>
    </form>

    <section class="output">

    </section>

    <section>
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //TODO : Calculate score

        $isAllPresent = true;

        $inputNames = [
          "matkul",
          "tugas-kognitif",
          "tugas-keterampilan",
          "ulangan-kognitif",
          "ulangan-keterampilan",
          "uts",
          "uas"
        ];

        $formData = [];

        foreach ($inputNames as $inputName) {
          if (isset($_POST[$inputName])) {
            $formData[$inputName] = $_POST[$inpuName];
          } else {
            $isAllPresent = false;

            echo "There's field missing!";
          }
        }

        if ($isAllPresent) {
          echo "FORM DATA EXIST:";

          echo "<ul>";
          foreach ($formData as $key => $value) {
            echo $_POST["tugas-kognitif"];


            echo "<li>" . $key . "</li>";
          }
          echo "</ul>";
        }
      } else {
        echo "NOT AN POST METHOD";
      }
      ?>
    </section>
  </main>
</body>

</html>