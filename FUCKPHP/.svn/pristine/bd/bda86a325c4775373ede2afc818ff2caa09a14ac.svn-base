<?php
require "../core/head.php";
require "../core/menu.php";
if (isset($_POST['delete_user'])) {
	$query = 'DELETE FROM Utilisateurs WHERE ID = "'. $_POST['delete'] .'"';
	if (mysqli_query($bdd, $query)) {
		echo "Suppression reussite !";
		echo '<a class="quick_action_a" href="admin.php">Back to admin main page</a>';
	}
}
if (isset($_POST['validate_product_add'])) {
	$today = date("Y-m-d H:i:s");
	$query = 'INSERT INTO Produits (Libelle, Description, Prix_achat, Prix_vente, Date_creation, Date_modification)
			  VALUES ("'.$_POST['name'].'", "'.$_POST['description'].'", "'.$_POST['price_b'].'", "'.$_POST['price_c'].'", "'.$today.'", "'.$today.'")';
	mysqli_query($bdd, $query);
}

if (isset($_POST['validate_delete_product'])) {
	$query = 'DELETE FROM Produits WHERE ID = "'. $_POST['delete'] .'"';
	if (mysqli_query($bdd, $query)) {
		echo "Suppression reussite !";
		echo '<a class="quick_action_a" href="admin.php">Back to admin main page</a>';
	}
}

if(!isset($_SESSION['ID'])) {
	header("Location: login.php");
}

if ($_SESSION['role'] != 1) {
	header("Location: login.php");
}
	if (isset($_POST['remove_user'])) {
	$query = 'SELECT * FROM Utilisateurs';
	$result = mysqli_query($bdd, $query);
	?>
	<div class="core">
	<table width="100%" style="margin: 0 auto;">
	<?php
	while ($row = mysqli_fetch_assoc($result)) {
		?>
		<tr>
			<td>
				<?php echo "<span style='color: white'>".($row['Prenom'])."</span>" ?>
			</td>
			<td>
				<?php echo "<span style='color: white'>".($row['Nom'])."</span>" ?>
			</td>
			<td>
				<?php echo "<span style='color: white'>".($row['Email'])."</span>" ?>
			</td>
			<td>
				<?php 
				if ($row['Roles'] == "1") {
					echo "Administrator";
				} else {
					echo "User";
				}
				?>
			</td>
			<td>
				<?php
				if ($row['Roles'] != 1) {
					?>
					<form method="post" cible="admin.php">
						<input type="text" hidden name="delete" value="<?php echo ($row['ID']); ?>">
						<input type="submit" name="delete_user" Value="Supprimer">
					</form>
					<?php
				}
				?>
			</td>
		</tr>	
		<?php
		}
		?>
		</table>
		<a class="quick_action_a" href="admin.php">Back to admin main page</a>
		</div>
	<?php
		} else if (isset($_POST['add_product'])) {
	?>
	<form method="post" cible="admin.php">
		<input type="text" name="name" placeholder="The name of the product"><br />
		<input type="number" name="price_b" placeholder="Price to buy"><br />
		<input type="number" name="price_c" placeholder="Price to cost"><br />
		<textarea type="text" name="description" placeholder="description of the product"></textarea><br />
		<input type="submit" name="validate_product_add" value="Valider"></input><br />
	</form>	
	<?php
	echo '<a class="quick_action_a" href="admin.php">Back to admin main page</a>';
	}  else if (isset($_POST['remove_product'])) {
	$query = 'SELECT * FROM Produits';
	$result = mysqli_query($bdd, $query);
	?>
		<div class="core">
		<table width="100%" style="margin: 0 auto;">
	<?php
	while ($row = mysqli_fetch_assoc($result)) {
		?>
		<tr>
			<td>
				<?php echo "<span style='color: white'>".($row['Libelle'])."</span>" ?>
			</td>
			<td>
				<form method="post" cible="admin.php">
					<input type="text" hidden name="delete" value="<?php echo ($row['ID']); ?>">
					<input type="submit" name="validate_delete_product" Value="Supprimer">
				</form>
			</td>
		</tr>	
		<?php
		}
		?>
		</table>
		<a class="quick_action_a" href="admin.php">Back to admin main page</a>
	</div>
	<?php
	} else {
	?>
	<div class="core">
	<h1 style="color: white; text-align: center; margin: 0 auto;"><br />Welcome <?php echo ($_SESSION['prenom']); ?> !</h1> <hr /><br />
	<form method="post" cible="admin.php">
		<input type="submit" name="remove_user" value="Delete an user">
		<input type="submit" name="add_product" value="Add a product">
		<input type="submit" name="remove_product" value="Delete a product" style="width: 210px;">
	</form>
</div>
<?php
}
?>