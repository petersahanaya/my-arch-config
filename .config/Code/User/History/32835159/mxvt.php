<?php  ?>

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
          $formData[$inputName] = $_POST[$inputName];
        } else {
          $isAllPresent = false;

          echo "There's field missing!";
        }
      }

      if ($isAllPresent) {
        include "function.php";
echo "<section class="output">
    <header>
        <h3>Matkul</h3>
        <h3>Tugas Kognitif</h3>
        <h3>Tugas Keterampilan</h3>
        <h3>Ulangan Kognitif</h3>
        <h3>Ulangan Keterampilan</h3>
        <h3>UTS</h3>
        <h3>UAS</h3>
    </header>"

    echo "<main class="list">
        <p>
            <?= $_POST["matkul"]; ?>
        </p>
        <p>
            <?= $_POST["tugas-kognitif"]; ?>
        </p>
        <p>
            <?= $_POST["tugas-keterampilan"]; ?>
        </p>
        <p>
            <?= $_POST["ulangan-kognitif"]; ?>
        </p>
        <p>
            <?= $_POST["ulangan-keterampilan"]; ?>
        </p>
        <p>
            <?= $_POST["uts"]; ?>
        </p>
        <p>
            <?= $_POST["uas"]; ?>
        </p>
    </main>

    <footer class="grades">
        <div class="nilai-kog">
            <h2>Cognitive Score</h2>

            <h2 class="value-grade">
                <?php
                echo $calculateGrade(Type::NILAI_KOG);
                ?>
            </h2>
        </div>
        <div class="nilai-ket">
            <h2>Skill Score</h2>

            <h2 class="value-grade">
                <?php echo $calculateGrade(Type::NILAI_KET) ?>
            </h2>
        </div>

        <div class="grade">
            <h2>Grade</h2>

            <h2 class="value-grade">
                <?php echo $calculateGrade(Type::NILAI_AKHIR) ?>
            </h2>
        </div>
    </footer>"
</section>
    ?>
  </main>
</body>

</html>