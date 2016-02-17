<?php

function db(){
	try {
		$strConnection = 'mysql:host=localhost;dbname=backito';
		$arrExtraParam= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
		$db = new PDO($strConnection, 'backitoto', 'a7VSJ29umQMwHY4j', $arrExtraParam);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return ($db);
	}
	catch(PDOException $e) {
		$msg = 'ERREUR PDO dans '.$e->getFile().' L.'.$e->getLine().' : '.$e->getMessage();
		die($msg);
	}
}

?>
