<?php
require "../includes/connectdb.php";
$query = "SELECT Users.*, Boss_internship.user_ID FROM Users, Boss_internship WHERE Boss_internship.`postule_ID` = Users.ID AND Boss_internship.user_ID='" . $_SESSION['ID'] . "';";
$result = mysqli_query($dtb, $query);
while($row = mysqli_fetch_assoc($result))
{
	$tab[$row['ID']]['firstname'] = $row['firstname'];
	$tab[$row['ID']]['lastname'] = $row['lastname'];
	$tab[$row['ID']]['mail'] = $row['mail'];
	$tab[$row['ID']]['ID'] = $row['ID'];
}
$t->assign('tab', $tab);
$t->draw('ask_answer');
?>
