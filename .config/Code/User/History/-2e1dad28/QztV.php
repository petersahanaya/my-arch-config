<section class="output">
    <header>
        <h3>Matkul</h3>
        <h3>Tugas Kognitif</h3>
        <h3>Tugas Keterampilan</h3>
        <h3>Ulangan Kognitif</h3>
        <h3>Ulangan Keterampilan</h3>
        <h3>UTS</h3>
        <h3>UAS</h3>
    </header>

    <main class="list">
        <p>
            <?= $_post["matkul"]; ?>
        </p>
        <p>
            <?= $_POST["tugas-kogtinif"]; ?>
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
            ${uts.valueAsNumber}
        </p>
        <p>
            ${uas.valueAsNumber}
        </p>
    </main>

    <footer class="grades">
        <div class="nilai-kog">
            <h2>Cognitive Score</h2>

            <h2 class="value-grade">${calculateGrades(NILAI_KOG)}</h2>
        </div>
        <div class="nilai-ket">
            <h2>Skill Score</h2>

            <h2 class="value-grade">${calculateGrades(NILAI_KET)}</h2>
        </div>

        <div class="grade">
            <h2>Grade</h2>

            <h2 class="value-grade">${calculateGrades(NILAI_AKHIR)}</h2>
        </div>
    </footer>
</section>