<?php
	include "../core/head.php";
	$query = 'DELETE FROM Produit_Utilisateur WHERE ID_utilisateur = "' . $user . '"';
	mysqli_query($bdd, $query);
	if(!isset($_SESSION['ID'])) {
	header("Location: ../index.php");
}
?>
<body>
	<script src="../js/jquery.js"></script>
	<script src="../js/js-cookie-master/src/js.cookie.js"></script>
	<?php
		include "../core/menu.php";
	?>
	<div class="core">
		<div class="text">
			<center>
				<h2>
					Thank you for ordering !
				</h2>
				<hr>
				<?php
					$nombre = rand(10000000, 99999999);
					echo ('<p> Your order has the following ID: '. $nombre .'</p>');
				?>
			</center>
		<a href="../index.php" class="quick_action_a">Go back to the home page!</a>
		</div><br />
	<?php
		include "../core/footer.php";
	?>