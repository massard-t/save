package main

import "fmt"

func addition(a int, b int) {
	var c int;
	c  = a + b;
	fmt.Print(c, "\n");
}

func main() {
     addition(1, 1);
     addition(8, 4);
     addition(11, 8);
}