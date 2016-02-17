<?php
	include "../includes/connectdb.php";
	if(isset($_SESSION['ID'])){
		session_unset();
	}
	if(!isset($_SESSION['ID'])){
		header('Location: ../index.php');
	}
?>