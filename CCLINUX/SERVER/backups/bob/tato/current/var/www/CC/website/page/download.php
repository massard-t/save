<?php
$idBackup = isset($_GET['id']) ? intval($_GET['id']) : -1;
if ($idBackup == -1)
	die();
$backup = new Backup($idBackup, $bdd);
$file = $backup->get_name().".zip";
$user = "bob";
$data = recupArchive($user, $file);
header("Content-type: application/zip");
header("Content-Disposition: attachment; filename=$file");
header("Content-Length: ".strlen($data));
header("Pragma: no-cache");
header("Expires: 0");
ob_clean();
flush();
echo $data;
?>
