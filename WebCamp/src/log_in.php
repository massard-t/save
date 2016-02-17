<?php
require "../includes/connectdb.php";
if (isset($_POST['mail'])){
	if (isset($_POST['password'])){
		$query = "SELECT * FROM Users WHERE mail = '".$_POST['mail']."';";
		$result = mysqli_query($dtb, $query);
		if (mysqli_num_rows($result) == 1){
			while ($row = mysqli_fetch_assoc($result)){
				$pwd_dtb 			= $row['password'];
				$user_id 			= $row['ID'];
				$user_last_name 	= $row['firstname'];
				$user_first_name 	= $row['lastname'];
				$user_email 		= $row['mail'];
				$user_role 			= $row['role'];
				$user_adress 		= $row['address'];
				$user_dob 			= $row['dob'];
				$user_valid 		= $row['confirmation'];
			}
			if ($pwd_dtb == $_POST['password']) {
				if ($user_valid == 1) {
					$_SESSION['ID'] 		= $user_id;
					$_SESSION['firstname'] 	= $user_first_name;
					$_SESSION['lastname'] 	= $user_last_name;
					$_SESSION['email'] 		= $user_email;
					$_SESSION['role']		= $user_role;
					$_SESSION['address'] 	= $user_adress;
					$_SESSION['dob'] 		= $user_dob;
					$_SESSION['valid']		= $user_valid;
					header('Location: profil.php');
				} else {
					header("Location: ../index.php?valid=false");
				}
			} else {
				echo "Votre mot de passe est incorrect";
				header("Location: ../index.php?co=false");
			}
		} else {
			echo "Une erreur est survenue, verifiez vos identifiants puis continuez";
			header("Location: ../index.php?error=true");
		}
	} else {
		echo "Votre mot de passe n'est pas définis";
		header("Location: ../index.php?mdp=false");
	}
} else {
	echo "Votre adresse email n'est pas définie";
	header("Location: ../index.php?mail=false");
}
?>