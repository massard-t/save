<?php
$idBackup = isset($_GET['id']) ? intval($_GET['id']) : -1;
if ($idBackup == -1 || !isset($_GET['file']))
	die();
$backup = new Backup($idBackup, $bdd);
$backname = $backup->get_name();
$user = "bob";
$path = $_GET['file'];
$data = recupfilecontent($user, $backname, $path);
echo $data;
?>
