<?php
function cleandata($data)
{
	$i = 0;
	while (isset($data[$i])) {
		if (!(preg_match("/(height=\".+?\"|width=\".+?\"|src=\".+?\")/", $data[$i])))
			unset($data[$i]);
		$i++;
		}
	return ($data);
}

function img_to_resource($array)
{
	$i = 0;
	echo "\nTranslating colleted data.";
	while (isset($array[$i])) {
		foreach ($array[$i] as $file => $extension) {
			$ptr = "imagecreatefrom" . $extension;
			if (function_exists($ptr)){
				$ressources[$file] = $ptr($file);
				echo ".";
			}
		}
	$i++;
	}
	echo "\n";
	$i = 0;
	foreach ($ressources as $name => $ress) {
		$final[$i++] = array($name => $ress);
	}
	if (in_array("g", $GLOBALS["options"][0])) {
		create_img_gif($final);
	} elseif (in_array("p", $GLOBALS["options"][0])) {
		create_img_png($final);
	} else {
		create_img_jpeg($final);
	}
}

function check_absolute($source, $url)
{
	$i = 0;
	while (isset($source[$i])) {
		if (preg_match("/http[s]?:\/\//", $source[$i][1])) {
			preg_match("/src=\"(.+?)\"/", $source[$i][1], $source[$i]);
			$source[$i] = $source[$i][1];
		}
		else {
			$tmp = parse_url($url);
			$source[$i] = $tmp["scheme"]."://".$tmp["host"].substr($source[$i][1], 1);
		}
		$i++;
	}
	return (get_type($source));
}

function get_type($source)
{
	$choices = [IMAGETYPE_GIF 	=> "gif", 
				IMAGETYPE_JPEG 	=> "jpeg",
				IMAGETYPE_PNG 	=> "png",
				IMAGETYPE_BMP 	=> "bmp",
				IMAGETYPE_WBMP 	=> "wbmp",
				IMAGETYPE_XBM 	=> "xbm"];
	echo "Scanning data types.\n";
	$i = 0;
	$j = 0;

	while (isset($source[$i])) {
		if (check_host($source[$i])) {
			foreach ($choices as $key => $value) {
				if (exif_imagetype($source[$i]) == $key)
						$final[$j] = array($source[$i] => $value);
			}
		}
		$i++;
		$j++;
		echo ".";
	}
	img_to_resource($final);
}
?>