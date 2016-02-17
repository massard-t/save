<?php
function create_matrix($x, $y, $n, $k)
{
	$matrix = array();
	for ($i=0; $i <= $y; $i++)
	{
		for ($j=0; $j <= $x; $j++)
		{
			$cx = (($j-200)/100);
			$cy = (($i-100)/100);
			$matrix[$i][$j] = new complex($cx, $cy, $n, $k);
		}
	}
	draw_mandel($matrix);
}
?>