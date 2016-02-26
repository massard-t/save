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
			<div class="sidebar">
				<div class="recent_products">
					<h3>Recent products</h3>
					<img src="../images/browser.svg" class="image" alt="Missing picture"/><br/>
					<a class="quick_action_a" href="404.php" >SEE PRODUCT PAGE</a></center><br/><br/><br/>
				</div>
				<div class="recent_products">
					<h3>Recent products</h3>
					<img src="../images/music-player.svg" class="image" alt="Missing picture"/><br/>
					<a class="quick_action_a" href="product_page_enc.php">SEE PRODUCT PAGE</a></center><br/><br/><br/>
				</div>
				<div class="recent_products">
					<h3>Recent products</h3>
					<img src="../images/text-editor.svg" class="image" alt="Missing picture"/><br/>
					<a class="quick_action_a" href="404.php">SEE PRODUCT PAGE</a></center><br/><br/><br/>
				</div>
				<div class="recent_products">
					<h3>Recent products</h3>
					<img src="../images/database.svg" class="image" alt="Missing picture"/><br/>
					<a class="quick_action_a" href="product_page_sql.php">SEE PRODUCT PAGE</a></center><br/><br/><br/>
				</div>
			</div>
			<div class="main">
				<div class="recent_products">
					<h3>Well shot</h3>
					<img src="../images/pics.svg" class="image" alt="Missing picture"/><br/>
					<div class="description">
						<p>With this software, you can edit, save, filter and upload on your very personnal cloud, every picture in your life. This is also used by every photographer in the world. You can create your own filters or share them with your friends.</p>
					</div><br/>
					<span class="quick_action_a">5 $</span></center><br/><br/><br/>
				</div>
				<hr>				
				<center><a class="no_float quick_action_a" href="shopping.php">Add to cart</a></center></center><br/><br/><br/>
				<hr>
				<h3>Commentaires</h3>
				<div class="commentaires">

				</div>				
				<textarea id="comment_textbox" type="text" name="comment" value="Your comment here" style="width:90%; margin: 0 auto; min-height: 200px; font-family: arial"></textarea>
				
				<center><input id="comment_validate" type="submit" name="send" value="Send !"></center><br />
				
			</div>
		</div>
<?php
	include "../core/footer.php";
?>
</html>
