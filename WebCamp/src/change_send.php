<?php
require "../includes/connectdb.php";

$id = $_SESSION['ID'];
$query = "SELECT * FROM Users WHERE ID = $id;";
$result = mysqli_query($dtb, $query);
while ($row = mysqli_fetch_assoc($result)) {
	$t->assign('firstname', $row['firstname']);
	$t->assign('lastname', $row['lastname']);
	$t->assign('dob', $row['dob']);
	$t->assign('town_ob', $row['town_ob']);
	$t->assign('country', $row['country']);
	$t->assign('phone', $row['phone']);
	$t->assign('pass', $row['pass']);
	$t->assign('mail', $row['mail']);
	$t->assign('adresse', $row['adresse']);
	$t->assign('description', $row['description']);
	$t->assign('form', 'form');
}
if ($dtb === false) {
    echo "error " . mysqli_connect_errno();
} else {	
	$valid = 0;	
	if (isset($_POST['Prenom']) AND $_POST['Prenom'] !== ""){
		$table = "UPDATE data_base.Users SET firstname = \"{$_POST['Prenom']}\" WHERE ID = $id;";
		mysqli_query($dtb, $table);
		$valid = 1;
	}
	if (isset($_POST['Nom']) AND $_POST['Nom'] !== ""){
		$table = "UPDATE data_base.Users SET lastname = \"{$_POST['Nom']}\" WHERE ID = $id;";
		mysqli_query($dtb, $table);
		$valid = 1;
	}
	if (isset($_POST['dob']) AND $_POST['dob'] !== ""){
		$table = "UPDATE data_base.Users SET dob = \"{$_POST['dob']}\" WHERE ID = $id;";
		mysqli_query($dtb, $table);
		$valid = 1;
	}
	if (isset($_POST['t_dob']) AND $_POST['t_dob'] !== ""){
		$table = "UPDATE data_base.Users SET town_ob = \"{$_POST['t_dob']}\" WHERE ID = $id;";
		mysqli_query($dtb, $table);
		$valid = 1;
	}
	if (isset($_POST['country']) AND $_POST['country'] !== ""){
		$table = "UPDATE data_base.Users SET country = \"{$_POST['country']}\" WHERE ID = $id;";
		mysqli_query($dtb, $table);
		$valid = 1;
	}
	if (isset($_POST['phone']) AND $_POST['phone'] !== ""){
		$table = "UPDATE data_base.Users SET phone = \"{$_POST['phone']}\" WHERE ID = $id;";
		mysqli_query($dtb, $table);
		$valid = 1;
	}
	if (isset($_POST['pass']) AND $_POST['pass'] !== ""){
		$table = "UPDATE data_base.Users SET password = \"{$_POST['pass']}\" WHERE ID = $id;";
		mysqli_query($dtb, $table);
		$valid = 1;
	}
	if (isset($_POST['mail']) AND $_POST['mail'] !== ""){
		$table = "UPDATE data_base.Users SET mail = \"{$_POST['mail']}\" WHERE ID = $id;";
		mysqli_query($dtb, $table);
		$valid = 1;
	}
	if (isset($_POST['adresse']) AND $_POST['adresse'] !== ""){
		$table = "UPDATE data_base.Users SET address = \"{$_POST['adresse']}\" WHERE ID = $id;";
		mysqli_query($dtb, $table);
		$valid = 1;
	}
	if (isset($_POST['description']) AND $_POST['description'] !== ""){
		$table = "UPDATE data_base.Users SET description = \"{$_POST['description']}\" WHERE ID = $id;";
		mysqli_query($dtb, $table);
		$valid = 1;
	}
	if ($valid === 1) {
		$t->assign('valid', 1);
	} else {
		$t->assign('valid', 0);
	}
	$t->draw('edit_profil');
}
header('Location: change.php');
?> 