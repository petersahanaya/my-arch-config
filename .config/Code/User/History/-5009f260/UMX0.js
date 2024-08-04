//QUERIES
const namaPasien = document.querySelector("#nama-pasien")
const noPasien = document.querySelector("#no-pasien")
const kodeKamar = document.querySelector("#kode-kamar")
const lamaInap = document.querySelector("#lama-inap")
const form = document.querySelector("form")
const container = document.querySelector(".container")

//CONSTANT
const EKONOMI = {
   nama : "ekonomi",
   biaya : 70000
}
const VIP = {
    nama : "vip",
    biaya : 100000
}
const VVIP = {
    nama : "vvip",
    biaya : 150000
}

//LOGIC
const cekKamar = (kodeKamar) => {
    switch(kodeKamar) {
        case EKONOMI.nama: 

            container.insertAdjacentElement("beforeend", domTotal(validateBiaya(EKONOMI.biaya)))
            break;
        case VIP.nama:
            container.insertAdjacentElement("beforeend", domTotal(validateBiaya(VIP.biaya)))
            break;
        case VVIP.nama:
            validateBiaya(VVIP.biaya)
            container.insertAdjacentElement("beforeend", domTotal(validateBiaya(VVIP.biaya)))
            break;
    }
}

const validateBiaya = (biaya) => {
    const lamaInapValue = lamaInap.value

    const value = lamaInapValue * biaya

    return konversiKeRupiah(value)
}

const konversiKeRupiah = (value) => {
    const formater = new Intl.NumberFormat("id-ID", {
        style : "currency",
        currency : "IDR",
    })

    return formater.format(value)
}

//LISTENERS
window.addEventListener("DOMContentLoaded", () => {
    form.addEventListener("submit", (e) => {
        e.preventDefault()

        cekKamar(kodeKamar?.value)
    })
})

//DOM 
const domTotal = (total) => {
    return `
      <main class="total">
        <hr />

        <section class="hasil">
          <div>
            <p>Nomor Pasien</p>
            <p>${noPasien.value}</p>
          </div>
          <div>
            <p>Nama</p>
            <p>${namaPasien.value}</p>
          </div>
          <div>
            <p>Kode Kamar</p>
            <p>${kodeKamar.value?.toUpperCase()}</p>
          </div>
        </section>

        <hr />

        <p>Total</p>
        <h2>${total}</h2>
      </main>
    `
}