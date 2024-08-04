# Initialize Variable
name : str

# Assign Value
name = "Agus"

# Tupple
(x, y) = (1, 4)

# List
users : list[str]

users = [
    "Agus",
    "Aji",
    "Ali",
    "Adit"
]

# Dictionary
persons = {
    "aji" : "tukang berak",
    "adit" : "tukang udud"
}

# Set - Just take the unique value
unique_persons = {"aji", "adit", "agus", "azzim", "aji"}

# Inspect variable type
print(type(persons))

# 3D Arrays
movies = [
    [
        [
            "The Conjuring", "Valak", "Darkness", "Help"
        ],
        [
            "Einstains", "Black Hole", "Mars"
        ]
    ]
]

# Looping - For | While
for user in users:
    print(user)

# While
index = 0
while(index < 10):
    index += 1
    print("INDEX: ", index)

# Conditional - If Else
if (name == "Agus"):
    print("Namanya adalah", name)
else:
    print("Anda bukan agus")

# Function
def my_function():
    print("My function")

# Class
class Dog:
    def __init__(self, name, color):
        self.name = name
        self.color = color

    def run(self):
        print("Dog is running!")

my_dog = Dog("Agus", "Nigga")

# Class Inheritance - GoldenRetriver
class Golden_Retriver(Dog):
    def bark(self):
        print("WOK WOK")

my_golden_dog = Golden_Retriver("Adit", "Chigga")

# Function with default parameter
def get_color(type = "nigga"):
    print("TYPE OF PERSON", type)
