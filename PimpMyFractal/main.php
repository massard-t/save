<?php
require_once 'matrix.php';
require_once 'image.php';
require_once 'small_framework.php';
set_time_limit (250);
function main($iter=50, $degree=2)
{
	$x      = 300;
	$y      = 200;
	$matrice = create_matrix($x, $y, $iter, $degree);
}

main(50,2);