<?php
function create_image($x, $y)
{
	$base = imagecreatetruecolor($x, $y);
	return ($base);
}

function get_image($matrix)
{
	$imag = create_image($matrix->x, $matrix->y);
	return ($imag);
}

function generate_tab(){
	for ($x=0; $x < 640; $x++) {
		for ($y=0; $y < 480; $y++) {
			$tab[$x][$y] = rand(0,255);
		}
	}
	return $tab;
}

function draw_mandel($matrix)
{
	$x = -1;
	$y = -1;
	$base = imagecreatetruecolor(300, 200);
	while (++$x <= 300) {
		while (++$y <= 200){
			$cvalue = $matrix[$y][$x]->mandel;
			$color = imagecolorallocate($base, $cvalue, $cvalue, $cvalue);
			imagesetpixel ($base, $x, $y, $color);
		}
		$y = -1;
	}
	imagepng($base , "images/mdrrevert.png");
	imagefilter ($base, IMG_FILTER_NEGATE);
	imagepng($base , "images/mdr.png");
	imagedestroy($base);
}
?>