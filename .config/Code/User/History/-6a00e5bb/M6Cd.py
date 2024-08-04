# Desimal
a = 13
print("Nilai desimal dari a adalah: " ,str(a))
print()

# Biner
b = 0b1010
print("Nilai Biner dari b dengan simbol adalah: " , bin(b))
print("Nilai Biner dari b tanpa Simbol adalah: " , bin(b)[2:])
print()

# Oktal
c = 0o123
print("Nilai Oktal dari c dengan simbol adalah: " , oct(c))
print("Nilai oktal dari c tanpa simbol adalah: " , oct(c)[2:])

# Hexadesimal
d = 0x12A
print("Nilai Hexadesimal dari d dengan simbol adalah:", hex(d))
print("Nilai Hexadesimal dari d tanpa simbol adalah:", hex(d)[2:])

print("Decimal ")


# konversi desimal ke biner oktal dan heksadesimal
nilai_desimal = 20
nilai_biner = bin(nilai_desimal)
nilai_oktal = oct(nilai_desimal)
nilai_hexa = hex(nilai_desimal)

print("Cetak nilai desimal:", nilai_desimal)
print("Hasil konversi desimal ke biner:", nilai_biner)
print("Hasil konversi desimal ke oktal:", nilai_oktal)
print("Hasil konversi desimal ke heksadesimal:", nilai_hexa)


# konversi desimal ke biner oktal dan heksadesimal
nilai_desimal = 20
nilai_biner = bin(nilai_desimal)
print("nilai biner : ", nilai_biner)
nilai_oktal = oct(nilai_desimal)
nilai_hexa = hex(nilai_desimal)

print("Cetak nilai desimal:", nilai_desimal)
print("Hasil konversi desimal ke biner:", nilai_biner)
print("Hasil konversi desimal ke oktal:", nilai_oktal)
print("Hasil konversi desimal ke heksadesimal:", nilai_hexa)

# menghitung luas
Panjang = int(input("NIlai panjang : "))
Lebar = int(input("Lebar : "))
Luas = Panjang * Lebar
print(Luas)

#luas segi empat
print("Masukan nilai panjang:")
panjang = int(input())
print("Masukan nilai lebar:")
lebar = int(input())
luas = panjang * lebar
print("Luas segiempat:")
print(luas)


x = 0
x = x + int(input())
x = x + int(input())
x = x + int(input())
x = x + int(input())
x = x + int(input())
x = x / 5
print("rata-rata:", x)

for index in range(8):
    print(index)

# for
total = 0
for x in range(5):
    total = total + int(input())
total = total / 5
print("Rata-rata:", total)

# While
index = 0
while (index < 5):
    index += 1

# if
nilai1 = int(input())
nilai2 = int(input())
nilai3 = int(input())

counter = 0
if (nilai1 >= 60):
    counter += 1
if (nilai1 <= 40):
    print("Tidak lulus")
else:
    print("")


if (nilai2 >= 60):
    counter += 1

if (nilai3 >= 60):
    counter += 1

print("Jumlah nilai bagusnya:", counter)


nilai = []
users = ["agus", "cina"]

jumlahSiswa = int(input("Masukkan jumlah siswa: "))
for x in range(jumlahSiswa):
    nilai.append(int(input()))

for user in users:
    print(user)

counter = 0
for index in range(jumlahSiswa):
    if (nilai[index] > 60):
        counter += 1

print("Jumlah nilai bagusnya:", counter)

def HitungDuit():
    print("Uang anda sisa 0 Rupiah")

HitungDuit()

def apakahAgusAda(nama = "anonymous"):
    print(f"Nama anda {nama}")

apakahAgusAda()

#def
def LuasSegiempat(panjang, lebar):
    return panjang * lebar

lebar = int(input())
luas1 = LuasSegiempat(panjang, lebar)

panjang = int(input())
lebar = int(input())
luas2 = LuasSegiempat(panjang, lebar)

print(luas1 + luas2)

#class - OOP - Object Oriented Programming
class Segiempat:
    def __init__(self, panjang, lebar):
        self.panjang = panjang
        self.lebar = lebar

    def hitungLuas(self):
        return self.panjang * self.lebar

persegi = Segiempat(20, 10)

luas = persegi.hitungLuas()




def main():
    s = Segiempat()
    s.panjang = int(input())
    s.lebar = int(input())
    print(s.hitungLuas())

main()

#function

class Person:
    nama = "no name"

def myFunction(person, bilangan):
    person.nama = "ida"
    bilangan = 3
    print(person.nama)

def main():
    p = Person()
    b = 12
    myFunction(p, b)
    print(p.nama)
    print(b)

main()

# Arrays of Movies
movies = [
    [ # Genre: Fiction
        ["Thor Ragnarok", "The Avenger End Game", "Harry Potter"]
    ],
    [ # Genre: Science
        ["The Phisics", "Mars", "Interstelar", "History of Human"]
    ],
    [ # Genre: Horror
        ["The Conjuring", "The Fallen Angle", "More Over"]
    ]
]

def display_movies():
    print_header()
    print("\tTop Movies - (2023 - 2024)")
    print_header()

    index = 0

    for genre in movies:
        for movie in genre:
            for eachMovie in movie:
                index = index + 1
                print(f"{index}.{eachMovie}")

user = {
    "name" : "Azzim Sadap",
    "kelas" : "TI2B"
}

print(user["kelas"])

(x, y, z) = (10, 50, 90)

users = {"agus", "agus", "azzim", "aji"}
print("users :", users)

def print_header():
    print("---------------------")
