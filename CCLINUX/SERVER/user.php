<?php
require("db.php");

function errorcode($number){
	$error[5] = "User not exists";
	$error[6] = "Need password !";
	$error[7] = "PASSWORD PAS BON";
	$error[403] = "No data !";
	return $error[$number];
}

function error($error = 0, $username = NULL, $passwd = NULL){
	if ($error > 0){
		$return['ok'] = FALSE;
		$return['errorcode'] = $error;
		$return['errorname'] = errorcode($error);
	}
	else {
		$return['ok'] = TRUE;
		$return['username'] = $username;
		$return['password'] = $passwd;

	}
	return ($return);
}

if (isset($_POST['username'])){
	$query = "SELECT * FROM `users` WHERE name = '".$_POST['username']."'";
	$_POST['user'] = db()->query($query)->fetch();
}
if (count($_POST) == 0)
	$return = error(403);
elseif (!isset($_POST['user']) || !isset($_POST['user']['name']))
	$return = error(5);
elseif (!isset($_POST['password']))
	$return = error(6);
elseif ($_POST['user']['password'] != $_POST['password'])
	$return = error(7);
else {
	$return = error(0,$_POST['user']['name'], $_POST['user']['password']);
}
$return = json_encode($return);
echo $return;
?>