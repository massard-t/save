<?php
require("db.php");

function errorcode($number){
	$error[1] = "Backup not exists";
	$error[2] = "Where is your backup name ?";
	$error[3] = "Empty directory";
	$error[4] = "Where is your user ?";
	$error[5] = "User not exists";
	$error[6] = "Where is your path ?";
	$error[7] = "Folder not exists";
	$error[8] = "File not exists";
	$error[9] = "Is a folder";
	return $error[$number];
}

function error($number, $content = FALSE){
	if ($number > 0){
		$return['content'] = FALSE;
		$return['errorcode'] = $number;
		$return['errorname'] = errorcode($number);
	}
	else {
		$return['content'] = $content;
	}
	return ($return);
}

function datafind($user, $backup, $path){
	if (isset($path) && $path[0] == "/")
		$path = substr($path, 1);
	if (!file_exists(getcwd()."/backups/".$user."/"))
		return (error(5));
	elseif (!file_exists(getcwd()."/backups/".$user."/".$backup."/current/"))
		return (error(3));
	elseif (!file_exists(getcwd()."/backups/".$user."/".$backup."/current/".$path))
		return (error(8));
	elseif (!is_file(getcwd()."/backups/".$user."/".$backup."/current/".$path))
		return (error(9));
	$data = getcwd()."/backups/".$user."/".$backup."/current/".$path;
	$content = htmlentities(file_get_contents($data));
	return ($content);
}

// $_POST['user'] = "bob";
// $_POST['backup'] = "tato";
// $_POST['path'] = "var/www/CC/website/page/backup.php";
if (!isset($_POST['user']))
	$return = error(4);
elseif (!isset($_POST['backup']))
	$return = error(2);
elseif (!isset($_POST['path']))
	$return = error(6);
else{
	$return = datafind($_POST['user'], $_POST['backup'], $_POST['path']);
}
if (is_array($return))
	$return = json_encode($return, JSON_UNESCAPED_SLASHES);
echo $return;
?>