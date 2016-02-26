<?php
	if(!session_id())
	{
    	session_start();
	}
	$bdd = mysqli_connect('localhost', 'bob', '224499', 'segfault_massar_t');
	if (isset($_SESSION['ID'])) {
		$user = $_SESSION['ID'];
		$resultat = mysqli_query($bdd, 'SELECT * FROM Produit_Utilisateur WHERE ID_utilisateur = "' . $user . '"');
	}
	if (isset($_GET['no-Login'])) {
		$url = "http://".$_SERVER["HTTP_HOST"]."/src/login.php";
		header("location:".$url);
	}
	$cart_counter = mysqli_num_rows($resultat); 
	function 	no_inj($str) {
		if (get_magic_quotes_gpc()) {
			$sanitize = mysqli_real_escape_string(stripslashes($str));	 
		} else {
			$sanitize = mysqli_real_escape_string($str);	
		} 
		return $sanitize;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title> SEGFAULT CORP </title>
	<link rel="shortcut icon" href="../images/favicon.ico">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/homepage.css">
</head>