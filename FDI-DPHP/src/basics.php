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
		<table class="max_width">
			<center>
				<h2>Basics</h2>
				<a class="no_float quick_action_a" href="products.php">Return to the category page</a><hr>
				<a class="no_float quick_action_a alphabetical" href="#">Alphabetical sort</a>
				<a class="no_float quick_action_a reload"  style="display:none" href="#">Back to category view</a><hr>
			</center>
			<th>
				<a name="email"><h3>Email client</h3></a>
			</th>
			<th>
				<a name="internet"><h3>Internet</h3></a>
			</th>
			<th>
				<a name="other"><h3>Other</h3></a>
			</th>
			<tr>
				<td>
					<a class="sort_item" id="item1" href="product_page_mail.php"><p>Thunder Sparrow</p></a>
					<a class="sort_item" id="item2" href="404.php"><p>Coming soon!</p></a>
				</td>
				<td>
					<a class="sort_item" id="item8" href="404.php"><p>Coming soon!</p></a>
					<a class="sort_item" id="item9" href="404.php"><p>Coming soon!</p></a>
				</td>
				<td>
					<a class="sort_item" id="item15" href="product_page_pdf.php"><p>PDF Segreader</p></a>
					<a class="sort_item" id="item16" href="product_page_sql.php"><p>My SegSQL</p></a>
					<a class="sort_item" id="item17" href="404.php"><p>Coming soon!</p></a>
					<a class="sort_item" id="item18" href="404.php"><p>Coming soon!</p></a>
				</td>
			</tr>
		</table>
	<?php
		include "../core/footer.php";
	?>