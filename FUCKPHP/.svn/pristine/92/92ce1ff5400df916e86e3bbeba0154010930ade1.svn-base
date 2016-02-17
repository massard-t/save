	<div class="wrapper">
		<div class="navbar">
			<ul class="nav">
				<li class="logo"><a href="../index.php"><img src="../images/LOGO.png" alt="Logo" style="width:50px; height:50px;"/></a>
				<li class="item"><a href="../index.php">SEGFAULT CORP </a></li><li class="separator">/</li>
				<li class="item"><a href="../src/products.php">PRODUCTS </a></li><li class="separator">/</li>
				<li class="item"><a href="../src/about.php">ABOUT </a></li><li class="separator">/</li>
				<li class="item"><a href="../src/ticketing.php">CONTACT US <small>with a ticket</small></a></li>
				<div class="quick_lauch">
					<?php

					if (!isset($_SESSION['prenom'])) {
						echo ('<a class="quick_action" href="/../src/login.php"><img src="../images/man.png" height="15"/> Login Page </a>');
					} else {
						echo ('<a class="quick_action" href="../src/profile.php"><img src="../images/man.png" height="15"/> Welcome, '.$_SESSION['prenom'].' '.$_SESSION['nom'].'</a>');
					}
					?>
					<?php
					if ($_SESSION['role'] == 1) {
							echo ('<a class="quick_action" href="../src/admin.php">Access to admin panel </a>');
						}
					?>
					<a class="quick_action right" href="../src/shopping.php"><img src="../images/cart.png" height="15"/>
					Cart
					<?php 
					if (isset($_SESSION['prenom'])) {
					?>
					<span class="count">
						<?php
						$user = $_SESSION['ID'];
						if (isset($user)) {
							$query = 'SELECT * from Produit_Utilisateur WHERE ID_utilisateur = "' . $user . '"';
							$result = mysqli_query($bdd, $query);
								if (mysqli_num_rows($result) > 0) {
								    $quantity = 0;
								    while($row = mysqli_fetch_assoc($result)) {
								        $quantity = $quantity + $row['Quantity'];
								    }
								}
							$count = mysqli_num_rows($result);
							$count = $quantity;
							if (!isset($count) OR $count == 0) {
								echo ("0<small> item</small>");
							} else if ($count == 1) {
								echo ("1<small> item</small>");
							} else {
								echo ($count." <small>items</small>");
							}
						}
						?>
					</span>
				<?php
					}
				?>
					</a>
					
				</div>
			</ul>
		</div>