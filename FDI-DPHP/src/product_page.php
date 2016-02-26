<?php
	include "../core/head.php";
?>
<body>
	<script src="../js/jquery.js"></script>
	<script src="../js/js-cookie-master/src/js.cookie.js"></script>
	
	<?php
		include "../core/menu.php";
		//include "../core/sidebar.php";
		if (isset($_GET['produit'])) {
			$produit = $_GET['produit'];
			$resultat = mysqli_query($bdd, 'SELECT * FROM Produits WHERE Libelle = "'.$produit.'" LIMIT 0, 1');
			while($row = mysqli_fetch_assoc($resultat)) {
		
	?>
		<div class="core">
				<div class="recent_products">
					<h3><?php echo ($row['Libelle']); ?></h3>
					<img src="../images/<?php echo ($row['Libelle']); ?>.svg" class="image" alt="Missing picture"/><br/>
						<div class="description">
						<p><?php echo ($row['Description']); ?></p>
					</div><br/>
					<span class="quick_action_a"><?php echo ($row['Prix_vente']); ?> $</span></center><br/><br/><br/>
				</div>
				<hr>				
				<center><a class="no_float quick_action_a" href="shopping.php?add&pdt=<?php echo ($row['ID']); ?>">Add to cart</a></center></center><br/><br/><br/>
				<hr>
				
				<?php
					if (isset($_POST['send'])) {
						$comment = $_POST['comment'];
						$comment = htmlspecialchars($comment);
						$produit = htmlspecialchars($_GET['produit']);
							$query = 'SELECT ID FROM Produits WHERE Libelle = "'.$produit.'"';
							$result = mysqli_query($bdd, $query);
							while ($row = mysqli_fetch_assoc($result)) {
								$ID_produit = $row['ID'];
							}
							
							$query = 'SELECT Nom FROM Utilisateurs WHERE ID = "'.$user.'"';
							$result = mysqli_query($bdd, $query);
							while ($row = mysqli_fetch_assoc($result)) {
								$nom_user = $row['Nom'];
							}
							
							$today = date("Y-m-d H:i:s");
							$query = 'INSERT INTO Commentaires (comment, time, user, ID_produit)
									  VALUES ("'.$comment.'", "'.$today.'", "'.$nom_user.'", "'.$ID_produit.'")';
							mysqli_query($bdd, $query);
					}
					$query = 'SELECT * FROM Commentaires WHERE ID_produit = (SELECT ID FROM Produits WHERE Libelle = "'.$produit.'") ';
					$result = mysqli_query($bdd, $query);
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							?>

								<div class="popular_product">
									<h4>Par <?php echo ($row['user']);?> le <?php echo ($row['time']); ?> </h4>
									<hr />
									<p><?php echo ($row['comment']); ?></p>
								</div>	

							<?php
						}
					}
				?>
				<h3>Commentaires</h3>
				
				<form cible="product_page.php?produit=<?php echo ($_GET['produit']); ?>" method="post">
					<div class="commentaires">

					</div>				
					<textarea id="comment_textbox" type="text" name="comment" value="Your comment here" style="width: 97.1%; margin: 0 auto; min-height: 200px; font-family: arial"></textarea>
					
					<center><input id="comment_validate" type="submit" name="send" value="Send !"></center><br />
				</form>
		</div>

		<?php
	}
}
?>

<?php
	include "../core/footer.php";
?>
