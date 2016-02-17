<?php

require_once("db.php");
require_once("mainfunctions.php");
require_once("mainfunctions2.php");
require_once("mainfunctions3.php");

function main($post, $files){
	if (isset($post['username'])){
		$query = "SELECT * FROM `users` WHERE name = '".$post['username']."'";
		$post['user'] = db()->query($query)->fetch();
	}
	if (count($post) == 0)
		$return = error(403);
	elseif (!isset($post['user']) || !isset($post['user']['name']))
		$return = error(5);
	elseif ($post['user']['password'] != $post['password'])
		$return = error(7);
	elseif (count($files) < 1)
		$return = error(6);
	elseif (md5_file($files[array_keys($files)[0]]['tmp_name']) != $post['md5'])
		$return = error(3);
	else {
		if (!isset($post['path']))
			$post['path'] = "/".$post['name'];
		$file = $files[array_keys($files)[0]];
		$return = pathuser($post, $file);
	}
	$return = json_encode($return);
	echo $return;
}

?>