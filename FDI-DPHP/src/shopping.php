<?php 
include "../core/head.php";
if(!isset($_SESSION['ID'])) {
	header("Location: login.php");
}
		$product = $_GET['idp'];
	if (isset($_POST['submit_minus'])) {		
		if (isset($_POST['number'])) {
			if ($_POST['number'] == 1) {
				$query = 'DELETE FROM Produit_Utilisateur WHERE ID_utilisateur = "' . $user . '" AND ID_produit = "' . $product . '"';
				mysqli_query($bdd, $query);
			} else {
				$number = $_POST['number'] - 1;
				$toto = 'UPDATE Produit_Utilisateur SET Quantity = "' . ($_POST['number'] -= 1) . '" WHERE ID_utilisateur = "' . $user . '" AND ID_produit = "' . $product . '"';
				mysqli_query($bdd, $toto);
			}
		}
	} else if (isset($_POST['submit_plus'])) {
		$number = $_POST['number'] + 1;
		$toto = 'UPDATE Produit_Utilisateur SET Quantity = ' . $number . ' WHERE ID_utilisateur = "' . $user . '" AND ID_produit = "' . $product . '"';
		mysqli_query($bdd, $toto);
	  }
	if (isset($_GET['remove'])) {
		if (isset($_GET['idp'])) {
			$query = 'DELETE FROM Produit_Utilisateur WHERE ID_utilisateur = "' . $user . '" AND ID_produit = "' . $product . '"';
			mysqli_query($bdd, $query);
		}
	}
	if (isset($_GET['add']) AND isset($_GET['pdt'])) {
		if (isset($_SESSION['prenom'])) {
			$sql = 'SELECT * FROM Produit_Utilisateur WHERE ID_utilisateur = "'.$user.'" AND ID_produit = "'.$_GET['pdt'].'"';
			$result = mysqli_query($bdd, $sql);
			if (mysqli_num_rows($result) == 0) { 
			$sql = "INSERT INTO Produit_Utilisateur (ID_utilisateur, ID_produit, Quantity)
					VALUES ('" . $user . "', '" . $_GET['pdt'] . "', '1')";

			mysqli_query($bdd, $sql);
			header('Location: shopping.php'); 
			} else {
				$resultat = mysqli_query($bdd, 'SELECT DISTINCT Quantity FROM Produit_Utilisateur WHERE ID_produit = "' . $_GET['pdt'] . '" AND ID_utilisateur = "'.$user.'"');
				if (mysqli_num_rows($result) > 0) {
				    while($row = mysqli_fetch_assoc($resultat)) {
				        $quantity = $row['Quantity'] + 1;
				    }
				    $toto = 'UPDATE Produit_Utilisateur SET Quantity = ' . $quantity . ' WHERE ID_utilisateur = "' . $user . '" AND ID_produit = "' . $_GET['pdt'] . '"';
					mysqli_query($bdd, $toto);
				} else {
				    echo "0 results";
				}

				header('Location: shopping.php'); 
			}
		} else {

		}
	}
?>
<?php
	$resultat = mysqli_query($bdd, 'SELECT DISTINCT * FROM Produit_Utilisateur WHERE ID_utilisateur = "' . $user . '" ORDER BY ID_produit DESC');
?>
<body>
	<script src="../js/jquery.js"></script>
	<script src="../js/js-cookie-master/src/js.cookie.js"></script>
	<?php
		include "../core/menu.php";
	?>
	<div class="core">
		<div>
			<div>
				<center>
					<?php
						if (mysqli_num_rows($resultat) == 0) {
							if (isset($_SESSION['prenom'])) {
							echo "<h4> Your cart is empty </h4>";
							} else {
								echo "<h4> You're not login </h4>";
							}
						} else if (isset($_GET['error_ae'])) { 
							echo "<h4>Ce produit est deja dans votre panier !</h4>";
							echo "<h2>Your current shopping list</h2>";						
						} else {
					?>
					<h2>Your current shopping list</h2>
					<?php
						}
					?>
				</center>
				<hr>
			</div>
			<div id="shopping_list">
				<?php
					while($row = mysqli_fetch_assoc($resultat)) {
						$resultat_2 = mysqli_query($bdd, 'SELECT DISTINCT * FROM Produits WHERE ID = "' . $row['ID_produit'] . '"');
						while ($row_2 = mysqli_fetch_assoc($resultat_2)) {
						?>
							<div id="<?php echo ($row_2['Libelle']); ?>">
								<table style="table-layout:fixed;">		
									<h3><?php echo ($row_2['Libelle']); ?></h3>
									<td width="200px"><img src="../images/<?php echo ($row_2['Libelle']); ?>.svg" class="image" alt="<?php echo ($row_2['Libelle']); ?>"/></td>
									<td width="80%">
										<p><?php echo ($row_2['Description']); 
										$price_item = $price_item + ($row_2['Prix_vente'] * $row['Quantity']);
										$tva_price_item = ($price_item * 1.2);
										?></p>
										<h3><?php echo ($row_2['Prix_vente'] * $row['Quantity']); ?> $</h3>
									</td>
									<td width="150px">
									<form method="post" action="shopping.php?idp=<?php echo ($row_2['ID']); ?>">
									<table>
										<center>
											<td colspan="2">
												<button type="submit" name="submit_minus" id="minus" value="-" style="margin-left:0px;margin-right:0px;border:none; border-radius: 0px; width: 50px; display: inline; background-color: #e74c3c;border-top-left-radius: 5px; border-bottom-left-radius: 5px; color:white; padding-top:13px; padding-bottom: 14px;">-</button>
											</td>
											<td>
												<input name="number" style="margin-left: -4px; height: 21px; border:none; border-radius: 0px; width: 30px; display: inline;text-align:center" class="short" name="quantity" type="text" value="<?php echo ($row['Quantity']); ?>" required readonly="readonly">
											</td>
											<td>
											<button type="submit" id="plus" name="submit_plus" value="+" style="margin-left: -24px; border:none; border-radius: 0px; width: 50px; display: inline; background-color: #27ae60; border-top-right-radius: 5px; border-bottom-right-radius: 5px; color: white; padding-top:13px; padding-bottom: 14px;">+</button>
											</td>
											
										</center>
									</table>
									</form>
									</td>
									<td>
										<a class="no_float quick_action_a" href="shopping.php?remove&idp=<?php echo ($row_2['ID']); ?>">Remove</a>
									</td>
								</table>
								<hr>
					    	</div>
						<?php
						}
					}
				?>
				<center>
					<p>Total excluding taxes: <?php echo ($price_item); ?> $</p>
					<p>Total including taxes: <?php echo ($tva_price_item); ?> $</p>
					<?php
						if ($tva_price_item < 150 AND $tva_price_item > 10) {
							?>
								<p>Because your order has a value inferior to 150$, you have a shipping fee! (-10$)</p>
							<?php
							$total = $tva_price_item - 10;
						} else {
							$total = $tva_price_item;
						}
					?>
					
					<b><p>Total: <?php echo ($total); ?> $</p></b>
				</center>
			</div>
			<center>
			   	<a class="no_float quick_action_a" href="billing.php">Payment options</a>
			</center>
		<?php
			include "../core/footer.php";
		?>
</html>