<?php

require_once('listfunc.php');

function errorcode($number){
	$error[1] = "Error on move of uploaded file";
	$error[2] = "File already exists";
	$error[3] = "File corrupted";
	$error[4] = "Error on modification time change";
	$error[5] = "User not exists";
	$error[6] = "Where is your file ?!";
	$error[7] = "PASSWORD PAS BON";
	$error[8] = "Error on uncompression";
	$error[9] = "No change !";
	$error[403] = "No data !";
	return $error[$number];
}

function error($number){
	if ((int)$number > 0){
		$return['success'] = FALSE;
		$return['errorcode'] = $number;
		$return['errorname'] = errorcode($number);
	}
	else
		$return['success'] = TRUE;
	return ($return);
}

function pathcreator($path){
	$path = explode("/", $path);
	foreach ($path as $key => $value) {
		if (isset($tmp))
			unset($tmp);
		for ($i=0; $i <= (int)$key; $i++) {
			if (isset($tmp))
				$tmp .= "/".$path[$i];
			else
				$tmp = $path[$i];
		}
		if (isset($tmp) && $tmp != ""){
			if (!file_exists($tmp))
				mkdir($tmp);
		}
	}
	if (!file_exists($tmp.'/current'))
		mkdir($tmp.'/current');
	return $tmp;
}

function subpathcreator($path){
	$path = explode("/", $path);
	foreach ($path as $key => $value) {
		if (isset($tmp))
			unset($tmp);
		for ($i=0; $i < (int)$key; $i++) {
			if (isset($tmp))
				$tmp .= "/".$path[$i];
			else
				$tmp = $path[$i];
		}
		if (isset($tmp) && $tmp != ""){
			if (!file_exists($tmp))
				mkdir($tmp);
		}
	}
}

function folddel($path){
	$files = array_diff(scandir($path), array('.','..'));
	foreach ($files as $file) {
		if (is_dir("$path/$file"))
			folddel("$path/$file");
		else
			unlink("$path/$file");
	}
	rmdir($path);
}

?>