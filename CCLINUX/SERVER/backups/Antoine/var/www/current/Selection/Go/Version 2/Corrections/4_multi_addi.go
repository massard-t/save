package main

import "fmt"

func multi_addi(a int, b int, z int) {
	var y int;
	y = a * b + z
	fmt.Print(y, "\n");
}

func main() {
	multi_addi(8, 4, 10);
}
