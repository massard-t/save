<?php
include_once "../core/head.php";
$bdd = mysqli_connect('localhost', 'bob', '224499', 'segfault_massar_t');
if (!$bdd) {
    die("connection failed:" . mysqli_connect_error());
}
$sql = "SELECT * FROM Utilisateurs WHERE (Email='" . $_POST['login'] . "' AND Passwd='" . $_POST['password'] . "') ;";
$login_select = mysqli_query($bdd, $sql);
if (mysqli_num_rows($login_select) == 1) {
	unset($sql);
	$sql = "SELECT ID, Nom, Prenom, Roles FROM Utilisateurs WHERE (Email='" . $_POST['login'] . "' AND Passwd='" . $_POST['password'] . "') ;";
	$result = mysqli_query($bdd, $sql);
	while ($row = mysqli_fetch_assoc($result)) {
		$_SESSION['prenom'] = $row['Prenom'];
		$_SESSION['nom'] = $row['Nom'];
		$_SESSION['ID'] = $row['ID'];
		$_SESSION['role'] = $row['Roles']; 
	}
} else {
	echo "Connection failed";
}
header("Location: ../index.php");
?>