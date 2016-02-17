<?php
	include "../core/head.php";
?>
<body>
	<script src="../js/jquery.js"></script>
	<script src="../js/js-cookie-master/src/js.cookie.js"></script>
	<?php
		include "../core/menu.php";
	?>
		<div class="core">
			<div class="popular_product">
				<h3>
					<center>Most popular product</center><hr>
				</h3>
				<table>
					<tr>
						<td>
							<img src="../images/mail.svg" class="image"/>
						</td>
						<td>
							<div class="description">
								<h4>Thunder Sparrow</h4>
								<p>Simply the best email client, allowing total control of your mails, protecting you against spams. Manage all your accounts from a single client in an efficicnet way.</p>
								<a class="quick_action_b" href="product_page_mail.php" >SEE PRODUCT PAGE</a>
							</div>
						</td>
					</tr>
				</table>
			</div>
			<div class="sidebar">
				<div class="recent_products">
					<h3>Recent products</h3>
					<img src="../images/browser.svg" class="image" alt="Missing picture"/><br/>
					<a class="quick_action_a" href="log.php" >SEE PRODUCT PAGE</a></center><br/><br/><br/>
				</div>
				<div class="recent_products">
					<h3>Recent products</h3>
					<img src="../images/music-player.svg" class="image" alt="Missing picture"/><br/>
					<a class="quick_action_a" href="log.php">SEE PRODUCT PAGE</a></center><br/><br/><br/>
				</div>
				<div class="recent_products">
					<h3>Recent products</h3>
					<img src="../images/text-editor.svg" class="image" alt="Missing picture"/><br/>
					<a class="quick_action_a" href="log.php">SEE PRODUCT PAGE</a></center><br/><br/><br/>
				</div>
				<div class="recent_products">
					<h3>Recent products</h3>
					<img src="../images/database.svg" class="image" alt="Missing picture"/><br/>
					<a class="quick_action_a" href="log.php">SEE PRODUCT PAGE</a></center><br/><br/><br/>
				</div>
			</div>
			<div class="main">
				<div class="recent_products">
					<h3>Well Shot</h3>
					<img src="../images/pics.svg" class="image" alt="Missing picture"/><br/>
					<div class="description">
						<p>Well Shot is the segfault soft from segfault corp for quickly display, browse edit and sort your pictures.</p>
					</div><br/>
					<a class="quick_action_a" href="log.php">35 $</a></center><br/><br/><br/>
				</div>
				<hr>

				<div class="recent_products">
					<h3>My SegSQL</h3>
					<img src="../images/database.svg" class="image" alt="Missing picture"/><br/>
					<div class="description">
						<p>With myseqSQL, your will discover an new easy to use and functionnal world in database management</p>
					</div><br/>
					<a class="quick_action_a" href="log.php">42 $</a></center><br/><br/><br/>
				</div>
				<hr>
				<div class="recent_products">
					<h3>PDF Segreader</h3>
					<img src="../images/reader_pdf.svg" class="image" alt="Missing picture"/><br/>
					<div class="description">
						<p>Simply open, read and close pdf files for all the family !</p>
					</div><br/>
					<a class="quick_action_a" href="log.php">5 $</a></center><br/><br/><br/>
				</div>
				<hr>				
			</div>
		</div>
	<?php
		include "../core/footer.php";
	?>
