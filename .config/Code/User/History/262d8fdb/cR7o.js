//QUERY
const tugasKog = document.querySelector("#tugas-kognitif")
const tugasKet = document.querySelector("#tugas-keterampilan")
const ulanganKog = document.querySelector("#ulangan-kognitif")
const ulanganKet = document.querySelector("#ulangan-keterampilan")
const uts = document.querySelector("#uts")
const uas = document.querySelector("#uas")

// CONSTANT
const NILAI_KOG = "NILAI KOGNITIF"
const NILAI_KET = "NILAI KETERAMPILAN"
const NILAI_AKHIR = "NILAI AKHIR"
const GRADE_RANGES = [
  { grade: 'A', min: 80, max: 100 },
  { grade: 'B', min: 70, max: 79 },
  { grade: 'C', min: 60, max: 69 },
  { grade: 'D', min: 50, max: 59 },
  { grade: 'E', min: 0, max: 49 },
]

//LOADER HTML
const loader = () => {
  const submitButton = document.querySelector(".submit-btn")


  const svgLoader = `
    <svg class="loader" width="30" height="30" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <path fill="none" d="M0 0h24v24H0z"></path> <path d="M18.364 5.636L16.95 7.05A7 7 0 1 0 19 12h2a9 9 0 1 1-2.636-6.364z"></path> </g> </g></svg>
  `

  submitButton.innerHTML = svgLoader

  setTimeout(() => {
    submitButton.innerHTML = "Submit"
  }, 3000)
}


//OUTPUT HTML
const GradeHTML = () => {
  const matkul = document.querySelector("#matkul")?.value

  return `
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
            ${matkul}
          </p>
          <p>
            ${tugasKog.valueAsNumber}
          </p>
          <p>
           ${tugasKet.valueAsNumber} 
          </p>
          <p>
           ${ulanganKog.valueAsNumber}
          </p>
          <p>
           ${ulanganKet.valueAsNumber}
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
  `
}


const calculateGrades = (type) => {
  const nilaiKog = ((tugasKog.valueAsNumber + ulanganKog.valueAsNumber) + (2 * uts.valueAsNumber) + (2 * uas.valueAsNumber)) / 6; // Corrected formula
  const nilaiKet = ((tugasKet.valueAsNumber + ulanganKet.valueAsNumber) + (2 * uts.valueAsNumber) + (2 * uas.valueAsNumber)) / 6; // Corrected formula
  const nilaiAkhir = (nilaiKog + nilaiKet) / 2;
  switch (type) {
    case NILAI_KOG:
      return validateGrade(nilaiKog)
    case NILAI_KET:
      return validateGrade(nilaiKet)
    case NILAI_AKHIR:
      return validateGrade(nilaiAkhir)
  }
}

const validateGrade = (score) => {
  let finalGrade;

  GRADE_RANGES.forEach(($grade) => {
    if (score >= $grade->min && score <= $grade->max) {
      finalGrade = grade.grade
    }
  })

  return finalGrade
}

const onSubmit = () => {
  const form = document.querySelector("form")
  const output = document.querySelector(".output")

  form.addEventListener("submit", (e) => {
    e.preventDefault()
    loader()

    setTimeout(() => {
      output.innerHTML = GradeHTML()
    }, 3000)
  })
}

window.addEventListener("DOMContentLoaded", () => {
  onSubmit()
})