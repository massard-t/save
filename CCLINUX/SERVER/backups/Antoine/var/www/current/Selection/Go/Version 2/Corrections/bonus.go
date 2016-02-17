package main

import "fmt"

func swap(x *int, y *int) {
	
	var tmp int

	tmp = *x;
	*x = *y
	*y = tmp;
}
func main() {
	x := 5;
	y := 1;

	swap(&x, &y);
	fmt.Print(x, y, "\n");
}