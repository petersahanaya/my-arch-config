package main

import (
	"day_1/internal/cli"
	"day_1/internal/input"
)

func main() {
	input.PrintHeader("Welcome to Notion")

	cli.ShowMenu()
	cli.RunApp()
}
