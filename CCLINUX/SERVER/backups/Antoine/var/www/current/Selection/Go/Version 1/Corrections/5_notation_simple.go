package main

import "fmt"

func notation_simple(i int) {
	if (i % 2 == 1) {
		fmt.Print("Impair ");
	} else {
		fmt.Print("Pair ");
	}
	if (i < 10) {
		fmt.Print("Rouge\n");
	} else {
		fmt.Print("Noir\n");
	}
}

func main() {
	notation_simple(1);
	notation_simple(10);
	notation_simple(11);
}