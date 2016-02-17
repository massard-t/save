<?php
function create_img_jpeg($images) {
	
	if (count($images) > 1) {
		echo count($images) . " images found.\n";
	} else {
		echo count($images) . " image found.\n";
	}

	$panel = imagecreatetruecolor(1200, 1000);

	$x = 0;
	$y = 0;
	$c = 1;
	$max_width = 0;
	$max_height = 0;

	for ($i = 0; $i < count($images); $i++) {
		$key = array_keys($images[$i]);
		if ($y + imagesy($images[$i][$key[0]]) <= 1000) {
			if (imagesy($images[$i][$key[0]]) > 250) {
				imagecopyresized($panel, $images[$i][$key[0]], $x, $y, 0, 0, imagesx($images[$i][$key[0]]) / 4, 250, imagesx($images[$i][$key[0]]), imagesy($images[$i][$key[0]]));
				if ($x + (imagesx($images[$i][$key[0]]) / 4) * 2 >= 1200) {
					if ($max_width < (imagesx($images[$i][$key[0]]) / 4)) {
						$max_width = $x + imagesx($images[$i][$key[0]]);
					}
					$x = 0;
					$y += 250;
				} else {
					$x += (imagesx($images[$i][$key[0]]) / 4);
				}
			} else {
				imagecopy($panel, $images[$i][$key[0]], $x, $y, 0, 0, imagesx($images[$i][$key[0]]), imagesy($images[$i][$key[0]]));
				if ($x + imagesx($images[$i][$key[0]]) * 2 >= 1200) {
					if ($max_width < (imagesx($images[$i][$key[0]]) / 4)) {
						$max_width = $x + imagesx($images[$i][$key[0]]);
					}
					$x = 0;
					$y += 250;
				} else {
					$x += imagesx($images[$i][$key[0]]);
				}
			}
		} else {
			$y = 0;
			$final = imagecreatetruecolor($max_width, 1000);
			imagecopy($final, $panel, 0, 0, 0, 0, $max_width, 1000);
			imagejpeg($panel, $GLOBALS['base'] . $c . ".jpeg");
			imagejpeg($final, $GLOBALS['base'] . $c . ".jpeg");
			imagedestroy($final);
			imagedestroy($panel);
			$panel = imagecreatetruecolor(1200, 1000);
			$i--;
			$c++;
		}
	}
	$max_height = $x*2.5;
	$final = imagecreatetruecolor(1200, $max_height);
	imagecopy($final, $panel, 0, 0, 0, 0, 1200, $max_height);
	imagejpeg($panel, $GLOBALS['base'] . $c . ".jpeg");
	imagejpeg($final, $GLOBALS['base'] . $c . ".jpeg");
	imagedestroy($final);
	imagedestroy($panel);
	while (isset($images[$i])) {
        foreach ($images[$i] as $key => $value) {
            imagedestroy($value);
            unset($key);
        }
    	$i++;
    }
}
function create_img_png($images) {
	
	if (count($images) > 1) {
		echo count($images) . " images found.\n";
	} else {
		echo count($images) . " image found.\n";
	}

	$panel = imagecreatetruecolor(1200, 1000);

	$x = 0;
	$y = 0;
	$c = 1;
	$max_width = 0;
	$max_height = 0;

	for ($i = 0; $i < count($images); $i++) {
		$key = array_keys($images[$i]);
		if ($y + imagesy($images[$i][$key[0]]) <= 1000) {
			if (imagesy($images[$i][$key[0]]) > 250) {
				imagecopyresized($panel, $images[$i][$key[0]], $x, $y, 0, 0, imagesx($images[$i][$key[0]]) / 4, 250, imagesx($images[$i][$key[0]]), imagesy($images[$i][$key[0]]));
				if ($x + (imagesx($images[$i][$key[0]]) / 4) * 2 >= 1200) {
					if ($max_width < (imagesx($images[$i][$key[0]]) / 4)) {
						$max_width = $x + imagesx($images[$i][$key[0]]);
					}
					$x = 0;
					$y += 250;
				} else {
					$x += (imagesx($images[$i][$key[0]]) / 4);
				}
			} else {
				imagecopy($panel, $images[$i][$key[0]], $x, $y, 0, 0, imagesx($images[$i][$key[0]]), imagesy($images[$i][$key[0]]));
				if ($x + imagesx($images[$i][$key[0]]) * 2 >= 1200) {
					if ($max_width < (imagesx($images[$i][$key[0]]) / 4)) {
						$max_width = $x + imagesx($images[$i][$key[0]]);
					}
					$x = 0;
					$y += 250;
				} else {
					$x += imagesx($images[$i][$key[0]]);
				}
			}
		} else {
			$y = 0;
			$final = imagecreatetruecolor($max_width, 1000);
			imagecopy($final, $panel, 0, 0, 0, 0, $max_width, 1000);
			imagepng($panel, $GLOBALS['base'] . $c . ".png");
			imagepng($final, $GLOBALS['base'] . $c . ".png");
			imagedestroy($final);
			imagedestroy($panel);
			$panel = imagecreatetruecolor(1200, 1000);
			$i--;
			$c++;
		}
	}
	$max_height = $x*2.5;
	$final = imagecreatetruecolor(1200, $max_height);
	imagecopy($final, $panel, 0, 0, 0, 0, 1200, $max_height);
	imagepng($panel, $GLOBALS['base'] . $c . ".png");
	imagepng($final, $GLOBALS['base'] . $c . ".png");
	imagedestroy($final);
	imagedestroy($panel);
	while (isset($images[$i])) {
        foreach ($images[$i] as $key => $value) {
            imagedestroy($value);
            unset($key);
        }
    	$i++;
    }
}
function create_img_gif($images) {
	
	if (count($images) > 1) {
		echo count($images) . " images found.\n";
	} else {
		echo count($images) . " image found.\n";
	}

	$panel = imagecreatetruecolor(1200, 1000);

	$x = 0;
	$y = 0;
	$c = 1;
	$max_width = 0;
	$max_height = 0;

	for ($i = 0; $i < count($images); $i++) {
		$key = array_keys($images[$i]);
		if ($y + imagesy($images[$i][$key[0]]) <= 1000) {
			if (imagesy($images[$i][$key[0]]) > 250) {
				imagecopyresized($panel, $images[$i][$key[0]], $x, $y, 0, 0, imagesx($images[$i][$key[0]]) / 4, 250, imagesx($images[$i][$key[0]]), imagesy($images[$i][$key[0]]));
				if ($x + (imagesx($images[$i][$key[0]]) / 4) * 2 >= 1200) {
					if ($max_width < (imagesx($images[$i][$key[0]]) / 4)) {
						$max_width = $x + imagesx($images[$i][$key[0]]);
					}
					$x = 0;
					$y += 250;
				} else {
					$x += (imagesx($images[$i][$key[0]]) / 4);
				}
			} else {
				imagecopy($panel, $images[$i][$key[0]], $x, $y, 0, 0, imagesx($images[$i][$key[0]]), imagesy($images[$i][$key[0]]));
				if ($x + imagesx($images[$i][$key[0]]) * 2 >= 1200) {
					if ($max_width < (imagesx($images[$i][$key[0]]) / 4)) {
						$max_width = $x + imagesx($images[$i][$key[0]]);
					}
					$x = 0;
					$y += 250;
				} else {
					$x += imagesx($images[$i][$key[0]]);
				}
			}
		} else {
			$y = 0;
			$final = imagecreatetruecolor($max_width, 1000);
			imagecopy($final, $panel, 0, 0, 0, 0, $max_width, 1000);
			imagegif($panel, $GLOBALS['base'] . $c . ".gif");
			imagegif($final, $GLOBALS['base'] . $c . ".gif");
			imagedestroy($final);
			imagedestroy($panel);
			$panel = imagecreatetruecolor(1200, 1000);
			$i--;
			$c++;
		}
	}
	$max_height = $x*2.5;
	$final = imagecreatetruecolor(1200, $max_height);
	imagecopy($final, $panel, 0, 0, 0, 0, 1200, $max_height);
	imagegif($panel, $GLOBALS['base'] . $c . ".gif");
	imagegif($final, $GLOBALS['base'] . $c . ".gif");
	imagedestroy($final);
	imagedestroy($panel);
	while (isset($images[$i])) {
        foreach ($images[$i] as $key => $value) {
            imagedestroy($value);
            unset($key);
        }
    	$i++;
    }
}
?>