//QUERIES
const namaPasien = document.querySelector("nama-pasien")
const noPasien = document.querySelector("no-pasien")
const kodeKamar = document.querySelector("kode-kamar")
const lamaInap = document.querySelector("lama-inap")
const form = document.querySelector("form")

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
        case EKONOMI: 

            break;
        case VIP:
            break;
        case VVIP:
            break;
    }
}

const konversiKeRupiah = (value) => {
    const intl = new Intl.NumberFormat("")
}

//LISTENERS
window.addEventListener("DOMContentLoaded", () => {
    form.addEventListener("submit", () => {

    })
})