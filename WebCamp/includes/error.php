<?php 
	if (isset($_GET['valid'])) {
		echo "
				<div class='ui negative message'>
				  <i class='close icon'></i>
				  <div class='header'>
				    Erreur de connexion
				  </div>
				  <p>Vous n'avez pas validé votre email
				</p></div>
		";
	}
?>