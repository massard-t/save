<?php
require "../includes/connectdb.php";
session_start();
$query = "SELECT user_ID, intern_ID FROM Users_internship WHERE user_ID='" . $_SESSION['ID'] . "' AND intern_ID='" . $_GET['id'] . "';";
$result = mysqli_query($dtb, $query);
$num_rows = mysqli_num_rows($result);
if ($num_rows == 0)
{
	$query = "INSERT INTO Users_internship(user_ID, status, intern_ID) VALUES(" . $_SESSION['ID'] . ", 1," . $_GET['id'] . ");";
	$result = mysqli_query($dtb, $query);
	$querybis = "UPDATE `Boss_internship` SET `status`=1 , `postule_ID`='" . $_SESSION['ID'] . "' WHERE intern_ID='" . $_GET['id']. "';";
	$resultbis = mysqli_query($dtb, $querybis);
}

	echo "<a href=\"list_stages.php#" . $_GET['id'] . "\"></a>";
?>
<script type="text/javascript">
	document.querySelector("a").click();
</script>