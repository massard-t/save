<?php
include "../includes/connectdb.php";
if ($_SESSION['role'] == 0) {
	if (isset($_GET['id'])) {
		$query = "UPDATE Users SET role = 2 WHERE ID = '". $_GET['id'] ."';";
		mysqli_query($dtb, $query);
		header('Location: employer.php?message=TRUE');
	}
}
?>