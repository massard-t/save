<?php
	include "../includes/connectdb.php";
	if (isset($_SESSION['ID'])) {
		$query 		= "SELECT role FROM Users WHERE ID = '".$_SESSION['ID']."';";
		$result 	= mysqli_query($dtb, $query);
	} else {
		echo "Vous n'êtes pas connecté";
	}
?>