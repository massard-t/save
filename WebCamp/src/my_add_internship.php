<?php
require "../includes/connectdb.php";

if ($_SESSION['role'] == 2 || $_SESSION['role'] == 0)
{
	$query = "INSERT INTO `Internship`(`name`, `place`, `skills`, `society`, `my_date`, `description`) VALUES('" . $_POST['name']."', '" . $_POST['place']."', '" . $_POST['skills'] . "', '"
		.$_POST['society']. "', '". date("Y-m-d H:i:s") . "', '" . $_POST['description'] . "')";
	$result = mysqli_query($dtb, $query);
	$id = mysqli_insert_id($dtb);
	$query="INSERT INTO `Boss_internship`(user_ID, intern_ID) VALUES('" . $_SESSION['ID'] . "', '" . $id . "');";
	$resultbis = mysqli_query($dtb, $query);
	if ($result!= 0)
		header("Location: list_stages.php");
}
else
	header("Location: profil.php");
//$t->draw('add_internship');
?>