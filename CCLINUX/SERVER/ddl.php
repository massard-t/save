<?php
require("db.php");

function errorcode($number){
	$error[1] = "Backup not exists";
	$error[2] = "Where is your backup name ?";
	$error[3] = "Empty directory";
	$error[4] = "Where is your user ?";
	$error[5] = "User not exists";
	return $error[$number];
}

function error($number = 5, $size = FALSE){
	if ($size === FALSE){
		$return['size'] = FALSE;
		$return['errorcode'] = $number;
		$return['errorname'] = errorcode($number);
	}
	else {
		$return['size'] = $size;
	}
	return ($return);
}

function zipfolder($username, $backupname){
	$f = getcwd()."/backups/".$username."/".$backupname."/current/";
	if (!file_exists(getcwd()."/backups/".$username."/"))
		return (error());
	elseif (!file_exists($f))
		return (error(1));
	if (!file_exists(getcwd()."/tmp/"))
		mkdir(getcwd()."/tmp/");
	if (file_exists(getcwd()."/tmp/".$username."_".$backupname))
		unlink(getcwd()."/tmp/".$username."_".$backupname);
	zipbackup($f, getcwd()."/tmp/".$username."_", $backupname.".zip");
	return (array('url' => "http://92.222.227.175:1234/tmp/".$username."_".$backupname.".zip"));
}

function zipbackup($path, $pathzip, $zipname) {
	$files = scandir($path);
	foreach($files as $t) {
		if ($t != "." && $t != "..") {
			$currentFile = $path . $t;
			if (is_dir($currentFile))
				zipbackup($currentFile."/", $pathzip, $zipname);
			else{
				$filezippath = preg_replace("#.*/current#","", $currentFile);
				$zip = new ZipArchive;
				$toto = $zip->open($pathzip.$zipname, ZipArchive::CREATE );
				if ($toto === TRUE) {
					$zip->addFile($currentFile, $filezippath);
					$zip->close();
				}
				else {
					echo 'échec, code:' . $toto;
				}
			}
		}
	}
}

// $_POST['user'] = "bob";
// $_POST['backup'] = "tato";

if (!isset($_POST['user']))
	$return = error(4);
elseif (!isset($_POST['backup']))
	$return = error(2);
else{
	$file = $_POST['backup'].".zip";
	//header("Content-type: application/zip");
	//header("Content-Disposition: attachment; filename=$file");
	// header("Pragma: no-cache");
	// header("Expires: 0");
	$return = zipfolder($_POST['user'],$_POST['backup']);
	if (isset($return['url']))
		echo file_get_contents($return['url']	);
	unlink($return['url']);
}
$return = json_encode($return, JSON_UNESCAPED_SLASHES);

?>