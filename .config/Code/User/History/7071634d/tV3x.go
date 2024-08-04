package cli

import (
	"day_1/internal/input"
	"fmt"
	"strings"
	"time"
)

type User struct {
	ID       string
	Username string
	Address  string
}

const INITIAL_TICKET = 50

var MENUS = [3]string{"Buy ticket", "Show tickets", "Quit"}

var user = User{}

func ShowMenu() {
	fmt.Println("\nMENU :")
	for index, val := range MENUS {
		fmt.Printf("%v. %v\n", index+1, val)
	}
}

func RunApp() {
	ShowMenu()

	choice := new(uint)

	switch *choice {
	case 1:
		BuyTickets()
		break
	case 2:
		break
	case 3:
		break
	}
}

func BuyTickets() {
	if isAuthenticated(&user) {
		user.SignIn()
	}
}

func (user *User) SignIn() {
	username := new(string)
	address := new(string)
	fmt.Println("Authenticating..")

	timeout(2)

	fmt.Println("You've to sign in first!")
	input.Prompt("Username\t:", username)
	input.Prompt("Address\t:", address)

	fmt.Println("Sign in...")

	timeout(3)

	fmt.Println("Success!")

	*user = User{
		ID:       string(time.Now().Nanosecond()),
		Username: *username,
		Address:  *address,
	}

}

func isAuthenticated(user *User) bool {
	return strings.Trim(user.ID, " ") == "" && strings.Trim(user.Username, " ") == "" && strings.Trim(user.Username, " ") == ""
}

func timeout(second int) {
	time.Sleep(time.Second * second)
}
