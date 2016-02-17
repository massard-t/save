<?php
	include "core/head.php";
?>
<body>
	<script src="js/jquery.js">
	</script>
	<script src="js/js-cookie-master/src/js.cookie.js"></script>
<?php
	include "core/menu.php";
?>
		<div class="core">
			<center>
				<div class="big_alert" style="width: 1000px; height: 45vh">
					<h1 id="animate1" class="hidden" style="padding-bottom : 5vh; color: #ecf0f1"> <b>Welcome on segfault.io </b></h1>
					<h2 id="animate2" class="hidden" style="padding-bottom : 5vh; color: #ecf0f1"> 
						<hr style="border: 0; border-top: 1px solid #2c3e50"/>
							Why are we differents ?
						<hr style="border: 0; border-top: 1px solid #2c3e50"/>
					</h2>
					<h3 id="animate3" class="hidden" style="display: none; color: #ecf0f1"> Because all our products are totally optimised and controlled weekly to reduce risks to a <b>minimum</b></h3>
					<table width="100%" style="width: 100%; margin: 0 auto; padding-left: 120px;"> 
						<td id="animate4" class="hidden">
							<center><img src="images/text.svg" class="image" width="60px"/></center>
						</td>
						<td id="animate5" class="hidden">
							<center><img src="images/internet.svg" class="image" width="60px"/></center>
						</td >
						<td id="animate6" class="hidden">
							<center><img src="images/reader.svg" class="image" width="60px"/></center>
						</td>
						<td id="animate7" class="hidden">
							<center><img src="images/music.svg" class="image" width="60px"/></center>
						</td>
						<td id="animate8" class="hidden">
							<center><img src="images/database.svg" class="image" width="60px"/></center>
						</td>
					</table>
				</div>
			</center>
			<div class="popular_product">
				<?php
					$resultat = mysqli_query($bdd, 'SELECT * FROM Produits ORDER BY ID DESC LIMIT 0, 1');
					while($row = mysqli_fetch_assoc($resultat)) {
						?>
						<h3><center><?php echo "Most recent product"; ?></center><hr></h3>
						<table style="table-layout:fixed; margin: 0 auto">
							<center><tr>
								<td whidth="200px">
									<img src="images/<?php echo ($row['Libelle']); ?>.svg" class="image"/>
								</td>
								<td whidth="600px">
									<div class="description">
										<p><h4><center><?php echo ($row['Description']); ?></center></h4></p>
										<a class="quick_action_b" href="src/product_page.php?produit=<?php echo ($row['Libelle']); ?>" >See page product</a><a class="quick_action_b add_to_cart" href="src/shopping.php?add&pdt=<?php echo ($row['ID']); ?>">Add to cart</a>
									</div>
								</td>
							</tr></center>
						</table>
						<?php
					}
				?>				
			</div>
			<?php
				include "core/sidebar.php";
			?>
			<div class="main">
				<?php
				if (isset($_GET['sort'])) {
					if ($_GET['sort'] == "price") {
						$resultat = mysqli_query($bdd, 'SELECT * FROM Produits ORDER BY Prix_vente');
						?>
							<a class="quick_action_a add_to_cart" href='index.php' style="position: absolute; top: 890px; right: 620px;">Sort by name</a><br /><br />
						<?php
					} 
				} else {
						$resultat = mysqli_query($bdd, 'SELECT * FROM Produits ORDER BY Libelle');
						?>
							<a class="quick_action_a add_to_cart" href='index.php?sort=price' style="position: absolute; top: 890px; right: 620px;">Sort by price</a><br /><br />
						<?php
				}
				while($row = mysqli_fetch_assoc($resultat)) {
					?>
				<a href="src/product_page.php?produit=<?php echo ($row['Libelle']); ?>"><div class="recent_products">
					<h3><?php echo ($row['Libelle']); ?></h3>
					<table>
						<tr>
							<td>
								<a href="src/product_page.php?produit=<?php echo ($row['Libelle']); ?>"><img src="images/<?php echo ($row['Libelle']); ?>.svg" class="image" alt="Missing picture"/></a><br/>
							</td>
							<td>
								<div class="description">
									<p><?php echo ($row['Description']); ?></p>
								</div>
							</td>
						</tr>
					</table>
					<a class="quick_action_a" href="src/product_page.php?produit=<?php echo ($row['Libelle']); ?>"><?php echo ($row['Prix_vente']); ?> $</a>
					<a class="quick_action_a add_to_cart" href='src/shopping.php?add&pdt=<?php echo ($row["ID"]); ?>'>Add to cart</a>
				</center><br/><br/><br/>
				</div></a>
				<hr>
					<?php      			
    			}
    		?>
			</div>
		</div>
		<?php
			include "core/footer.php";
		?>