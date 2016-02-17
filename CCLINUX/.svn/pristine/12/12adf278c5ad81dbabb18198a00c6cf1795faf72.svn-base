<?php

require_once('listfunc.php');

function logversion($type, $change, $new){
	$dir = preg_replace("#current.*#", "", $new);
	$version = version($dir."/current");
	$idback = versionid($dir);
	$new = preg_replace("#.*current#", "", $new);
	if ($type == 0)
		$terms = "DOSSIER ";
	else
		$terms = "FICHIER ";
	if ($change == 1)
		$terms .= "AJOUTE";
	elseif ($change == 2)
		$terms .= "MODIFIE";
	else
		$terms .= "SUPPRIME";
	$txt = $version.",".$type.",".$change.",".$terms.",".$new."\n";
	file_put_contents ($dir."/version.log",$txt, FILE_APPEND);
	$tmp = "INSERT INTO modification (Backup, Version, Type, Changed, Path)";
	$req = db()->prepare($tmp." VALUES (:back, :vers, :type, :change, :path)");
	$req->execute(array(
		"back" => $idback,
		"vers" => $version,
		"type" => $type,
		"change" => $change,
		"path" => $new
		));
}

function unzipboucle($zip, $i, $stat, $dir){
	$new = $dir."/current/".$stat['name'];
	$bak = $dir."/tmp/".$stat['name'];
	if (file_exists($new) && file_exists($bak)){
		if ($stat['crc'] == hexdec(hash_file('crc32b', $bak))){
			if (!is_dir($bak))
				unlink($bak);
			$zip->deleteIndex($i);
		}
		else {
			logversion(1, 2, $new);
			rename($bak, $new);
		}
	}
	else{
		if (file_exists($bak)){
			if (is_file($bak)){
				logversion(1, 1, $new);
				rename($bak, $new);
			}
			else {
				logversion(0, 1, $new);
				subpathcreator($new);
			}
		}
	}
}

function unzip($finalpath,$dir){
	$zip = new ZipArchive;
	if ($zip->open($finalpath) === TRUE) {
		$zip->extractTo($dir."/tmp");
		compare($dir."/current");
		for( $i = 0; $i < $zip->numFiles; $i++ ){
			$stat = $zip->statIndex($i);
			unzipboucle($zip, $i, $stat, $dir);
		}
		$zip->close();
		folddel($dir."/tmp");
	}
}

function initiateversion($user, $path, $i, $data){
	$backpath = getcwd()."/backups/".$user."/backup.log";
	if ($i == 1){
		file_put_contents($backpath, $path."/\n", FILE_APPEND);
		$query = "SELECT * FROM `backup` WHERE Name = '".basename($path)."'";
		$query .= " AND User = '".$data['user']['id']."'";
		$rslt = db()->query($query)->fetch();
		if (count($rslt) <= 1){
			$req = db()->prepare("INSERT INTO backup (Name, User)".
				"VALUES (:name, :user)");
			$req->execute(array(
				"name" => basename($path),
				"user" => $data['user']['id']
				));
		}
	}
}

function pathuser($data, $file){
	$user = $data['username'];
	$path = $data['path'];
	$finalpath = getcwd()."/backups/".$user.$path;
	$finalpath = pathcreator($finalpath);
	$i = 0;
	while (file_exists($finalpath."/".++$i.".zip"));
	initiateversion($user, $path, $i, $data);
	$dir = $finalpath;
	$finalpath .= "/".$i.".zip";
	if (!file_exists($finalpath)){
		if (move_uploaded_file($file["tmp_name"], $finalpath)){
			unzip($finalpath,$dir);
			if (file_exists($finalpath))
				return(error(0));
			else
				return(error(9));
		}
		else
			return(error(1));
	}
	else
		return(error(2));
}


?>