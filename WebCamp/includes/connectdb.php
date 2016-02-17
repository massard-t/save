<?php
session_start();
include "../vendor/rain.tpl.php";
$t = new RainTPL();
raintpl::configure ("tpl_dir", "./");
$dtb = mysqli_connect("localhost", "db_bonanza", "db_bonanza", "data_base");
if ($dtb === false) {
    echo "error " . mysqli_connect_errno();
    echo mysql_errno($dtb) . ": " . mysql_error($dtb). "\n";
}
$query 		= 'SELECT * FROM Site';
$result 	= mysqli_query($dtb, $query);
$site 		= mysqli_fetch_assoc($result);
$co 		= 0;
if (isset($_SESSION['ID'])) {
	$co = 1;
	$t->assign('role', $_SESSION['role']);
} else
	header("Location: ../index.php?co=false");

$t->assign('co',$co);
$t->assign('nom_du_site', $site['name']);
$t->assign('description', $site['description']);
$t->assign('nom_complet', "".$_SESSION['firstname']." ".$_SESSION['lastname']."");
?>