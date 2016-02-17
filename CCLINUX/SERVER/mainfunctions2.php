<?php

require_once('listfunc.php');

function removecurrentemptyfolders($path){
	$version = version($path);
	if (is_dir($path)){
		$files = array_diff(scandir($path), array('.','..'));
		foreach ($files as $file) {
			if (is_dir("$path/$file"))
				removecurrentemptyfolders("$path/$file");
		}
	}
	if (is_dir($path) && count(array_diff(scandir("$path"), array('.','..'))) == 0){
		rmdir($path);
		logversion(0, 0, $path);
	}
}

function version($dir){
	$idir = preg_replace("#current.*#", "", $dir);
	$i = 0;
	while (file_exists($idir.++$i.".zip"));
	$version = --$i;
	return ($version);
}

function comparemain($dir, $ff, $version){
	$bak = $dir.'/'.$ff;
	$new = str_replace("current", "tmp", $dir).'/'.$ff;
	if ($ff != "version.log" && !file_exists($new)){
		$pattern = "/version.log";
		$replace = preg_replace("#\/current.*$#", $pattern, $dir);
		if (file_exists($bak) && !is_dir($bak)){
			unlink($bak);
			logversion(1, 0, $dir."/".$ff);
		}
	}
	if(is_dir($dir.'/'.$ff) && $ff != "."){
		compare($dir.'/'.$ff);
	}
	if (!file_exists(str_replace("current", "tmp", $dir))){
		removecurrentemptyfolders($dir);
	}
}

function compare($dir){
	$version = version($dir);
	$ffs = scandir($dir);
	foreach($ffs as $ff){
		if($ff != '.' && $ff != '..'){
			comparemain($dir, $ff, $version);
		}
	}
}

function versionid($dir){
	$user = explode("/", preg_replace("#.*backups/#", "", $dir));
	$query = "SELECT * FROM `users` WHERE name = '".$user[0]."'";
	$userid = db()->query($query)->fetch();
	$query = "SELECT * FROM `backup` WHERE Name = '".$user[count($user)-2];
	$query .= "' AND User = ".$userid['id'];
	$versionid = db()->query($query)->fetch();
	return ($versionid['ID']);
}

?>