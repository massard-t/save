<?php
require("db.php");

function errorcode($number){
	$error[1] = "Backup not exists";
	$error[2] = "Where is your backup name ?";
	$error[3] = "Empty directory";
	$error[4] = "Where is your user ?";
	$error[5] = "User not exists";
	return $error[$number];
}

function error($number = 5, $size = FALSE){
	if ($size === FALSE){
		$return['size'] = FALSE;
		$return['errorcode'] = $number;
		$return['errorname'] = errorcode($number);
	}
	else {
		$return['size'] = $size;
	}
	return ($return);
}

if (!isset($_POST['user']))
	$return = error(4);
elseif (!isset($_POST['backup']))
	$return = error(2);
else
	$return = usersize($_POST['user'],$_POST['backup']);
$return = json_encode($return);
echo $return;

function usersize($username, $backupname){
	$f = getcwd()."/backups/".$username."/".$backupname;
	if (!file_exists(getcwd()."/backups/".$username."/"))
		return (error());
	elseif (!file_exists($f))
		return (error(1));
	$disk_used = foldersize($f);
	if ($disk_used == 0)
		return(error(3));
	return (error(0, $disk_used));
}

function foldersize($path) {
	$total_size = 0;
	$files = scandir($path);
	$cleanPath = rtrim($path, '/'). '/';
	foreach($files as $t) {
		if ($t != "." && $t != "..") {
			$currentFile = $cleanPath . $t;
			$tmp = preg_match("#/backups/[^/]*/[^/]*/current#", $cleanPath.$t);
			if (is_dir($currentFile)) {
				$size = foldersize($currentFile);
				$total_size += $size;
			}
			else{
				$size = filesize($currentFile);
				if ($tmp == 1){
					$total_size += $size;
				}
			}
		}
	}
	return $total_size;
}
?>