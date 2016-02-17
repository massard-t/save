package main

import "fmt"

func main() {
	favNums4 := [5]int {50, 40, 30, 20, 10};

	for _, value := range favNums4 { // _ pour ne pas afficher l'index
		fmt.Print(value, "\n"); //affiche la valeur
	}
}