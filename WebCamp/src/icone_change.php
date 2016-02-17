<?php
include "../includes/connectdb.php";
$dossier = '../avatars/';
$fichier = basename($_FILES['avatar']['name']);
$taille = filesize($_FILES['avatar']['tmp_name']);
$extensions = array('.png', '.jpg', '.jpeg');
$extension = strrchr($_FILES['avatar']['name'], '.'); 
$newname = $_SESSION['ID'].$extension;

if(!in_array($extension, $extensions)){
     echo "1";
     $erreur = 'Vous devez uploader un fichier de type png, jpg, jpeg...';
}
/*if($taille > $taille_max){
     $erreur = "Votre fichier est trop grand";
}*/
if(!isset($erreur)){
     if(move_uploaded_file($_FILES['avatar']['tmp_name'], $dossier.$newname)){
               echo 'Upload effectuée avec succès !';
     }else{
          echo 'Erreur dans l\'Upload du Fichier';
     }
}
else{
     echo $erreur;
}

$query = "UPDATE Users SET avatar = '".$extension."';";
mysqli_query($dtb, $query);
header("Location: profil.php");
?>
<!-- 
 move_uploaded_file($_FILES['monfichier']['tmp_name'], 'avatars/' . basename($_FILES['monfichier']['name']));

 move_uploaded_file($_FILES['monfichier']['tmp_name'], 'avatars/' . $nouveau_nom_mais_pour_l_instant_tu_t_en_fous);
 -->