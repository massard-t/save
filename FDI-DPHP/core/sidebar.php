<h2>Recent products</h2>
<div class="sidebar">
<?php
	$resultat = mysqli_query($bdd, 'SELECT * FROM Produits ORDER BY ID DESC LIMIT 1, 6');
		while($row = mysqli_fetch_assoc($resultat)) {

?>
<div class="recent_products">
	<h3><?php echo ($row['Libelle']); ?></h3>
	<img src="images/<?php echo ($row['Libelle']); ?>.svg" class="image" alt="Missing picture"/><br/>
	<a class="quick_action_a" href="src/product_page.php?produit=<?php echo ($row['Libelle']); ?>" style="float:left;">See product page</a>
	<a class="quick_action_a add_to_cart no_float" href='#'>Add to cart</a>
	<br/><br/><br/>
</div>
<?php
	}
?>
</div>
