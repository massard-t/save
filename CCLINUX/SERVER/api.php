<?php
require("db.php");

function errorcode($number){
	$error[1] = "File changed";
	$error[2] = "File not exist";
	$error[3] = "File not changed";
	$error[4] = "Where is your path ?!";
	$error[5] = "User not exists";
	$error[6] = "Where is your md5 ?!";
	$error[7] = "PASSWORD PAS BON";
	return $error[$number];
}

function error($number){
	if ((int)$number > 2){
		$return['update'] = FALSE;
		$return['errorcode'] = $number;
		$return['errorname'] = errorcode($number);
	}
	else {
		$return['update'] = TRUE;
		$return['errorcode'] = $number;
		$return['errorname'] = errorcode($number);
	}
	return ($return);
}

function pathuser($data){
	$user = $data['username'];
	$path = $data['path'];
	$finalpath = getcwd()."/backups/".$user.$path;
	if (file_exists($finalpath)){
		if (md5_file($finalpath) == $data['md5'])
			return(error(3));
		else
			return(error(1));
	}
	else
		return(error(2));
}

$_POST['username'] = "Antoine";
$_POST['password'] = "aee4bd941f8b4d9e39210c06c44fcb71";
$query = "SELECT * FROM `users` WHERE name = '".$_POST['username']."'";
$arr = $db->query($query)->fetch();
$version = 1;

if (!isset($arr) || !isset($arr['name']))
	$return = error(5);
elseif ($arr['password'] != $_POST['password'])
	$return = error(7);
elseif (!isset($_POST["md5"]))
	$return = error(6);
elseif (!isset($_POST["path"]))
	$return = error(4);
else
	$return = pathuser($_POST);
$return = json_encode($return);
echo $return;
?>