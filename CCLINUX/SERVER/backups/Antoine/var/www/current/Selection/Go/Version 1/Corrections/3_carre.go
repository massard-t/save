package main

import "fmt"

func carre(i int) {
	i = i * i;
	fmt.Print(i, "\n");
}

func main() {
     carre(4);
}